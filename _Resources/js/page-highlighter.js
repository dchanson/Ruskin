
const HIGHLIGHT_STORAGE_KEY = 'ruskin_highlight_terms';

if (typeof PageHighlighter === 'undefined') {
  class PageHighlighter {
    constructor() {
      this.highlights = [];
      this.currentHighlightIndex = -1;
      this.notification = null;
      this.currentTerms = [];
      this.init();
    }

    init() {
      if (!document.getElementById('page-highlighter-styles')) {
        this.injectCSS();
      }
      
      const urlTerms = this.getHighlightTermsFromURL();
      const storedTerms = this.getStoredHighlightTerms();
      
      this.currentTerms = urlTerms.length > 0 ? urlTerms : storedTerms;
      
      if (this.currentTerms.length > 0) {
        this.storeHighlightTerms(this.currentTerms);
        
        const filteredTerms = this.filterOutIndividualWords(this.currentTerms);
          
        if (filteredTerms.length > 0) {
          this.highlightTerms(filteredTerms);
          this.showNotification(filteredTerms);
        }
        
        this.enhanceInternalLinks();
      }
    }

    getHighlightTermsFromURL() {
      const urlParams = new URLSearchParams(window.location.search);
      const highlightParam = urlParams.get('highlight');
      
      if (!highlightParam) return [];
      
      return this.parseHighlightTerms(highlightParam);
    }

    getStoredHighlightTerms() {
      try {
        const stored = sessionStorage.getItem(HIGHLIGHT_STORAGE_KEY);
        return stored ? JSON.parse(stored) : [];
      } catch (error) {
        console.warn('Could not retrieve stored highlight terms:', error);
        return [];
      }
    }

    storeHighlightTerms(terms) {
      try {
        sessionStorage.setItem(HIGHLIGHT_STORAGE_KEY, JSON.stringify(terms));
      } catch (error) {
        console.warn('Could not store highlight terms:', error);
      }
    }

    clearStoredHighlightTerms() {
      try {
        sessionStorage.removeItem(HIGHLIGHT_STORAGE_KEY);
      } catch (error) {
        console.warn('Could not clear stored highlight terms:', error);
      }
    }

    parseHighlightTerms(highlightParam) {
      const rawTerms = highlightParam.split(',').map(term => term.trim()).filter(term => term);
      const cleanTerms = [];
      
      rawTerms.forEach(term => {
        const cleanTerm = term.replace(/^["']|["']$/g, '');
        if (cleanTerm.length > 0) {
          cleanTerms.push(cleanTerm);
        }
      });
      
      return cleanTerms;
    }

    filterOutIndividualWords(terms) {
      const phrases = terms.filter(term => term.includes(' '));
      const singleWords = terms.filter(term => !term.includes(' '));
      
      if (phrases.length === 0) {
        return singleWords;
      }
      
      const filteredSingleWords = singleWords.filter(word => {
        return !phrases.some(phrase => 
          phrase.toLowerCase().includes(word.toLowerCase())
        );
      });
      
      return [...phrases, ...filteredSingleWords];
    }

    enhanceInternalLinks() {
      const links = document.querySelectorAll('a[href]');
      
      links.forEach(link => {
        const href = link.getAttribute('href');
        
        if (this.isInternalLink(href) && !href.includes('highlight=')) {
          const separator = href.includes('?') ? '&' : '?';
          const highlightParam = encodeURIComponent(this.currentTerms.join(','));
          link.href = href + separator + 'highlight=' + highlightParam;
          
          if (!link.querySelector('.persistent-highlight-indicator')) {
            const indicator = document.createElement('span');
            indicator.className = 'persistent-highlight-indicator';
            indicator.title = 'This page will highlight your search terms';
            indicator.innerHTML = ' 🔍';
            indicator.style.fontSize = '0.7em';
            indicator.style.opacity = '0.6';
            indicator.style.color = '#856404';
            link.appendChild(indicator);
          }
        }
      });
    }

    isInternalLink(href) {
      if (!href) return false;
      
      if (href.startsWith('#') || 
          href.startsWith('http://') || 
          href.startsWith('https://') ||
          href.startsWith('mailto:') ||
          href.startsWith('tel:') ||
          href.startsWith('javascript:') ||
          href.startsWith('ftp:')) {
        return false;
      }
      
      return true;
    }

    injectCSS() {
      const style = document.createElement('style');
      style.id = 'page-highlighter-styles';
      style.textContent = `
        .search-highlight {
          background: linear-gradient(120deg, #fff3cd 0%, #ffeaa7 100%);
          padding: 2px 5px;
          border-radius: 4px;
          font-weight: 600;
          color: #856404;
          position: relative;
          transition: all 0.3s ease;
          box-shadow: 0 2px 4px rgba(133, 100, 4, 0.15);
          border: 1px solid rgba(133, 100, 4, 0.2);
        }

        .search-highlight.current-highlight {
          background: linear-gradient(120deg, #ff6b6b 0%, #ee5a52 100%);
          color: white;
          box-shadow: 0 4px 12px rgba(238, 90, 82, 0.4);
          transform: scale(1.05);
          z-index: 10;
          border: 1px solid rgba(238, 90, 82, 0.3);
        }

        .search-highlight.current-highlight::before {
          content: '';
          position: absolute;
          top: -3px;
          left: -3px;
          right: -3px;
          bottom: -3px;
          background: linear-gradient(45deg, #ff6b6b, #ee5a52);
          border-radius: 6px;
          z-index: -1;
          opacity: 0.4;
          animation: pulse 2s infinite;
        }

        @keyframes pulse {
          0%, 100% { 
            transform: scale(1); 
            opacity: 0.4; 
          }
          50% { 
            transform: scale(1.05); 
            opacity: 0.7; 
          }
        }

        .highlight-notification {
          position: fixed;
          top: 20px;
          right: 20px;
          background: linear-gradient(135deg, #5d7e9b 0%, #4a6a84 100%);
          color: white;
          padding: 12px 20px;
          border-radius: 8px;
          font-family: 'RuskinFont', serif;
          font-size: 14px;
          font-weight: 600;
          box-shadow: 0 4px 16px rgba(93, 126, 155, 0.3);
          z-index: 10000;
          animation: slideIn 0.3s ease-out;
          max-width: 300px;
        }

        .highlight-notification .clear-highlights {
          background: rgba(255, 255, 255, 0.2);
          border: none;
          color: white;
          padding: 4px 8px;
          border-radius: 4px;
          cursor: pointer;
          font-size: 12px;
          margin-left: 8px;
          margin-top: 4px;
          display: inline-block;
        }

        .highlight-notification .clear-highlights:hover {
          background: rgba(255, 255, 255, 0.3);
        }

        .persistent-highlight-indicator {
          font-size: 0.7em !important;
          opacity: 0.6 !important;
          color: #856404 !important;
        }

        @keyframes slideIn {
          from {
            opacity: 0;
            transform: translateX(100px);
          }
          to {
            opacity: 1;
            transform: translateX(0);
          }
        }

        @media (max-width: 768px) {
          .highlight-notification {
            top: 10px;
            right: 10px;
            left: 10px;
            text-align: center;
            max-width: none;
          }
        }

        @media (prefers-reduced-motion: reduce) {
          .search-highlight,
          .search-highlight.current-highlight {
            transition: none;
            animation: none;
          }
          
          .search-highlight.current-highlight::before {
            animation: none;
          }

          .highlight-notification {
            animation: none;
          }
        }
      `;
      
      document.head.appendChild(style);
    }

    highlightTerms(terms) {
      const walker = document.createTreeWalker(
        document.body,
        NodeFilter.SHOW_TEXT,
        {
          acceptNode: (node) => {
            const parent = node.parentElement;
            if (!parent) return NodeFilter.FILTER_REJECT;
            
            const tagName = parent.tagName.toLowerCase();
            if (['script', 'style', 'noscript'].includes(tagName)) {
              return NodeFilter.FILTER_REJECT;
            }
            
            if (parent.classList.contains('search-highlight')) {
              return NodeFilter.FILTER_REJECT;
            }
            
            return NodeFilter.FILTER_ACCEPT;
          }
        }
      );

      const textNodes = [];
      let node;
      while (node = walker.nextNode()) {
        textNodes.push(node);
      }

      textNodes.forEach(textNode => {
        let text = textNode.textContent;
        let hasMatch = false;
        let newHTML = text;

        const sortedTerms = terms.sort((a, b) => b.length - a.length);

        sortedTerms.forEach(term => {
          const escapedTerm = this.escapeRegex(term);
          
          const regex = new RegExp(`\\b(${escapedTerm})\\b`, 'gi');
          
          if (regex.test(text)) {
            hasMatch = true;
            newHTML = newHTML.replace(regex, '<mark class="search-highlight">$1</mark>');
          }
        });

        if (hasMatch) {
          const wrapper = document.createElement('span');
          wrapper.innerHTML = newHTML;
          textNode.parentNode.replaceChild(wrapper, textNode);
        }
      });

      this.highlights = Array.from(document.querySelectorAll('.search-highlight'));
      
      if (this.highlights.length > 0) {
        this.currentHighlightIndex = 0;
        this.scrollToHighlight(0);
      }
    }

    escapeRegex(string) {
      return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
    }

    showNotification(terms) {
      if (this.highlights.length === 0) return;

      const existingNotification = document.querySelector('.highlight-notification');
      if (existingNotification) {
        existingNotification.remove();
      }

      this.notification = document.createElement('div');
      this.notification.className = 'highlight-notification';
      this.notification.innerHTML = `
        🔍 ${this.highlights.length} matches found for: <strong>"${terms.join('", "')}"</strong><br>
        <small>Press Enter to navigate • Escape to clear</small>
        <button class="clear-highlights">Clear Highlights</button>
      `;

      const clearButton = this.notification.querySelector('.clear-highlights');
      clearButton.addEventListener('click', () => {
        this.clearHighlights();
      });

      document.body.appendChild(this.notification);

      // Auto-hide notification after 10 seconds
      setTimeout(() => {
        if (this.notification && this.notification.parentNode) {
          this.notification.style.opacity = '0.7';
        }
      }, 10000);
    }

    scrollToHighlight(index) {
      if (index < 0 || index >= this.highlights.length) return;

      this.highlights.forEach(highlight => highlight.classList.remove('current-highlight'));
      this.highlights[index].classList.add('current-highlight');
      
      this.highlights[index].scrollIntoView({
        behavior: 'smooth',
        block: 'center'
      });
    }

    nextHighlight() {
      if (this.highlights.length === 0) return;
      
      this.currentHighlightIndex = (this.currentHighlightIndex + 1) % this.highlights.length;
      this.scrollToHighlight(this.currentHighlightIndex);
    }

    previousHighlight() {
      if (this.highlights.length === 0) return;
      
      this.currentHighlightIndex = this.currentHighlightIndex <= 0 
        ? this.highlights.length - 1 
        : this.currentHighlightIndex - 1;
      this.scrollToHighlight(this.currentHighlightIndex);
    }

    clearHighlights() {
      this.highlights.forEach(highlight => {
        const parent = highlight.parentNode;
        parent.replaceChild(document.createTextNode(highlight.textContent), highlight);
        parent.normalize();
      });

      if (this.notification && this.notification.parentNode) {
        this.notification.remove();
      }

      this.clearStoredHighlightTerms();

      const url = new URL(window.location);
      url.searchParams.delete('highlight');
      window.history.replaceState({}, document.title, url.toString());

      this.highlights = [];
      this.currentHighlightIndex = -1;
      this.notification = null;
      this.currentTerms = [];

      document.querySelectorAll('.persistent-highlight-indicator').forEach(indicator => {
        indicator.remove();
      });
    }
  }

  window.PageHighlighter = PageHighlighter;
}

if (!window.pageHighlighterEventListenersAdded) {
  window.addEventListener('beforeunload', () => {
    if (window.pageHighlighter && window.pageHighlighter.highlights.length > 0) {
      const url = new URL(window.location);
      url.searchParams.delete('highlight');
      window.history.replaceState({}, document.title, url.toString());
    }
  });

  document.addEventListener('DOMContentLoaded', () => {
    if (!window.pageHighlighter) {
      window.pageHighlighter = new PageHighlighter();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (!window.pageHighlighter || window.pageHighlighter.highlights.length === 0) return;

    if (e.key === 'Enter') {
      e.preventDefault();
      window.pageHighlighter.nextHighlight();
    }
    
    if ((e.ctrlKey || e.metaKey) && e.key === 'g' && !e.shiftKey) {
      e.preventDefault();
      window.pageHighlighter.nextHighlight();
    }
    
    if ((e.ctrlKey || e.metaKey) && e.key === 'G' && e.shiftKey) {
      e.preventDefault();
      window.pageHighlighter.previousHighlight();
    }
    
    if (e.key === 'Escape') {
      window.pageHighlighter.clearHighlights();
    }
  });

  window.pageHighlighterEventListenersAdded = true;
}