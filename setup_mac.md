## Setting up a mac for use
Asserting that the Ruskin directory is located at `/Users/sluuser/Ruskin`, the following steps are required to run the project at `http://ruskin.local:8080/src`.

* Install XCode
```
$ xcode-select --install
```

* `git` stuffs
```
$ cd ~/Ruskin/
$ git pull
$ make
```

* Install `brew`
```
$ /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

* Brew stuffs
```
$ brew doctor
$ brew cask
$ brew services list

$ git -C "$(brew --repo homebrew/core)" fetch --unshallow
```

* Install required packages
```
$ brew install nginx
$ brew install mysql
$ brew install --without-apache --with-fpm --with-mysql php
$ brew install phpmyadmin
$ brew install composer
$ brew install imagemagick
```

* Add `/etc/hosts` record
```
$ sudo bash -c "echo '127.0.0.1       ruskin.local' >> /etc/hosts"
```

* Create `nginx` configuration
In file `/usr/local/etc/nginx/servers/ruskin.local.conf`,
with proper username in `root` field, 
```
server {
    listen 8080 default_server;

    server_name ruskin.local;
    
    client_max_body_size 210M;

    autoindex on;

    root   /Users/sluuser/Ruskin;
    index  index.html index.php;

    location / {
        try_files $uri $uri/ =404;
    }
    
    # add_header X-fc_script_name "$fastcgi_script_name";
    location ~ src/(.*\.php)$ {
        try_files      /gen/_xml/_Completed/$1 /gen/_xml/_In_Process/$1 $uri =404;
        fastcgi_pass   127.0.0.1:9000;
        include        fastcgi_params;
        fastcgi_index  index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $document_root;
        # fastcgi_param  SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
    location ~ src/(.*\.html)$ {
         try_files /gen/_xml/_Completed/$1 /gen/_xml/_In_Process/$1 $uri =404;
     }
     
    location ~ \.xml$ {
        add_header Content-disposition "attachment; filename=$uri";
    }
}

```

* Web server configuration
  * Edit `/usr/local/share/phpmyadmin` to reflect the following changes:
    * AllowNoPassword: true
    * hostname: '127.0.0.1'
    * blowfish_secret: <some_value>
  * Edit `/usr/local/etc/php/<version>/php.ini` where `<version>`=`7.*`
    * upload_max_filesize = 200M
    * post_max_size = 205M
  * Symlink phpmyadmin
    ```
    cd ~/Ruskin/src
    ln -s /usr/local/share/phpmyadmin .
    ```

* Start services
```
$ brew services start mysql
$ brew services start nginx
$ brew services start php
```

* Create config file, and if required, update it
```
$ cd ~/Ruskin/src
$ cp config_template.json.php config.json.php
```

* Create database used in `config.json.php["DB"]["DATABASE_NAME"]`

* Populate search database
  * Goto `http://ruskin.local:8080/src/search/update.php`
  * Use password used in `config.json.php["DB"]["UPDATE_TOOL_PASSWORD"]`

* Install composer packages
```
$ cd ~/Ruskin/src
$ composer install
```

* Maintenance
```
$ cd ~/Ruskin
$ mkdir -p gen/_xml/
$ cd gen/_xml
$ ln -s ../../src/header.inc.php .
$ ln -s ../../src/search .
$ ln -s ../../src/layout_includes .
```

* Compile everything
> Note: Homepage will not render unless everything is transformed

* Everything must be running now
