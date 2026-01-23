# The Early Ruskin Manuscripts, 1826–1842

[https://erm.selu.edu/](https://erm.selu.edu)

## About:

The Early Ruskin Manuscripts, 1826–1842 is a project of Southeastern Louisiana University and Humanities Online, both under the direction of the university's Department of English.

All commentary in ERM, including apparatuses, glosses, notes transcripts, and other editorial treatments of the manuscripts is © by David C. Hanson.

## Developer notes

The developer notes can be found [here](developer_notes.md)

### Staff and Support:

[http://erm.selu.edu/webpages/staff](http://erm.selu.edu/webpages/staff)

### Legal:

[https://erm.selu.edu/webpages/legal](https://erm.selu.edu/webpages/legal)

---

# Developer Overview

### Project Directory Structure:

```
_xml
├── style.php
├── header.inc.php
├── layout_includes
├── images
├── inprocess
├── _Completed
│   ├── apparatuses
│   ├── corpuses
│   ├── figures
│   ├── webpages
│   │   ├── homepage  # Homepage content for https://erm.selu.edu/
│   │   ├── legal
│   │   └── staff
```

### Transformed Folders:

- **To PHP:** Corpuses, Figures, Witnesses
- **To HTML:** Apparatuses, Glosses, Letters, Notes, Webpages

### XML to HTML/PHP Transformation

Use **Oxygen XML Editor**:

1. Open the `ruskin.xpr` file.
2. Right-click on file/folder → Transform → Configure transformation scenario.
3. Check `Generate html` for HTML files and `Generate (global)` for PHP files.

---

# Local Dev Setup @ ruskin.local:8080

Refer to the documentation [here](https://docs.google.com/document/d/1GKZI8TN6Q9kYZ47mn-RnC5A3dOmvQcf8OejtovxQUng/edit?usp=sharing) for detailed instructions. **ONLY CONTINUE ONCE YOU HAVE GONE THROUGH THE DOCUMENTATION LINK**. Some steps may be repeated in this readme file.

### Useful Brew Commands:

```sh
brew services list
brew services stop --all
brew services start --all
brew services restart --all
```

### Hosts File Update:

```sh
sudo vim /etc/hosts
```

Add:

```
127.0.0.1       ruskin.local
```

### NGINX Config:

For Apple Silicon:

```sh
cd /opt/homebrew/etc/nginx/servers
open -a TextEdit ruskin.local.conf
```

Paste:

```nginx
server {
    listen 8080;
    server_name ruskin.local;
    root /Users/userselu/Ruskin;
    client_max_body_size 210M;
    autoindex on;
    index index.php index.html index.htm;
    charset utf-8;

    # Set default content type once per server block
    default_type text/html;

    # Favicon request
    location = /favicon.ico {
        alias /Users/userselu/Ruskin/_Resources/images/ruskin_icon.png;
    }

    # HTML files - with highlighting
    location ~* \.html$ {
        charset utf-8;
        gzip off;
        sub_filter_once off;

        # Add highlighting functionality before </body>
        sub_filter '</body>' '<script src="/_Resources/js/page-highlighter.js"></script></body>';

        try_files $uri $uri.html
                  /gen/_xml/_Completed$uri.html
                  /gen/_xml$uri.html
                  =404;
    }

    # PHP files - with highlighting
    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $document_root;

        sub_filter_once off;

        # Add icon in PHP header
        sub_filter '<?php' '<?php echo \'<link rel="icon" type="image/png" href="/_Resources/images/ruskin_icon.png">\';';

        # Add highlighting functionality before </body>
        sub_filter '</body>' '<script src="/_Resources/js/page-highlighter.js"></script></body>';
    }

    # Static file types
    location ~* \.xml$ { default_type application/xml; }
    location ~* \.css$ { default_type text/css; }
    location ~* \.js$  { default_type application/javascript; }

    # Fonts with CORS
    location ~* ^/_Resources/fonts/(.+\.(woff|woff2|eot|ttf|otf))$ {
        alias /Users/userselu/Ruskin/_Resources/fonts/$1;
        access_log off;
        add_header Access-Control-Allow-Origin *;
        default_type application/font-woff;
    }

    # _Resources folder
    location /_Resources/ {
        alias /Users/userselu/Ruskin/_Resources/;
        autoindex on;
    }

    # Home page fallback
    location = / {
        try_files /gen/_xml/_Completed/webpages/homepage.html =404;
    }

    # Search routes (no highlighting needed)
    location ~ ^/search(?:\.html)?$ {
        root /Users/userselu/Ruskin/src/search_new;
        try_files /search.html =404;
    }

    location = /search_style.css {
        root /Users/userselu/Ruskin/src/search_new;
        default_type text/css;
        try_files $uri =404;
    }

    location = /search_script.js {
        root /Users/userselu/Ruskin/src/search_new;
        default_type application/javascript;
        try_files $uri =404;
    }

    location = /search_handler.php {
        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root/src/search_new/search_handler.php;
        fastcgi_param DOCUMENT_ROOT $document_root;
    }

    location = /autocomplete_handler.php {
        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root/src/search_new/autocomplete_handler.php;
        fastcgi_param DOCUMENT_ROOT $document_root;
    }

    location ~ /map(?:\.html)?$ {
        default_type text/html;
        alias /Users/userselu/Ruskin/_Map/map.html;
    }

    # HTML Routing for main folders - with highlighting
    location ~* ^/(apparatuses|glosses|letters|notes|webpages)/([^/]+)(\.html)?$ {
        default_type text/html;
        charset utf-8;
        gzip off;

        sub_filter_once off;
        sub_filter_types text/html text/plain;

        # Add icon and site styles before <main>
        sub_filter '<main' '<link rel="icon" type="image/png" href="/_Resources/images/ruskin_icon.png"><link rel="stylesheet" href="/_Resources/css_styles/site_styles.css"><main';

        # Inject Home button after the page title (handles both h1 and div)
        sub_filter '<h1 class="page-title">' '<h1 class="page-title"><div class="site-controls"><a class="btn-home" href="/" aria-label="Home"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M3 11.5L12 4l9 7.5V20a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1V11.5z" fill="currentColor"/></svg></a></div>';

        sub_filter '<div id="top" class="page-title">' '<div id="top" class="page-title"><div class="site-controls"><a class="btn-home" href="/" aria-label="Home"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M3 11.5L12 4l9 7.5V20a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1V11.5z" fill="currentColor"/></svg></a></div>';

        # Add highlighting functionality
        sub_filter '</body>' '<script src="/_Resources/js/page-highlighter.js"></script></body>';

        try_files /gen/_xml/_Completed/$1/$2.html
                /gen/_xml/$1/$2.html
                =404;
    }


    # PHP Routing for witnesses, figures, corpuses - with highlighting
    location ~* ^/(witnesses|figures|corpuses)/([^/]+)$ {
        try_files /gen/_xml/_Completed/$1/$2.php
                  /gen/_xml/$1/$2.php
                  =404;

        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root/gen/_xml/_Completed/$1/$2.php;
        fastcgi_param DOCUMENT_ROOT $document_root;

        sub_filter_once off;
        sub_filter '</body>' '<script src="/_Resources/js/page-highlighter.js"></script></body>';
    }

    # PHP Routing for capitalized folders - with highlighting
    location ~ ^/(Corpuses|Figures|Witnesses)/(.+\.php)$ {
        try_files /gen/_xml/_Completed/$1/$2
                  /gen/_xml/$1/$2
                  =404;

        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root/gen/_xml/_Completed/$1/$2;
        fastcgi_param DOCUMENT_ROOT $document_root;

        sub_filter_once off;
        sub_filter '</body>' '<script src="/_Resources/js/page-highlighter.js"></script></body>';
    }

    # Fallback location
    location / {
        try_files $uri $uri/ $uri.html $uri.html/
                  =404;
    }

    # Custom 404 handling
    error_page 404 /gen/_xml/_Completed/webpages/incompleted.html;

    location = /gen/_xml/_Completed/webpages/incompleted.html {
        root /Users/userselu/Ruskin;
        internal;
    }
}


```

### Restart NGINX:

```sh
brew services restart nginx
```

---

# PHP Setup

```sh
cd gen/_xml
ln -s ../../src/header.inc.php .
ln -s ../../src/style.php .
ln -s ../../src/layout_includes .
```

### Install Composer:

```sh
brew install composer
cd src/
composer install
cp config_template.json.php config.json.php
```

### config.json.php Sample:

```php
<?php
$r_config = array(
	"BASE"=> "https://english.selu.edu/web/pages",
	"SCSS_DIRECTORY"=> "../_Resources/css_styles",
	"DB"=> array(
		"HOST"=> "localhost",
		"DATABASE_NAME"=> "ruskin",
		"USERNAME"=> "root",
		"PASSWORD"=> "",
		"XML_FOLDER"=> "../../_Completed/",
		"UPDATE_TOOL_PASSWORD"=> "password"
	)
);
```

---

# Elasticsearch Setup (with Docker)

### Step 1: Create folders for certificates and config

Inside your project root, create the following folders:

```sh
mkdir -p elastic/certs/es01
mkdir -p elastic/certs/es02
mkdir -p elastic/certs/es03
mkdir -p elastic/config
```

### Step 2: Configure certs.yml and .env

Paste the following to create the file inside `elastic/config/`

```sh
echo -e "instances:
  - name: es01
    dns: [ es01, localhost ]
    ip: [ 127.0.0.1 ]
  - name: es02
    dns: [ es02, localhost ]
    ip: [ 127.0.0.1 ]
  - name: es03
    dns: [ es03, localhost ]
    ip: [ 127.0.0.1 ]
" > elastic/config/certs.yml
```

Paste the following to create the `.env` file:

```sh
echo -e "ES_USER=\nES_PASS=" > .env
```

Create your desired credentials. **Production credentials are provided to the project manager.**

### Step 3: Generate SSL certificates and keys for the cluster nodes

Use Elasticsearch's `elasticsearch-certutil` tool to create your CA and node certificates:

1. Create a Certificate Authority (CA) :

```sh
docker run --rm \
  -v /Users/userselu/Ruskin/elastic/certs:/certs \
  docker.elastic.co/elasticsearch/elasticsearch:8.11.3 \
  bin/elasticsearch-certutil ca --pem --out /certs/ca.zip
```

2. Extract the CA files:

```sh
unzip elastic/certs/ca.zip -d elastic/certs
```

3. Generate node certificates signed by the CA:

```sh
docker run --rm \
  -v /Users/userselu/Ruskin/elastic/config:/config \
  -v /Users/userselu/Ruskin/elastic/certs:/certs \
  docker.elastic.co/elasticsearch/elasticsearch:8.11.3 \
  bin/elasticsearch-certutil cert --pem \
  --in /config/certs.yml \
  --out /certs/certs.zip \
  --ca-cert /certs/ca/ca.crt \
  --ca-key /certs/ca/ca.key
```

4. Extract the node certificates:

```sh
unzip elastic/certs/certs.zip -d elastic/certs
```

### Step 4: Start Elasticsearch cluster

```sh
 docker compose up -d
```

### Step 5: Confirm It’s Running:

Replace the username and password with the given credentials.

```sh
curl --cacert elastic/certs/ca/ca.crt -u your_username:your_password https://localhost:9200
```

Should return cluster info JSON and a line that says "You know, for search".

### Optional: Remove Elasticsearch

```sh
docker compose down -v
```

### For debugging: Delete all records form the container

Enter the given username and password in the said fields.

```sh
curl --cacert elastic/certs/ca/ca.crt -u your_username:your_password -X DELETE "https://localhost:9200/ruskin_works"
```

---

# Convert the SCSS files

Run the given code in your terminal.

```sh
sass /Users/userselu/Ruskin/_Resources/css_styles/site_styles.scss /Users/userselu/Ruskin/_Resources/css_styles/site_styles.css
```

---

# Deployment Steps

1. **Compile Node App**:

```sh
./scripts/build.sh
```

2. **Make Assets**:

```sh
./scripts/make-assets.bash
```

3. **Deploy to Server**:

```sh
./scripts/deploy.bash
```

---
# Ruskin — Map of Places  
**Interactive Map & Timeline Documentation**

This document explains how the **Ruskin — Map of Places** web page works and how to maintain or extend it.  

---

## 1. Overview

This page combines:

- **Leaflet.js** for interactive maps
- **MarkerCluster** for performance with many points
- **GeoJSON, CSV, and TEI-derived JSON** data sources
- **TimelineJS (Knight Lab)** for a synchronized historical timeline
- **IIIF historical map overlay** (David Rumsey Collection)
- **Search across all datasets**

The result is:
- A map with multiple toggleable layers
- Clustered place markers
- A timeline that pans the map to relevant places
- A simple place-name search

---

## 2. Page Structure

### Main HTML Elements

| Element ID | Purpose |
|-----------|--------|
| `map` | Main Leaflet map container |
| `map-controls` | Search UI |
| `timeline-embed` | TimelineJS container |

```html
<div id="map"></div>
<div class="controls" id="map-controls"></div>
<div id="timeline-embed"></div>
```

## 3. External Libraries Used

### Mapping
- **Leaflet 1.9.4**  
  Core interactive mapping library.
- **Leaflet.MarkerCluster**  
  Groups nearby markers into clusters for better performance and readability.
- **Leaflet-IIIF**  
  Enables displaying georeferenced IIIF images (used for historical map overlays).

### Data Handling
- **jQuery 3.6**  
  Used for AJAX requests and general DOM utilities.
- **jquery.csv**  
  Parses CSV files into JavaScript objects (`CSV → JS objects`).

### Timeline
- **TimelineJS 3 (Knight Lab)**  
  Renders an interactive historical timeline synchronized with the map.

---

## 4. Configuration Constants

All major paths and styles are defined at the top of the script for easy maintenance.

### Data Sources

```js
const GEOJSON_URL = '/_Map/GIS/.../AllPoints.json';
const CSV_URL = '/_Map/GIS/CSV/places_mockup2.csv';
const PLACES_JSON_URL = '/_Map/Places/places.json';
const PLACES_BY_MARY = '/_Map/Places/places_by_mary.json';
const PLACES_VISITED_BY_MARY = '/_Map/Places/places_visited_by_mary.json';
```

## Marker Styles

Each dataset is visually distinguished by color:

| Dataset              | Color  |
|----------------------|--------|
| GeoJSON              | Blue   |
| CSV                  | Orange |
| TEI places           | Purple |
| Mary-related places  | Green  |

## 5. Map Initialization

The Leaflet map is initialized with a default geographic center and zoom level, targeting a specific HTML container.
```js
const map = L.map('map').setView([50.5, 6.0], 5);
```

### Base Maps

Users can switch between different base maps via the built-in Leaflet layer control:

- **OpenStreetMap**: Standard map data for general orientation.
- **Carto Light**: A visually minimal base map that prioritizes the visibility of data overlays.

## 6. Historical Map Overlay (IIIF)

A georeferenced historical map from the David Rumsey Map Collection is integrated as an optional layer. This allows users to compare contemporary geography with historical records.
```js
const historicalIIIF = L.imageOverlay(
  "https://www.davidrumsey.com/.../default.jpg",
  [[35.0, -10.0], [72.0, 40.0]],
  { opacity: 0.8 }
);
```

- **Toggle Control**: Integrated into the layer control UI for on/off switching.
- **Georeferencing**: Utilizes geographic bounds to ensure historical imagery aligns with modern coordinate systems.

## 7. Layer & Cluster Management

To ensure the map remains performant and readable when handling large datasets, markers are grouped into independent clusters based on their source.
```js
const geoCluster = L.markerClusterGroup();
const csvCluster = L.markerClusterGroup();
const teiCluster = L.markerClusterGroup();
const maryTeiCluster = L.markerClusterGroup();
```

### Mary's Travel Path Layer

A dedicated `featureGroup` is used to visualize travel routes as spatial lines rather than individual points.
```js
const VisitedByMaryPathLayer = L.featureGroup();
```

## 8. Popups

Each marker contains a dynamic popup providing context for the specific location. Content is generated via the `makePopupHtml(name, properties)` function and includes:

- **Place Name**: The primary header.
- **Descriptive Notes**: Additional metadata from the source data.
- **Navigation Links**:
  - A link to a specific TEI witness page (if a unique slug is present).
  - A site-wide search link for the place if no direct witness page exists.

## 9. Search System

The system maintains a global index of all loaded markers to facilitate rapid searching.
```js
searchIndex.push({ name, layer, latlng });
```

### Search Behavior

- **Prioritization**: Attempts an exact string match first, then falls back to partial matches.
- **Interaction**: Upon a successful search, the map automatically pans to the location and opens the corresponding marker popup.
- **API Usage**: `window.ruskinMap.findAndOpen("Paris");`

## 10. Timeline Integration

Timeline events are harvested during the data loading process and stored in a central repository.
```js
const _timelineEvents = [];
```

### Supported Date Formats

The system parses a variety of temporal data:

- **Standard ISO**: `YYYY`, `YYYY-MM`, `YYYY-MM-DD`
- **Natural Language**: e.g., "March 1845"

## 11. TEI-Specific Timeline Events

TEI `<event>` elements are specifically targeted for conversion into TimelineJS entries.

| TEI Attribute | Function |
|---------------|----------|
| `@when` | Defines the specific event date. |
| `@type` | Categorizes the event (e.g., arrival, departure, visit). |
| `label` | The text description displayed on the timeline slide. |

## 12. Timeline Rendering

The timeline is rendered only after all data sources (GeoJSON, CSV, TEI) have been fully loaded and parsed.
```js
buildAndAttachTimeline();
```

### Key Features

- **Automatic Scaling**: The timeline automatically adjusts its zoom level based on the range of dates provided.
- **Spatial Synchronization**: Navigating through timeline slides triggers the map to pan to the associated geographic coordinates.
- **Fallback Logic**: Displays a notification if no valid dated events are present in the current dataset.


---

# Troubleshooting

### PHP Link Error:

```sh
ln -s ../../src/header.inc.php .
ln -s ../../src/style.php .
ln -s ../../src/layout_includes .
```

### PHP Not Running:

```sh
brew services cleanup
brew services restart php
```

### NGINX 256 Error:

```sh
sudo nginx -t
brew services restart nginx
tail -f /opt/homebrew/var/log/nginx/error.log
```

### Port Conflict:

```sh
sudo lsof -i :8080
sudo kill -9 <PID>
```

---

# References & Resources

- [Setup Docs (Google Doc)](https://docs.google.com/document/d/1GKZI8TN6Q9kYZ47mn-RnC5A3dOmvQcf8OejtovxQUng/edit#heading=h.v07lzcv6ta80)
- [Elasticsearch in server]()
- [Hosting multiple nginx servers](https://medium.com/@aakash.poudel.900/how-to-host-multiple-servers-through-nginx-simplified-36cd009fe484)
- [Nginx key commands](https://medium.com/@aakash.poudel.900/get-familiar-with-nginx-nginx-key-commands-b6dcf99f13e9)
- [Git SSH Setup](https://medium.com/@aakash.poudel.900/how-to-connect-your-git-to-linux-server-using-ssh-ba9a3f191c0d)
