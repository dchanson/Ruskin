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

    # HTML files
    location ~* \.html$ {
        charset utf-8;
        gzip off;

        # Substitution only for HTML content
        sub_filter_types text/html;
        sub_filter_once off;

        sub_filter '<main' '<link rel="icon" type="image/png" href="/_Resources/images/ruskin_icon.png"><link rel="stylesheet" href="/_Resources/css_styles/site_styles.css"><main';

        try_files $uri $uri.html
                  /gen/_xml/_Completed$uri.html
                  /gen/_xml/_In_Process$uri.html
                  /gen/_xml$uri.html
                  =404;
    }

    # PHP files: inject icon tag after <?php
    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $document_root;

        # Substitution for PHP-generated HTML content
        sub_filter_types application/x-httpd-php text/html;
        sub_filter_once off;

        sub_filter '<?php' '<?php echo \'<link rel="icon" type="image/png" href="/_Resources/images/ruskin_icon.png">\';';
    }

    # Static file types: explicitly set default_type
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

    # Alias for _Resources folder with directory listing
    location /_Resources/ {
        alias /Users/userselu/Ruskin/_Resources/;
        autoindex on;
    }

    # Home page fallback
    location = / {
        try_files /gen/_xml/_Completed/webpages/homepage.html =404;
    }

    # Direct HTML routes for search
    location = /search.html {
        root /Users/userselu/Ruskin/src/search_new;
        try_files $uri =404;
    }

    location = /search_style.css {
        root /Users/userselu/Ruskin/src/search_new;
        default_type text/css;
        try_files $uri =404;
    }

    # Serve the script.js file for the search page
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

    # HTML Routing for main folders with sub_filter
    location ~* ^/(apparatuses|glosses|letters|notes|webpages)/([^/]+)(\.html)?$ {
        try_files /gen/_xml/_Completed/$1/$2.html
                  /gen/_xml/_In_Process/$1/$2.html
                  /gen/_xml/$1/$2.html
                  =404;

        sub_filter_types text/html;
        sub_filter_once off;
        sub_filter '<main' '<link rel="icon" type="image/png" href="/_Resources/images/ruskin_icon.png"><link rel="stylesheet" href="/_Resources/css_styles/site_styles.css"><main';
    }

    # PHP Routing for witnesses, figures, corpuses
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

    # Fallback location
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
echo -e "ES_USER=\nES_PASS=\nKB_USER=\nKB_PASS=" > .env
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

### Confirm It’s Running:

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

- [Hosting multiple nginx servers](https://medium.com/@aakash.poudel.900/how-to-host-multiple-servers-through-nginx-simplified-36cd009fe484)
- [Nginx key commands](https://medium.com/@aakash.poudel.900/get-familiar-with-nginx-nginx-key-commands-b6dcf99f13e9)
- [Git SSH Setup](https://medium.com/@aakash.poudel.900/how-to-connect-your-git-to-linux-server-using-ssh-ba9a3f191c0d)
