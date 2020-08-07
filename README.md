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

####Developer works on php removal

#Dev server at ruskin.local:8080

##use homebrew 
to install` nginx and composer`

    brew services list
    
should show:

    Name    Status  User Plist
    nginx   started root /Library/LaunchDaemons/homebrew.mxcl.nginx.plist
    php@7.2 started root /Library/LaunchDaemons/homebrew.mxcl.php@7.2.plist


### Following is ruskin.local.conf for nginx configuration
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

  #`location /  {} `
 Looks for project running in proxy_pass http://localhost:9001;
 
 
   #`location ~* ^/web/pages/(.+)$ `
 
 #` location ~* ^/web/pages/(.+)$
    {try_files gen/_xml/$1 =404;}

This goes and find a file name located at route after /web/pages/:name
 
 For Example:
 
     http://ruskin.local:8080/web/pages/apparatuses/account_of_a_tour_on_the_continent_apparatus.html
 
 Nginx will take all the route after web/pages/..... i.e `apparatuses/account_of_a_tour_on_the_continent_apparatus.html`
 
 so it goes in the folder  gen/xml/ by default as defined in ` {try_files gen/_xml/$1 =404;}`
 
 since files are nested inside either` _Completed` || `_In_Process` || `images` || `layout_includes` along with the other `header` and `style.php`
 it will not be able to find and apply those files.
 
## As a result:

https://ibb.co/4pvpyBc
 
https://ibb.co/NL7bNhL

##So the correct route format and try file is:

    location ~* ^/web/pages/(.+)$ {
    try_files /gen/_xml/_Completed/$1 /gen/_xml/_In_Process/$1 /gen/_xml/$1 $uri =404;
    
result:

https://ibb.co/Lg7JQPM

https://ibb.co/9bDzC48

https://ibb.co/hKHWgFB
    
 
 then go after
 
      location ~ /web/pages/(.*\.php)$ {
          try_files /gen/_xml/_Completed/$1 /gen/_xml/_In_Process/$1 /gen/_xml/$1 $uri =404;
        }



##To find the folder where nginx is:

    mdfind kind:folder "nginx"

    cd usr/local/etc/nginx
    cd servers
    ls 
    ruskin.local.conf
    
To open conf file in text editor
    
    open -a TextEdit ruskin.local.conf
    

So the correct Nginx configuration is:
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


 

To Restart Nginx Server

    nginx -s reload
    
    

    
On oxygen you 
Migration work
Php removal




#Deployment Procedure:
Remain on the root project of node app
###Compile Node App
     run `./scripts/build.sh` (obtain Node.js production code)
   
###Make Assets of all the pages in Ruskin
    run `./scripts/make-assets.bash`
    
###Deploy the changes to the server
    run `./scripts/deploy.bash`
