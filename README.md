# The Early Ruskin Manuscripts, 1826–1842

[https://erm.selu.edu/](https://erm.selu.edu)

## About:

The Early Ruskin Manuscripts, 1826–1842 is a project of Southeastern Louisiana University and Humanities Online, both under the direction of the university's Department of English.

All commentary in ERM, including apparatuses, glosses, notes transcripts, and other editorial treatments of the manuscripts is © by David C. Hanson.

## Developer notes

The developer notes can be found [here](developer_notes.md)

### Staff and Support:

[http://erm.selu.edu/webpages/staff.html](http://erm.selu.edu/webpages/staff.html)

### Legal:

[https://erm.selu.edu/webpages/legal.html](https://erm.selu.edu/webpages/legal.html)

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

### Homepage

[https://erm.selu.edu/](https://erm.selu.edu/) → `webpages/homepage/index`

### XML to HTML/PHP Transformation

Use **Oxygen XML Editor**:

1. Right-click on file/folder → Transform → Configure scenario.
2. Confirm correct branch: `php_removal`.

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

    # -----------------------------
    # MIME Types for static files
    # -----------------------------
    # Applies to all HTML files, including those routed with try_files
location ~* \.html$ {
    default_type text/html;
    charset utf-8;
    gzip off;

    # Enable sub_filter for HTML content
    sub_filter_types text/html;
    sub_filter '<main' '<link rel="stylesheet" href="/gen/_xml/_Completed/webpages/indices.css"><main';
    sub_filter_once on;

    # Let try_files below handle routing logic
    try_files $uri $uri.html
              /gen/_xml/_Completed$uri.html
              /gen/_xml/_In_Process$uri.html
              /gen/_xml$uri.html
              =404;
}


    location ~* \.xml$ { default_type application/xml; }
    location ~* \.css$ { default_type text/css; }
    location ~* \.js$  { default_type application/javascript; }

    # -----------------------------
    # Fonts (with CORS)
    # -----------------------------
    location ~* ^/_Resources/fonts/(.+\.(woff|woff2|eot|ttf|otf))$ {
        alias /Users/userselu/Ruskin/_Resources/fonts/$1;
        access_log off;
        add_header Access-Control-Allow-Origin *;
        default_type application/font-woff;
    }

    # -----------------------------
    # Static resources (CSS, JS, images, etc.)
    # -----------------------------
    location /_Resources/ {
        alias /Users/userselu/Ruskin/_Resources/;
        autoindex on;
    }

    # -----------------------------
    # Homepage route
    # -----------------------------
    location = / {
        try_files /gen/_xml/_Completed/webpages/homepage.html =404;
    }

    # -----------------------------
    # Search PHP Pages
    # -----------------------------
    location = /search.php {
        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_index search.php;
        fastcgi_param SCRIPT_FILENAME $document_root/src/search_new/search.php;
        fastcgi_param DOCUMENT_ROOT $document_root;
    }

    location = /search_handler.php {
        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_index search_handler.php;
        fastcgi_param SCRIPT_FILENAME $document_root/src/search_new/search_handler.php;
        fastcgi_param DOCUMENT_ROOT $document_root;
    }

    # -----------------------------
    # HTML Routing (apparatuses, glosses, letters, notes, webpages)
    # -----------------------------
    location ~* ^/(apparatuses|glosses|letters|notes|webpages)/([^/]+)(\.html)?$ {
        try_files /gen/_xml/_Completed/$1/$2.html
                  /gen/_xml/_In_Process/$1/$2.html
                  /gen/_xml/$1/$2.html
                  =404;
        add_header Content-Type text/html;

        # Inject the same CSS for these HTML files as well
        sub_filter '<main' '<link rel="stylesheet" href="/gen/_xml/_Completed/webpages/indices.css"><main';
        sub_filter_once on;
    }

    # -----------------------------
    # PHP Routing for witnesses, figures, corpuses
    # -----------------------------
    location ~* ^/(witnesses|figures|corpuses)/([^/]+)$ {
        try_files /gen/_xml/_Completed/$1/$2.php
                  /gen/_xml/_In_Process/$1/$2.php
                  /gen/_xml/$1/$2.php =404;
        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root/gen/_xml/_Completed/$1/$2.php;
        fastcgi_param DOCUMENT_ROOT $document_root;
    }

    location ~ ^/(Corpuses|Figures|Witnesses)/(.+\.php)$ {
        try_files /gen/_xml/_Completed/$1/$2
                  /gen/_xml/_In_Process/$1/$2
                  /gen/_xml/$1/$2 =404;
        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root/gen/_xml/_Completed/$1/$2;
        fastcgi_param DOCUMENT_ROOT $document_root;
    }

    # -----------------------------
    # Global PHP fallback for any other PHP files
    # -----------------------------
    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $document_root;
    }

    # -----------------------------
    # Final fallback for other requests
    # -----------------------------
    location / {
        try_files $uri $uri/ $uri.html $uri.html/
                  /gen/_xml/_In_Process$uri
                  /gen/_xml/_In_Process$uri.html
                  =404;
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
    "BASE" => "https://erm.selu.edu/web/pages",
    "SCSS_DIRECTORY" => "../_Resources/css_styles",
    "SEARCH_HOST" => "http://localhost:9001",
    "DB" => array(
        "HOST" => "localhost",
        "DATABASE_NAME" => "ruskin",
        "USERNAME" => "root",
        "PASSWORD" => "",
        "XML_FOLDER" => "../../_Completed/",
        "UPDATE_TOOL_PASSWORD" => "password"
    )
);
```

---

# Elasticsearch Setup (with Docker)

### Start Elasticsearch Locally:

```sh
docker-comopose up -d
```

### Confirm It’s Running:

```sh
curl http://localhost:9200
```

Should return cluster info JSON and a line that says "You know, for search".

### Optional: Remove Elasticsearch

```sh
docker-compose down
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

- [Hosting multiple nginx servers](https://medium.com/@aakash.poudel.900/how-to-host-multiple-servers-through-nginx-simplified-36cd009fe484)
- [Nginx key commands](https://medium.com/@aakash.poudel.900/get-familiar-with-nginx-nginx-key-commands-b6dcf99f13e9)
- [Git SSH Setup](https://medium.com/@aakash.poudel.900/how-to-connect-your-git-to-linux-server-using-ssh-ba9a3f191c0d)
- [Setup Docs (Google Doc)](https://docs.google.com/document/d/1GKZI8TN6Q9kYZ47mn-RnC5A3dOmvQcf8OejtovxQUng/edit#heading=h.v07lzcv6ta80)
  .
