<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Ruskin Archive</title>
    <link rel="stylesheet" href="/_Resources/fonts/fonts.css">
    <style>
        body {
            font-family: 'RuskinFont', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        input, select, button {
            font-family: 'RuskinFont', sans-serif;
        }

        .search-container {
            max-width: 700px;
            margin: 60px auto 40px;
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #2c3e50;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        input[type="text"] {    
            flex: 1;
            padding: 10px 16px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 100%;
            max-width: 350px;
        }

        select {
            padding: 10px 14px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #2d6cdf;
            color: #fff;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.2s ease;
        }

        button:hover {
            background-color: #1e4fab;
        }

        .results {
            max-width: 700px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .result-item {
            margin-bottom: 24px;
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
            margin: 4px 0;
        }

        .result-link {
            font-size: 13px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="search-container">
        <h1>Search Ruskin Works</h1>
        <form id="searchForm">
            <input type="text" name="q" placeholder="Search titles or content..." required>
            <select name="filter">
                <option value="all">All</option>
                <option value="title">Title</option>
                <option value="content">Content</option>
            </select>
            <button type="submit">🔍 Search</button>
        </form>
    </div>

    <div class="results" id="results">
        <!-- Results will appear here -->
    </div>

    <script>
        document.getElementById('searchForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = e.target;
            const query = form.q.value;
            const filter = form.filter.value;

            const resultsDiv = document.getElementById('results');
            resultsDiv.innerHTML = 'Searching...';

            try {
                const response = await fetch('search_handler.php?q=' + encodeURIComponent(query) + '&filter=' + encodeURIComponent(filter));
                const results = await response.json();

                resultsDiv.innerHTML = '';

                if (!Array.isArray(results) || results.length === 0) {
                    resultsDiv.innerHTML = '<p>No results found.</p>';
                    return;
                }

                results.forEach(item => {
                    const result = document.createElement('div');
                    result.className = 'result-item';

                    result.innerHTML = `
                        <div class="result-title"><a href="${item.link}">${item.title}</a></div>
                        <div class="result-snippet">${item.snippet}</div>
                        <div class="result-link">${item.filename}</div>
                    `;
                    resultsDiv.appendChild(result);
                });
            } catch (error) {
                resultsDiv.innerHTML = '<p style="color:red;">❌ Error retrieving results. Please check console.</p>';
                console.error('Search error:', error);
            }
        });
    </script>
</body>
</html>
