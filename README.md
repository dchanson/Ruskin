# The Early Ruskin Manuscripts, 1826–1842
http://english.selu.edu/humanitiesonline/ruskin

## About:
The Early Ruskin Manuscripts, 1826–1842 is a project of Southeastern Louisiana University and Humanities Online, both under the direction of the university's Department of English.

All commentary in ERM, including apparatuses, glosses, notes transcripts, and other editorial treatments of the manuscripts is © by David C. Hanson.

## Developer notes
The developer notes can be found [here](developer_notes.md)
### Staff and Support:
http://english.selu.edu/humanitiesonline/ruskin/webpages/staff.php

### Legal:
http://english.selu.edu/humanitiesonline/ruskin/webpages/legal.php



# For Developer

    _xml
    ├── style.php
    ├── header.inc.php
    ├── layout_includes
    ├── images
    ├──inprocess
    ├── _Completed         
    │   ├── apparatuses           
    │   ├── corpuses                  
    │   ├── figures            
    │   ├── webpages              # Contains homepage
    |   |   |--homepage              # this is what you see in  https://erm.selu.edu/
    |   |   |--legal              
    |   |   |--staff
   


###Following folders are transformed into php || Showcase
    Corpuses 
    Figures
    Witnesses

###Following folders are transformed into Html
    apparatuses
    glosses
    letters
    notes
    webpages
    
###Home Page @  https://erm.selu.edu/ 
    Weppages => homepage => index


###To transform any xml to  html || php
Be on the erm php removal branch.
 
    Right click on the file or folder Transform
    Configure transforming scenario

You should see something like following :

    https://i.ibb.co/hZvSZJt/Screen-Shot-2020-05-14-at-12-21-04-PM.png
 
If you see :

    https://i.ibb.co/qg7t3yn/Screen-Shot-2020-05-14-at-12-20-33-PM.png
You are in the wrong branch.

`Generate Html => renders html`

 
# Setting dev server at ruskin.local:8080

## use homebrew 
to install ` nginx and composer`

    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"
    
    brew install nginx  
    
    brew install php@7.2   
    
### Useful cmd for brew:

    brew services list
    brew services stop --all     ====> Stop all brew services
    brew services start --all    ====> Start all brew services
    brew services restart --all  ====> Restart all brew services

Any way brew service should print: 


    Name    Status  User Plist
    nginx   started root /Library/LaunchDaemons/homebrew.mxcl.nginx.plist
    php@7.2 started root /Library/LaunchDaemons/homebrew.mxcl.php@7.2.plist

### Add nginx route to local host
   
    vim /etc/hosts
    
 add following:
   
    127.0.0.1       ruskin.local

this will redirect the trafic to your particular local machine
   
     cat /etc/hosts should print following

To change permission to write in the file     

     sudo chmod 755 /etc/hosts 
     sudo vim /etc/hosts
   
Add following    
    
    127.0.0.1       ruskin.local
    
## cat /etc/hosts 
    
Should print following

    127.0.0.1       localhost
    255.255.255.255 broadcasthost
    ::1             localhost  
    127.0.0.1       ruskin.local

## Following is ruskin.local.conf for nginx configuration

    mdfind kind:folder "nginx"
    cd usr/local/etc/nginx
    cd servers  
    touch ruskin.local.conf
    
To open conf file in text editor
    
    open -a TextEdit ruskin.local.conf
    

So the correct Nginx configuration is:
## But remeber to change the root directory, 
just right click on the Ruskin folder, then get info to get the folder location then copy it from /Users
and paste it in following root



      server { 
      
        listen 8080;
        server_name ruskin.local;
        client_max_body_size 210M;
        autoindex on;
        root /Users/prashantbasnet/Ruskin/;
        index index.php index.html index.html;
       
        location / {
       
          proxy_pass http://localhost:9001;
          proxy_set_header Host $host;
          proxy_set_header X-Real-IP $remote_addr;
          proxy_set_header http_version 1.1;
          proxy_buffers 8 1024k;
          proxy_buffer_size 1024k;
          add_header 'X-1' '$1' always;
        }
   
        location ~* ^/web/pages/(.+)$ {
   
          location ~ /web/pages/(.*\.php)$ {
                try_files /src/$1 /gen/_xml/_Completed/$1 /gen/_xml/_In_Process/$1 /gen/_xml/$1 $uri=404;
                add_header 'X-Script_Filename' '$document_root$fastcgi_script_name' always;
                add_header 'X-DocumentRoot' '$document_root' always;
                add_header 'X-1' '$1' always;
                add_header 'X-URI' '$uri' always;
                fastcgi_pass 127.0.0.1:9000;
                include fastcgi_params;
                fastcgi_index index.php;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                fastcgi_param DOCUMENT_ROOT $document_root;
           
              }
   
          location ~* ^/web/pages/(.+)$ {    
        try_files /src/$1 /gen/_xml/_Completed/$1 /gen/_xml/_In_Process/$1 $uri=404;
            add_header 'X-DocumentRoot' '$document_root' always;
            add_header 'X-1' '$1' always;
            add_header 'X-URI' '$uri' always;
          }
        }
       }
       

### Be aware of the line 

       //change it where your Ruskin folder is placed
       root /Users/prashantbasnet/Ruskin/;
        
        

 

To Restart Nginx Server

    nginx -s reload
    
    
## Php     
Setting up php part:
    
    cd gen/_xml
    $ ln -s ../../src/header.inc.php .
    $ ln -s ../../src/style.php .
    $ ln -s ../../src/layout_includes .

### installing composer

    cd src/
    brew composer install
    composer install
    cp config_template.json.php config.json.php


###  config.json.php   
    
    <?php
    $r_config = array(
    	"BASE"=> "https://erm.selu.edu/web/pages",
    	"SCSS_DIRECTORY"=> "../_Resources/css_styles",
    	"SEARCH_HOST"=> "http://localhost:9001",
    	"DB"=> array(
    		"HOST"=> "localhost",
    		"DATABASE_NAME"=> "ruskin",
    		"USERNAME"=> "root",
    		"PASSWORD"=> "",
    		"XML_FOLDER"=> "../../_Completed/",
    		"UPDATE_TOOL_PASSWORD"=> "password"
    	)
    );
    
## Before Deployment:

### Make sure your /src/config_template.json.php looks like:
    <?php
    $r_config = array(
        "BASE"=> "https://erm.selu.edu/web/pages",
        "SCSS_DIRECTORY"=> "../styles",
        "SEARCH_HOST"=> "http://localhost:9001",
        "DB"=> array(
            "HOST"=> "localhost",
            "DATABASE_NAME"=> "ruskin",
            "USERNAME"=> "root",
            "PASSWORD"=> "",
            "XML_FOLDER"=> "../../_Completed/",
            "UPDATE_TOOL_PASSWORD"=> "password"
        )
    );

**Add Ruskin Folder to erm.selu.edu workspace in VS Code**
### Add npx webpack to ./scripts/build.sh:**

     npx webpack \
      --config './src/config/webpack.production.config.babel.js' \
      $@
      
## Generate all files inside of the Completed and InProcess folders:
   Gen folder must have all xml folders generated as their respective types.
    
## ./erm.selu.edu/build/scripts/make-assets.bash
    echo "Copying PHP and HTML"
    cp -r ${RUSKIN_ROOT}/gen/_xml/_Completed ${TMP_DIR}/web/pages
    rsync -a ${RUSKIN_ROOT}/gen/_xml/_In_Process/essays/. ${TMP_DIR}/web/pages/essays
     
    cp ${RUSKIN_ROOT}/src/config_template.json.php ${TMP_DIR}/web/pages/config.json.php
    cp ${RUSKIN_ROOT}/src/composer.json ${TMP_DIR}/web/pages
    cp ${RUSKIN_ROOT}/src/header.inc.php ${TMP_DIR}/web/pages
    cp ${RUSKIN_ROOT}/src/style.php ${TMP_DIR}/web/pages
    cp -r ${RUSKIN_ROOT}/src/layout_includes ${TMP_DIR}/web/pages
     
    rsync -a ${RUSKIN_ROOT}/_xml/_In_Process/essays/. ${TMP_DIR}/web/xml/essays`
     
Be sure you are copying /src/config_template.json.php and not config_production.json.php. This file does not exist.
        
  
# Deployment Procedure:
Remain on the root project of node app


### Compile Node App
     run `./scripts/build.sh` (obtain Node.js production code)
   
### Make Assets of all the pages in Ruskin
    run `./scripts/make-assets.bash`
    
### Deploy the changes to the server
    run `./scripts/deploy.bash`
    
    
    
![alt text](https://i.ibb.co/WnSR19c/Screen-Shot-2021-04-23-at-11-31-25-AM.png)

    XML URL: ${currentFileURL}
    XSL URL : ${pdu}/common/ruskin_html.xsl


![alt text](https://i.ibb.co/568tCWc/Screen-Shot-2021-04-23-at-11-31-36-AM.png)


![alt text](https://i.ibb.co/2j68mbd/Screen-Shot-2021-04-23-at-11-31-47-AM.png)

    save as: ${pd}/gen/${makeRelative(${pd}, ${cfd})}/${cfn}.html
    open in browswer: http://ruskin.local:8080/src/ruskin_redir_file.php?open=${cf}&new=1
    
### To resolve PHP services `error` :

If you get any Error while running:
    
    brew services list
    
    Displays ->
    
    Name    Status  User Plist
    nginx   started root /Library/LaunchDaemons/homebrew.mxcl.nginx.plist
    php@7.2 error root /Library/LaunchDaemons/homebrew.mxcl.php@7.2.plist
    
    1. brew update
    2.  brew upgrade
    3.  brew cleanup
    
    Double check the current installed PHP package :
    
    4. brew list | grep php
    
    Remove everything:
    
    brew uninstall --force php56 php56-apcu php56-opcache php56-xdebug php56-yaml
    brew uninstall --force php70 php70-apcu php70-opcache php70-xdebug php70-yaml
    brew uninstall --force php71 php71-apcu php71-opcache php71-xdebug php71-yaml
    brew uninstall --force php72 php72-apcu php72-opcache php72-xdebug php72-yaml
    brew cleanup
    
    Re-check if anything PHP-related is left:
    
    brew list | grep php
    
    If something is still left, you can uninstall those individually using the same
    run brew uninstall --force <@phpVersionNumber>

    Clean out the old configuration options for PHP:
    
    rm -rf /usr/local/etc/php/*
