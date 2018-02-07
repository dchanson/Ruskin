#!/bin/bash

# Copy resources and PHP scripts from ./ to $OUT/

OUT="./deploy"
echo "Deleting existing files..."
rm -rf 'deploy'

echo "Making directory for deployment"
mkdir -p $OUT

echo "Copying Source files to $OUT..."
ls -lah src/
cp -r ./src/. $OUT/

echo "Copying XML transformations to $OUT"
cp -r gen/_Completed/. $OUT/

echo "Copying images"
cp -r _Resources/images $OUT/

echo "Copying search project"
cp -r _Search $OUT/search

echo "Rename .htaccess file"
mv $OUT/htaccess $OUT/.htaccess

echo "All done."