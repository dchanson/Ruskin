const express = require('express');
const path = require('path');
const fs = require('fs');

const app = express();

// Middleware for logging requests
app.use((req, res, next) => {
    console.log(`${new Date().toISOString()} - Request to: ${req.path}`);
    next();
});

// Middleware for setting correct content types
app.use((req, res, next) => {
    const ext = path.extname(req.path).toLowerCase();
    switch (ext) {
        case '.html':
            res.type('text/html');
            break;
        case '.xml':
            res.type('application/xml');
            break;
        case '.css':
            res.type('text/css');
            break;
        case '.js':
            res.type('application/javascript');
            break;
    }
    next();
});

// Handle PHP requests - redirect to Nginx instead of returning 404
app.use((req, res, next) => {
    if (req.path.endsWith('.php')) {
        console.log(`PHP file requested, redirecting to Nginx: ${req.path}`);
        // Redirect to the same path but on port 8080 (Nginx)
        return res.redirect(`http://ruskin.local:8080${req.path}`);
    }
    next();
});

// Inject CSS into HTML files
function injectCSS(req, res, next) {
    if (req.path.endsWith('.html')) {
        const filePath = path.join(__dirname, 'gen', '_xml', '_Completed', req.path);
        fs.readFile(filePath, 'utf8', (err, content) => {
            if (err) {
                console.error(`Error reading file: ${err}`);
                return next();
            }
            const fontCssLink = '<link rel="stylesheet" href="/_Resources/css/fonts.css">';
            const mainCssLink = '<link rel="stylesheet" href="/_Resources/css/digital_archive.css">';
            const modifiedContent = content.replace('</head>', `${fontCssLink}${mainCssLink}</head>`);
            console.log('CSS injection successful');
            res.send(modifiedContent);
        });
    } else {
        next();
    }
}

// Apply CSS injection middleware
app.use(injectCSS);

// Serve static files from '_Resources' and '_Completed' directories
app.use('/_Resources', express.static(path.join(__dirname, '_Resources')));
app.use(express.static(path.join(__dirname, 'gen', '_xml', '_Completed')));

// Serve the homepage
app.get('/', (req, res) => {
    const filePath = path.join(__dirname, 'gen', '_xml', '_Completed', 'webpages', 'homepage.html');
    res.sendFile(filePath, (err) => {
        if (err) {
            console.error('Error sending homepage.html:', err);
            res.status(500).send('Error occurred while serving the file.');
        }
    });
});

// Catch-all route for serving files
app.get('*', (req, res, next) => {
    let sanitizedPath = req.path.replace(/\/$/, ''); // Remove trailing slash
    let filePath = path.join(__dirname, 'gen', '_xml', '_Completed', sanitizedPath);

    console.log(`Checking file path: ${filePath}`);

    fs.access(filePath, fs.constants.F_OK, (err) => {
        if (!err) {
            return res.sendFile(filePath);
        }

        // Try .html version
        let htmlFilePath = `${filePath}.html`;
        fs.access(htmlFilePath, fs.constants.F_OK, (errHtml) => {
            if (!errHtml) {
                console.log(`Serving HTML file: ${htmlFilePath}`);
                return res.sendFile(htmlFilePath);
            }

            // Try .php version - redirect to Nginx instead of 404
            let phpFilePath = `${filePath}.php`;
            fs.access(phpFilePath, fs.constants.F_OK, (errPhp) => {
                if (!errPhp) {
                    console.log(`PHP file exists, redirecting to Nginx: ${req.path}.php`);
                    return res.redirect(`http://ruskin.local:8080${req.path}.php`);
                }

                console.error(`File not found: ${req.path}`);
                res.status(404).send('File not found');
            });
        });
    });
});

// Error handling middleware
app.use((err, req, res, next) => {
    console.error(`${new Date().toISOString()} - Error:`, err.stack);
    res.status(500).send('Something broke!');
});

// Start Express server
const PORT = process.env.PORT || 9001;
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});