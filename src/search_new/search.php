<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Search Ruskin Archive</title>
  <link rel="stylesheet" href="/_Resources/fonts/fonts.css" />
  <style>
    body {
      font-family: 'RuskinFont', sans-serif;
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
      padding: 12px 16px;
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

    @media (max-width: 600px) {
      .form-row {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <div class="search-container">
    <h1>Search Ruskin Works</h1>
    <form id="searchForm">
      <div class="form-row">
        <div class="form-group" style="flex: 2;">
          <label for="q">Keyword Search</label>
          <input type="text" name="q" id="q" placeholder="Search titles or content..." />
        </div>
        <div class="form-group" style="flex: 1; min-width: 120px;">
          <label for="filter">Search In</label>
          <select name="filter" id="filter">
            <option value="all">All</option>
            <option value="title">Title</option>
            <option value="content">Content</option>
          </select>
        </div>
      </div>

      <button type="button" class="toggle-advanced-btn" onclick="toggleAdvanced()">+ Advanced Search</button>

      <div class="advanced-search" id="advancedSearch">
        <h3>Advanced Search Options</h3>
        <div class="form-group">
          <label for="persName">Person Name</label>
          <input type="text" name="persName" id="persName" placeholder="e.g. John Ruskin" />
        </div>
        <div class="form-group" style="margin-top: 16px;">
          <label for="placeName">Place Name</label>
          <input type="text" name="placeName" id="placeName" placeholder="e.g. Venice" />
        </div>
      </div>

      <button type="submit">Search</button>
    </form>
  </div>

  <div class="results" id="results"></div>

  <script>
    function toggleAdvanced() {
      const section = document.getElementById('advancedSearch');
      section.style.display = section.style.display === 'block' ? 'none' : 'block';
    }

    document.getElementById('searchForm').addEventListener('submit', async function (e) {
      e.preventDefault();

      const form = e.target;
      const q = form.q.value.trim();
      const filter = form.filter.value;
      const persName = form.persName.value.trim();
      const placeName = form.placeName.value.trim();

      if (!q && !persName && !placeName) {
        alert('Please enter a keyword, person name, or place name to search.');
        return;
      }

      const params = new URLSearchParams();
      if (q) params.append('q', q);
      if (filter) params.append('filter', filter);
      if (persName) params.append('persName', persName);
      if (placeName) params.append('placeName', placeName);

      const resultsDiv = document.getElementById('results');
      resultsDiv.innerHTML = 'Searching...';

      try {
        const response = await fetch('search_handler.php?' + params.toString());
        const results = await response.json();

        resultsDiv.innerHTML = '';

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

        const order = ['apparatuses', 'witnesses', 'notes', 'glosses'];
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
      } catch (error) {
        resultsDiv.innerHTML = '<p style="color:red;">❌ Error retrieving results. Please check console.</p>';
        console.error('Search error:', error);
      }
    });
  </script>
</body>
</html>
