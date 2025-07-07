<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Search Ruskin Archive</title>
  <link rel="stylesheet" href="/_Resources/fonts/fonts.css" />
  <style>
    body {
      font-family: 'RuskinFont';
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .search-container {
      max-width: 700px;
      margin: 80px auto 40px;
      padding: 40px;
      background-color: #fff;
      border-radius: 16px;
      box-shadow: 0 6px 24px rgba(0, 0, 0, 0.06);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 32px;
      font-weight: 600;
      color: #2c3e50;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .form-row {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .form-group {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 6px;
      font-weight: 500;
      font-size: 14px;
      color: #444;
    }

    input[type="text"],
    select {
      font-family: 'RuskinFont';
      padding: 12px 16px;
      box-sizing: border-box;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 10px;
      transition: border-color 0.2s ease;
      width: 100%;
    }

    input[type="text"]:focus,
    select:focus {
      outline: none;
      border-color: #3498db;
    }

    .toggle-advanced-btn {
      font-family: 'RuskinFont';
      background: none;
      border: none;
      color: #3498db;
      font-size: 15px;
      font-weight: 500;
      cursor: pointer;
      text-align: left;
      padding: 0;
      margin-top: -10px;
    }

    .toggle-advanced-btn:hover {
      color: #1e4fab;
    }

    .advanced-search {
      display: none;
      padding: 25px 0 10px;
      border-top: 1px solid #ddd;
      margin-top: 15px;
    }

    .advanced-search h3 {
      margin-bottom: 16px;
      font-size: 18px;
      font-weight: 600;
      color: #2c3e50;
    }

    button[type="submit"] {
      background-color: #3498db;
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 10px;
      font-size: 16px;
      font-family: 'RuskinFont';
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    button[type="submit"]:hover {
      background-color: #1e4fab;
    }

    .results {
      max-width: 700px;
      margin: 30px auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 16px;
      box-shadow: 0 6px 24px rgba(0, 0, 0, 0.04);
    }

    .result-item {
      margin-bottom: 28px;
    }

    .result-title a {
      font-size: 18px;
      font-weight: bold;
      color: #2d6cdf;
      text-decoration: none;
    }

    .result-title a:hover {
      text-decoration: underline;
    }

    .result-snippet {
      font-size: 15px;
      color: #444;
      margin: 6px 0;
    }

    .result-link {
      font-size: 13px;
      color: #888;
    }

    .hidden-element {
        display: none;
    }

    /* Pagination Styles */
    .pagination-info {
      text-align: center;
      margin: 20px 0;
      font-size: 14px;
      color: #666;
      padding: 15px;
      background-color: #f8f9fa;
      border-radius: 8px;
    }

    .pagination-controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 30px;
      padding: 20px 0;
      border-top: 1px solid #eee;
    }

    .pagination-nav {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .pagination-btn {
      background-color: #3498db;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-family: 'RuskinFont';
      font-size: 14px;
      font-weight: 500;
      transition: all 0.2s ease;
    }

    .pagination-btn:hover:not(:disabled) {
      background-color: #2980b9;
      transform: translateY(-1px);
    }

    .pagination-btn:disabled {
      background-color: #bdc3c7;
      cursor: not-allowed;
      transform: none;
    }

    .page-info {
      font-size: 14px;
      color: #666;
      font-weight: 500;
    }

    .page-size-control {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      color: #666;
    }

    .page-size-control select {
      padding: 6px 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-family: 'RuskinFont';
    }

    @media (max-width: 600px) {
      .form-row {
        flex-direction: column;
      }
      
      .pagination-controls {
        flex-direction: column;
        gap: 15px;
      }
    }

    .suggestion-box {
      position: absolute;
      background: white;
      border: 1px solid #ccc;
      border-radius: 10px;
      max-height: 200px;
      overflow-y: auto;
      z-index: 1000;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      font-family: 'RuskinFont', sans-serif;
      width: calc(100% - 2px);
      margin-top: -10px;
    }

    .suggestion-box li {
      padding: 10px 15px;
      cursor: pointer;
      font-size: 15px;
      color: #333;
    }

    .suggestion-box li:hover {
      background-color: #e6f0fb;
    }
  </style>
</head>
<body>
  <div class="search-container">
    <h1>Search Ruskin Works</h1>
    <form id="searchForm">
      <div class="form-row">
        <div class="form-group" style="flex: 3;">
          <label for="q">Keyword Search</label>
          <input type="text" name="q" id="q" placeholder="Search titles or content..." />
        </div>
        <div class="form-group" style="flex: 1; min-width: 120px;">
                <label for="type">Type</label>
                <select name="type" id="type">
                  <option value="all">All</option>
                  <option value="apparatus">Apparatus</option>
                  <option value="figures">Figures</option>
                  <option value="glosses">Glosses</option>
                  <option value="letters">Letters</option>
                  <option value="notes">Notes</option>
                  <option value="witness">Witness</option>
                  <option value="witness:poem">Witness – Poem</option>
                  <option value="witness:essay">Witness – Essay</option>
                  <option value="witness:sermon">Witness – Sermon</option>
                  <option value="witness:lesson">Witness – Lesson</option>
                  <option value="witness:letter">Witness – letter</option>
                  <option value="witness:story">Witness – Story</option>
                  <option value="apparatus:work">Apparatus - Work</option>
                  <option value="apparatus:manuscript">Apparatus - Manuscript</option>
                </select>
            </div>
      </div>

      <button type="button" class="toggle-advanced-btn" onclick="toggleAdvanced()">+ Advanced Search</button>

      <div class="advanced-search" id="advancedSearch">
        <h3>Advanced Search Options</h3>

        <!-- Person Name -->
        <div class="form-row" style="margin-top: 16px;">
          <div class="form-group" style="flex: 3;">
            <label for="persName">Person Name</label>
            <input type="text" name="persName" id="persName" placeholder="e.g. John Ruskin" />
          </div>
          <div class="form-group" style="flex: 1; min-width: 120px;">
            <label for="persNameType">Type</label>
            <select name="persNameType" id="persNameType">
              <option value="all">All</option>
              <option value="fictional">Fictional</option>
            </select>
          </div>
        </div>

        <!-- Place Name -->
        <div class="form-row" style="margin-top: 16px;">
          <div class="form-group" style="flex: 3;">
            <label for="placeName">Place Name</label>
            <input type="text" name="placeName" id="placeName" placeholder="e.g. Venice" list="placeName-list" />
          </div>
          <div class="form-group" style="flex: 1;">
            <label for="placeNameType">Type</label>
            <select name="placeNameType" id="placeNameType">
              <option value="all">All</option>
              <option value="building">Building</option>
              <option value="fictional">Fictional</option>
            </select>
          </div>
        </div>

        <!-- Geographical Name -->
        <div class="form-row" style="margin-top: 16px;">
          <div class="form-group" style="flex: 3;">
            <label for="geogName">Geographical Name</label>
            <input type="text" name="geogName" id="geogName" placeholder="e.g. Bowder stone" list="geogName-list" />
          </div>
          <div class="form-group" style="flex: 1;">
            <label for="geogNameType">Type</label>
            <select name="geogNameType" id="geogNameType">
              <option value="all">All</option>
              <option value="building">Building</option>
            </select>
          </div>
        </div>

        <!-- Organization Name -->
        <div class="form-row" style="margin-top: 16px;">
          <div class="form-group" style="flex: 3;">
            <label for="orgName">Organization Name</label>
            <input type="text" name="orgName" id="orgName" placeholder="e.g. Cadell" list="orgName-list" />
          </div>
          <div class="form-group" style="flex: 1;">
            <label for="orgNameType">Type</label>
            <select name="orgNameType" id="orgNameType">
              <option value="all">All</option>
              <option value="institution">Institution</option>
              <option value="fictional">Fictional</option>
            </select>
          </div>
        </div>

        <!-- General Name -->
        <div class="form-row" style="margin-top: 16px;">
          <div class="form-group" style="flex: 3;">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="e.g. Marmion" list="name-list" />
          </div>
          <div class="form-group" style="flex: 1;">
            <label for="nameType">Type</label>
            <select name="nameType" id="nameType">
              <option value="all">All</option>
              <option value="animal">Animal</option>
              <option value="astronomical">Astronomical</option>
              <option value="fictional_person">Fictional person</option>
              <option value="fictional_place">Fictional place</option>
              <option value="botanical">Botanical</option>
              <option value="toy">Toy</option>
              <option value="vessel">Vessel</option>
            </select>
          </div>
        </div>
      </div>


      <button type="submit">Search</button>
    </form>
  </div>

<div class="results hidden-element" id="results"></div>

  <script>
    let currentSearchParams = null;
    let currentPage = 1;
    let currentPerPage = 10;

    function toggleAdvanced() {
      const section = document.getElementById('advancedSearch');
      section.style.display = section.style.display === 'block' ? 'none' : 'block';
    }

    async function performSearch(page = 1, perPage = 10) {
      if (!currentSearchParams) return;

      const params = new URLSearchParams(currentSearchParams);
      params.set('page', page);
      params.set('per_page', perPage);

      const resultsDiv = document.getElementById('results');
      resultsDiv.classList.remove("hidden-element");
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
        resultsDiv.innerHTML = '<p style="color:red;">❌ Error retrieving results. Please check console.</p>';
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
          section.innerHTML = `<h2 style="color:#2d3e50;border-bottom:1px solid #ccc;padding-bottom:4px">${dir.charAt(0).toUpperCase() + dir.slice(1)}</h2>`;

          grouped[dir].forEach((item) => {
            const result = document.createElement('div');
            result.className = 'result-item';
            result.innerHTML = `
                <div class="result-title"><a href="${item.link}">${item.title}</a></div>
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
          section.innerHTML = `<h2 style="color:#2d3e50;border-bottom:1px solid #ccc;padding-bottom:4px">${dir.charAt(0).toUpperCase() + dir.slice(1)}</h2>`;

          grouped[dir].forEach((item) => {
            const result = document.createElement('div');
            result.className = 'result-item';
            result.innerHTML = `
                <div class="result-title"><a href="${item.link}">${item.title}</a></div>
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

      document.getElementById('pageSizeSelect').onchange = function(e) {
        currentPerPage = parseInt(e.target.value);
        currentPage = 1;
        performSearch(currentPage, currentPerPage);
      };
    }

    function createPageButton(pageNum, currentPageNum) {
    }

    document.getElementById('searchForm').addEventListener('submit', async function (e) {
      e.preventDefault();

      const form = e.target;
      const q = form.q.value.trim();
      const type = form.type.value;
      const persName = form.persName.value.trim();
      const placeName = form.placeName.value.trim();
      const geogName = form.geogName.value.trim();
      const orgName = form.orgName.value.trim();
      const name = form.name.value.trim();
      const nameType = form.nameType.value;
      const persNameType = form.persNameType.value;
      const placeNameType = form.placeNameType.value;
      const geogNameType = form.geogNameType.value;
      const orgNameType = form.orgNameType.value;

      if (!q && !persName && !placeName && !geogName && !orgName && !name) {
        alert('Please enter a keyword to search.');
        return;
      }

      const params = new URLSearchParams();
      if (q) params.append('q', q);
      if (type && type !== 'all') params.append('typeFilter', type);
      if (persName) {
        params.append('persName', persName);
        if (persNameType && persNameType !== 'all') {
          params.append('persNameType', persNameType);
        }
      }
      if (placeName) {
        params.append('placeName', placeName);
        if (placeNameType && placeNameType !== 'all') {
          params.append('placeNameType', placeNameType);
        }
      }
      if (geogName) {
        params.append('geogName', geogName);
        if (geogNameType && geogNameType !== 'all') {
          params.append('geogNameType', geogNameType);
        }
      }
      if (orgName) {
        params.append('orgName', orgName);
        if (orgNameType && orgNameType !== 'all') {
          params.append('orgNameType', orgNameType);
        }
      }

      if (name && nameType && nameType !== 'all') {
        params.append('nameValue', name);
        params.append('nameType', nameType);
      } else if (name) {
        params.append('nameValue', name);
      }

      currentSearchParams = params.toString();
      currentPage = 1;
      currentPerPage = 10;

      performSearch(currentPage, currentPerPage);
    });
    
    function attachSuggest(inputId, type) {
      const input = document.getElementById(inputId);
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

          const res = await fetch(`autocomplete_handler.php?term=${encodeURIComponent(query)}&type=${type}`);
          const suggestions = await res.json();

          if (!Array.isArray(suggestions) || suggestions.length === 0) {
            hideBox();
            return;
          }

          suggestionBox.innerHTML = '';
          suggestions.forEach(s => {
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


    attachSuggest('persName', 'person');
    attachSuggest('placeName', 'place');
    attachSuggest('geogName', 'geog');
    attachSuggest('orgName', 'org');
    attachSuggest('name', 'name');
  </script>
</body>
</html>