let currentSearchParams = null;
let currentPage = 1;
let currentPerPage = 10;
let fieldCounter = 1;
let searchTerms = []; // Store current search terms for highlighting

function toggleAdvanced() {
  const section = document.getElementById('advancedSearch');
  const btn = document.querySelector('.toggle-advanced-btn');
  if (section.style.display === 'block') {
    section.style.display = 'none';
    btn.textContent = '+ Advanced Search';
  } else {
    section.style.display = 'block';
    btn.textContent = '- Advanced Search';
  }
}

function updateFieldSelector() {
  const fieldSelector = document.getElementById('fieldType');
  const existingFields = Array.from(
    document.querySelectorAll('.advanced-field[data-field-type]'),
  ).map((field) => field.getAttribute('data-field-type'));

  Array.from(fieldSelector.options).forEach((option) => {
    option.disabled = false;
    option.style.color = '';
  });

  existingFields.forEach((fieldType) => {
    const option = fieldSelector.querySelector(`option[value="${fieldType}"]`);
    if (option) {
      option.disabled = true;
      option.style.color = '#999';
    }
  });
}

function showFieldSelector() {
  updateFieldSelector();
  document.getElementById('fieldSelector').classList.remove('hidden-element');
}

function hideFieldSelector() {
  document.getElementById('fieldSelector').classList.add('hidden-element');
  document.getElementById('fieldType').value = '';
}

function addField() {
  const fieldType = document.getElementById('fieldType').value;
  if (!fieldType) {
    alert('Please select a field type first.');
    return;
  }

  const existingField = document.querySelector(`.advanced-field[data-field-type="${fieldType}"]`);
  if (existingField) {
    alert('This field type is already added. You can only have one field of each type.');
    return;
  }

  fieldCounter++;
  const fieldsContainer = document.getElementById('advancedFields');
  const fieldDiv = document.createElement('div');
  fieldDiv.className = 'advanced-field';
  fieldDiv.setAttribute('data-field-type', fieldType);

  let fieldHTML = '';
  let inputId, typeId, inputName, typeName, label, placeholder, typeOptions;

  switch (fieldType) {
    case 'person':
      inputId = `persName_${fieldCounter}`;
      typeId = `persNameType_${fieldCounter}`;
      inputName = 'persName';
      typeName = 'persNameType';
      label = 'Person Name';
      placeholder = 'e.g. John Ruskin';
      typeOptions = `
            <option value="all">All</option>
            <option value="fictional">Fictional</option>
            <option value="pen_name">Pen name</option>
            <option value="fictional_person">Fictional Person</option>
          `;
      break;
    case 'place':
      inputId = `placeName_${fieldCounter}`;
      typeId = `placeNameType_${fieldCounter}`;
      inputName = 'placeName';
      typeName = 'placeNameType';
      label = 'Place Name';
      placeholder = 'e.g. Venice';
      typeOptions = `
            <option value="all">All</option>
            <option value="building">Building</option>
            <option value="fictional">Fictional</option>
            <option value="scriptural">Scriptural</option>
          `;
      break;
    case 'geog':
      inputId = `geogName_${fieldCounter}`;
      typeId = `geogNameType_${fieldCounter}`;
      inputName = 'geogName';
      typeName = 'geogNameType';
      label = 'Geographical Name';
      placeholder = 'e.g. Bowder stone';
      typeOptions = `
            <option value="all">All</option>
            <option value="fictional">Fictional</option>
          `;
      break;
    case 'org':
      inputId = `orgName_${fieldCounter}`;
      typeId = `orgNameType_${fieldCounter}`;
      inputName = 'orgName';
      typeName = 'orgNameType';
      label = 'Organization Name';
      placeholder = 'e.g. Cadell';
      typeOptions = `
            <option value="all">All</option>
            <option value="fictional">Fictional</option>
          `;
      break;
    case 'name':
      inputId = `name_${fieldCounter}`;
      typeId = `nameType_${fieldCounter}`;
      inputName = 'name';
      typeName = 'nameType';
      label = 'Name';
      placeholder = 'e.g. Marmion';
      typeOptions = `
            <option value="all">All</option>
            <option value="animal">Animal</option>
            <option value="astronomical">Astronomical</option>
            <option value="astrological">Astrological</option>
            <option value="constellation">Constellation</option>
            <option value="fictional_person">Fictional person</option>
            <option value="fictional_place">Fictional place</option>
            <option value="botanical">Botanical</option>
            <option value="building">Building</option>
            <option value="toy">Toy</option>
            <option value="vessel">Vessel</option>
            <option value="person">Person</option>
            <option value="geological">Geological</option>
            <option value="other">Other</option>
          `;
      break;
    case 'title':
      inputId = `bodyTitle_${fieldCounter}`;
      typeId = `bodyTitleType_${fieldCounter}`;
      inputName = 'bodyTitle';
      typeName = 'bodyTitleType';
      label = 'Title';
      placeholder = 'e.g. The Stones of Venice';
      typeOptions = `
            <option value="all">All</option>
            <option value="book">Book</option>
            <option value="manuscript">Manuscript</option>
            <option value="poem">Poem</option>
            <option value="essay">Essay</option>
            <option value="artwork">ArtWork</option>
            <option value="composite">Composite</option>
            <option value="lesson">Lesson</option>
            <option value="bibliography_text">Bibliography text</option>
            <option value="letter">Letter</option>
            <option value="anthology">Anthology</option>
            <option value="archive">Archive</option>
            <option value="other">Other</option>
            `;
      break;
  }

  fieldHTML = `
  <div class="field-content">
    <div class="form-row">
      <div class="form-group" style="flex: 3;">
        <label for="${inputId}">${label}</label>
        <input type="text" name="${inputName}" id="${inputId}" placeholder="${placeholder}" />
      </div>
      <div class="form-group" style="flex: 1; min-width: 120px;">
        <label for="${typeId}">Type</label>
        <select name="${typeName}" id="${typeId}">
          ${typeOptions}
        </select>
      </div>
    </div>
  </div>
<button type="button" class="remove-field-btn" onclick="removeField(this)" title="Remove this field">−</button>
`;
  fieldDiv.innerHTML = fieldHTML;
  fieldsContainer.appendChild(fieldDiv);

  const autocompleteType =
    fieldType === 'name'
      ? 'name'
      : fieldType === 'person'
      ? 'person'
      : fieldType === 'place'
      ? 'place'
      : fieldType === 'geog'
      ? 'geog'
      : fieldType === 'title'
      ? 'title'
      : fieldType === 'org'
      ? 'org'
      : 'name';

  setTimeout(() => {
    attachSuggest(inputId, autocompleteType);
  }, 100);

  hideFieldSelector();
}

function removeField(button) {
  const fieldDiv = button.parentElement;
  fieldDiv.remove();
}

// CORRECTED: Function to collect search terms for highlighting - preserves complete phrases
function collectSearchTerms(form) {
  const terms = [];
  
  // Collect keyword search - KEEP AS COMPLETE PHRASE
  const keyword = form.q.value.trim();
  if (keyword) {
    // Convert to lowercase but keep as complete phrase
    terms.push(keyword.toLowerCase());
  }
  
  // Collect advanced field terms - KEEP AS COMPLETE PHRASES
  const fieldInputs = [
    ...form.querySelectorAll('input[name="persName"]'),
    ...form.querySelectorAll('input[name="placeName"]'),
    ...form.querySelectorAll('input[name="geogName"]'),
    ...form.querySelectorAll('input[name="orgName"]'),
    ...form.querySelectorAll('input[name="name"]'),
    ...form.querySelectorAll('input[name="bodyTitle"]')
  ];
  
  fieldInputs.forEach(input => {
    const value = input.value.trim();
    if (value) {
      terms.push(value.toLowerCase());
    }
  });
  
  return [...new Set(terms.filter(term => term.length > 0))];
}

function createHighlightUrl(originalUrl, terms) {
  if (!terms || terms.length === 0) return originalUrl;
  
  const url = new URL(originalUrl, window.location.origin);
  
  const cleanTerms = terms
    .filter(term => term && term.trim().length > 0)
    .map(term => term.trim());
  
  if (cleanTerms.length === 0) return originalUrl;
  
  url.searchParams.set('highlight', cleanTerms.join(','));
  
  return url.toString();
}

async function performSearch(page = 1, perPage = 10) {
  if (!currentSearchParams) return;

  const params = new URLSearchParams(currentSearchParams);
  params.set('page', page);
  params.set('per_page', perPage);

  const resultsDiv = document.getElementById('results');
  resultsDiv.classList.remove('hidden-element');
  resultsDiv.innerHTML = 'Searching...';

  try {
    const response = await fetch('search_handler.php?' + params.toString());
    const data = await response.json();

    resultsDiv.innerHTML = '';

    if (data.results && data.pagination) {
      displayPaginatedResults(data);
    } else {
      displayLegacyResults(data);
    }
  } catch (error) {
    resultsDiv.innerHTML =
      '<p style="color:red;"> Error retrieving results. Please check console.</p>';
    console.error('Search error:', error);
  }
}

function displayPaginatedResults(data) {
  const resultsDiv = document.getElementById('results');
  const { results, pagination } = data;

  if (!results || results.length === 0) {
    resultsDiv.innerHTML = '<p>No results found.</p>';
    return;
  }

  const paginationInfo = document.createElement('div');
  paginationInfo.className = 'pagination-info';
  paginationInfo.innerHTML = `
        Showing ${pagination.from} to ${pagination.to} of ${pagination.total_results} results
      `;
  resultsDiv.appendChild(paginationInfo);

  // if (searchTerms.length > 0) {
  //   const highlightInfo = document.createElement('div');
  //   highlightInfo.className = 'highlight-info';
  //   highlightInfo.innerHTML = `
  //     <p style="font-size: 0.9rem; color: #666; text-align: center; margin: 10px 0;">
  //       <strong>Tip:</strong> Click on any result link to view the page with your search terms highlighted
  //     </p>
  //   `;
  //   resultsDiv.appendChild(highlightInfo);
  // }

  const grouped = {};
  results.forEach((item) => {
    const dir = item.link.split('/')[1] || 'others';
    if (!grouped[dir]) grouped[dir] = [];
    grouped[dir].push(item);
  });

  const order = ['apparatuses', 'witnesses', 'notes', 'glosses', 'figures'];
  order.forEach((dir) => {
    if (grouped[dir]) {
      const section = document.createElement('div');
      section.innerHTML = `<h2 style="color:#2d3e50;border-bottom:1px solid #ccc;padding-bottom:4px">${
        dir.charAt(0).toUpperCase() + dir.slice(1)
      }</h2>`;

      grouped[dir].forEach((item) => {
        const result = document.createElement('div');
        result.className = 'result-item';
        
        const highlightUrl = createHighlightUrl(item.link, searchTerms);
        
        result.innerHTML = `
                <div class="result-title">
                  <a href="${highlightUrl}" target="_blank">${item.title}</a>
                  ${searchTerms.length > 0 ? '<span class="highlight-indicator" title="This page will highlight your search terms">🔍</span>' : ''}
                </div>
                <div class="result-snippet">${item.snippet}</div>
                <div class="result-link">${item.filename}</div>
              `;
        section.appendChild(result);
      });

      resultsDiv.appendChild(section);
    }
  });

  createPaginationControls(pagination);
}

function displayLegacyResults(results) {
  const resultsDiv = document.getElementById('results');

  if (!Array.isArray(results) || results.length === 0) {
    resultsDiv.innerHTML = '<p>No results found.</p>';
    return;
  }

  if (searchTerms.length > 0) {
    const highlightInfo = document.createElement('div');
    highlightInfo.className = 'highlight-info';
    highlightInfo.innerHTML = `
      <p style="font-size: 0.9rem; color: #666; text-align: center; margin: 10px 0;">
        <strong>Tip:</strong> Click on any result link to view the page with your search terms highlighted
      </p>
    `;
    resultsDiv.appendChild(highlightInfo);
  }

  const grouped = {};
  results.forEach((item) => {
    const dir = item.link.split('/')[1] || 'others';
    if (!grouped[dir]) grouped[dir] = [];
    grouped[dir].push(item);
  });

  const order = ['apparatuses', 'witnesses', 'notes', 'glosses', 'figures'];
  order.forEach((dir) => {
    if (grouped[dir]) {
      const section = document.createElement('div');
      section.innerHTML = `<h2 style="color:#2d3e50;border-bottom:1px solid #ccc;padding-bottom:4px">${
        dir.charAt(0).toUpperCase() + dir.slice(1)
      }</h2>`;

      grouped[dir].forEach((item) => {
        const result = document.createElement('div');
        result.className = 'result-item';
        
        const highlightUrl = createHighlightUrl(item.link, searchTerms);
        
        result.innerHTML = `
                <div class="result-title">
                  <a href="${highlightUrl}" target="_blank">${item.title}</a>
                  ${searchTerms.length > 0 ? '<span class="highlight-indicator" title="This page will highlight your search terms">🔍</span>' : ''}
                </div>
                <div class="result-snippet">${item.snippet}</div>
                <div class="result-link">${item.filename}</div>
              `;
        section.appendChild(result);
      });

      resultsDiv.appendChild(section);
    }
  });
}

function createPaginationControls(pagination) {
  const resultsDiv = document.getElementById('results');

  const paginationContainer = document.createElement('div');
  paginationContainer.className = 'pagination-controls';

  const pageSizeControl = document.createElement('div');
  pageSizeControl.className = 'page-size-control';
  pageSizeControl.innerHTML = `
        <span>Show:</span>
        <select id="pageSizeSelect">
          <option value="10" ${pagination.per_page === 10 ? 'selected' : ''}>10</option>
          <option value="20" ${pagination.per_page === 20 ? 'selected' : ''}>20</option>
          <option value="50" ${pagination.per_page === 50 ? 'selected' : ''}>50</option>
        </select>
        <span>per page</span>
      `;

  const navigationDiv = document.createElement('div');
  navigationDiv.className = 'pagination-nav';

  const prevBtn = document.createElement('button');
  prevBtn.className = 'pagination-btn';
  prevBtn.textContent = '← Previous';
  prevBtn.disabled = !pagination.has_previous;
  prevBtn.onclick = () => {
    if (pagination.has_previous) {
      currentPage = pagination.current_page - 1;
      performSearch(currentPage, currentPerPage);
    }
  };

  const pageInfo = document.createElement('div');
  pageInfo.className = 'page-info';
  pageInfo.textContent = `Page ${pagination.current_page} of ${pagination.total_pages}`;

  const nextBtn = document.createElement('button');
  nextBtn.className = 'pagination-btn';
  nextBtn.textContent = 'Next →';
  nextBtn.disabled = !pagination.has_next;
  nextBtn.onclick = () => {
    if (pagination.has_next) {
      currentPage = pagination.current_page + 1;
      performSearch(currentPage, currentPerPage);
    }
  };

  navigationDiv.appendChild(prevBtn);
  navigationDiv.appendChild(pageInfo);
  navigationDiv.appendChild(nextBtn);

  const rightSpacer = document.createElement('div');

  paginationContainer.appendChild(pageSizeControl);
  paginationContainer.appendChild(navigationDiv);
  paginationContainer.appendChild(rightSpacer);

  resultsDiv.appendChild(paginationContainer);

  document.getElementById('pageSizeSelect').onchange = function (e) {
    currentPerPage = parseInt(e.target.value);
    currentPage = 1;
    performSearch(currentPage, currentPerPage);
  };
}

document.getElementById('searchForm').addEventListener('submit', async function (e) {
  e.preventDefault();

  const form = e.target;
  const q = form.q.value.trim();
  const type = form.type.value;

  searchTerms = collectSearchTerms(form);

  const persNames = Array.from(form.querySelectorAll('input[name="persName"]'))
    .map((input) => input.value.trim())
    .filter((val) => val);
  const placeNames = Array.from(form.querySelectorAll('input[name="placeName"]'))
    .map((input) => input.value.trim())
    .filter((val) => val);
  const geogNames = Array.from(form.querySelectorAll('input[name="geogName"]'))
    .map((input) => input.value.trim())
    .filter((val) => val);
  const orgNames = Array.from(form.querySelectorAll('input[name="orgName"]'))
    .map((input) => input.value.trim())
    .filter((val) => val);
  const names = Array.from(form.querySelectorAll('input[name="name"]'))
    .map((input) => input.value.trim())
    .filter((val) => val);
  const bodyTitles = Array.from(form.querySelectorAll('input[name="bodyTitle"]'))
    .map((input) => input.value.trim())
    .filter((val) => val);

  if (
    !q &&
    persNames.length === 0 &&
    placeNames.length === 0 &&
    geogNames.length === 0 &&
    orgNames.length === 0 &&
    names.length === 0 &&
    bodyTitles.length === 0
  ) {
    alert('Please enter a keyword to search.');
    return;
  }

  const params = new URLSearchParams();
  if (q) params.append('q', q);
  if (type && type !== 'all') params.append('typeFilter', type);

  if (persNames.length > 0) {
    params.append('persName', persNames[0]);
    const persNameType = form.querySelector('select[name="persNameType"]')?.value;
    if (persNameType && persNameType !== 'all') {
      params.append('persNameType', persNameType);
    }
  }

  if (placeNames.length > 0) {
    params.append('placeName', placeNames[0]);
    const placeNameType = form.querySelector('select[name="placeNameType"]')?.value;
    if (placeNameType && placeNameType !== 'all') {
      params.append('placeNameType', placeNameType);
    }
  }

  if (geogNames.length > 0) {
    params.append('geogName', geogNames[0]);
    const geogNameType = form.querySelector('select[name="geogNameType"]')?.value;
    if (geogNameType && geogNameType !== 'all') {
      params.append('geogNameType', geogNameType);
    }
  }

  if (orgNames.length > 0) {
    params.append('orgName', orgNames[0]);
    const orgNameType = form.querySelector('select[name="orgNameType"]')?.value;
    if (orgNameType && orgNameType !== 'all') {
      params.append('orgNameType', orgNameType);
    }
  }

  if (names.length > 0) {
    params.append('nameValue', names[0]);
    const nameType = form.querySelector('select[name="nameType"]')?.value;
    if (nameType && nameType !== 'all') {
      params.append('nameType', nameType);
    }
  }

  if (bodyTitles.length > 0) {
    params.append('bodyTitle', bodyTitles[0]);
    const bodyTitleType = form.querySelector('select[name="bodyTitleType"]')?.value;
    if (bodyTitleType && bodyTitleType !== 'all') {
      params.append('bodyTitleType', bodyTitleType);
    }
  }

  currentSearchParams = params.toString();
  currentPage = 1;
  currentPerPage = 10;

  performSearch(currentPage, currentPerPage);
});

function attachSuggest(inputId, type) {
  const input = document.getElementById(inputId);
  if (!input) return;

  let timeout;
  let activeBox = null;

  const suggestionBox = document.createElement('ul');
  suggestionBox.className = 'suggestion-box';
  suggestionBox.style.display = 'none';
  document.body.appendChild(suggestionBox);

  function positionBox() {
    const rect = input.getBoundingClientRect();
    suggestionBox.style.top = `${window.scrollY + rect.bottom}px`;
    suggestionBox.style.left = `${window.scrollX + rect.left}px`;
    suggestionBox.style.width = `${rect.width}px`;
  }

  function hideBox() {
    suggestionBox.style.display = 'none';
    activeBox = null;
  }

  window.addEventListener('resize', positionBox);
  window.addEventListener('scroll', positionBox);

  document.addEventListener('click', (e) => {
    if (!suggestionBox.contains(e.target) && e.target !== input) {
      hideBox();
    }
  });

  input.addEventListener('input', () => {
    clearTimeout(timeout);
    const query = input.value.trim();
    if (!query) {
      hideBox();
      return;
    }

    timeout = setTimeout(async () => {
      positionBox();

      try {
        const res = await fetch(
          `autocomplete_handler.php?term=${encodeURIComponent(query)}&type=${type}`,
        );
        const suggestions = await res.json();

        if (!Array.isArray(suggestions) || suggestions.length === 0) {
          hideBox();
          return;
        }

        suggestionBox.innerHTML = '';
        suggestions.forEach((s) => {
          const li = document.createElement('li');
          li.textContent = s;
          li.addEventListener('click', () => {
            input.value = s;
            hideBox();
          });
          suggestionBox.appendChild(li);
        });

        suggestionBox.style.display = 'block';
        activeBox = suggestionBox;
      } catch (error) {
        console.error('Autocomplete error:', error);
        hideBox();
      }
    }, 200);
  });

  input.addEventListener('blur', () => {
    setTimeout(() => {
      if (document.activeElement !== input) {
        hideBox();
      }
    }, 150);
  });

  input.addEventListener('focus', () => {
    if (suggestionBox.children.length > 0) {
      positionBox();
      suggestionBox.style.display = 'block';
    }
  });
}

document.addEventListener('DOMContentLoaded', function () {
  attachSuggest('bodyTitle_1', 'title');
});