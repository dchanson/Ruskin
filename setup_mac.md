## Setting up a mac for use
Asserting that the Ruskin directory is located at `/Users/sluuser/Ruskin`, the following steps are required to run the project at `http://ruskin.local:8080/src`.

* Install XCode
```
$ xcode-select --install
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
```
$ git -C "$(brew --repo homebrew/core)" fetch --unshallow

* Install required packages
```
$ brew install nginx
$ brew install mysql
$ brew install --without-apache --with-fpm --with-mysql php71
$ brew cask
$ brew install phpmyadmin
```

* Add `/etc/hosts` record
```
$ sudo bash -c "echo '127.0.0.1       ruskin.local' >> /etc/hosts"
```

* Create `nginx` configuration
In file `/usr/local/etc/nginx/servers`,
```
server {
    listen 8080;

    server_name ruskin.local;

    autoindex on;

    root   /Users/sluuser/Ruskin;
    index  index.html index.php;

    location / {
        try_files $uri $uri/ =404;
    }

    add_header X-root "$document_root";
    add_header X-fc_script_name "$fastcgi_script_name";
    location ~ \.php$ {
        try_files      $uri = 404;
        fastcgi_pass   127.0.0.1:9000;
        include        fastcgi_params;
        fastcgi_index  index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $document_root;
        # fastcgi_param  SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
```

* Start services

```
$ brew services start mysql
$ brew services start nginx
$ brew services start php@7.1
```

* Maintenance
```
$ cd ~/Ruskin

$ cd src/
$ sed -E "s/http[^\"]+/http\:\/\/ruskin\.local\:8080\/src/g" config_production.json > config.json

$ cd ~/Ruskin
$ mkdir -p "gen/_Completed/" "gen/_In%20Process"

$ cd gen/_Completed/
$ ln -s /Users/sluuser/Ruskin/src/*.php .
$ cd ../_In*
$ ln -s /Users/sluuser/Ruskin/src/*.php .

$ ln -s /Users/sluuser/Ruskin/gen/_Completed/apparatuses .
$ ln -s /Users/sluuser/Ruskin/gen/_Completed/glosses .
$ ln -s /Users/sluuser/Ruskin/gen/_Completed/notes .
$ ln -s /Users/sluuser/Ruskin/gen/_Completed/witnesses .
$ ln -s /Users/sluuser/Ruskin/gen/_In%20Process/essays .
$ ln -s /Users/sluuser/Ruskin/_Resources/images/ .
```
