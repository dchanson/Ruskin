#!/bin/bash

SOURCE_IMAGE_DIR="./_Resources/images/facsimiles"
OUTPUT_IMAGE_DIR="./_Resources/images/facsimiles_previews"

CURRENT=`pwd`
mkdir -p $OUTPUT_IMAGE_DIR
OUTPUT_IMAGE_DIR=`cd $OUTPUT_IMAGE_DIR && pwd`

cd $CURRENT
cd $SOURCE_IMAGE_DIR;

echo "duplicating directory structure"
find . \
-type d -not -path . \
-exec mkdir -p -- $OUTPUT_IMAGE_DIR/{} \;

echo "Transforming .tif files to .jpg"
converttiftojpg(){
  FILE_NAME="$1"
  
  OUT_NAME="${FILE_NAME%.*}.jpg"
  echo "converting $FILE_NAME to $OUT_NAME"
  convert $FILE_NAME $OUT_NAME
  # convert "$SOURCE_IMAGE_DIR;"
}
find . -type f -name '*.tif' | while read file; do converttiftojpg "$file"; done

echo "Deleting .tif files"
find . -type f -name '*.tif' -exec rm {} \;

echo "Generating previews"
copyimagefilesfunc(){
  FILE_NAME="$1"
  
  if [ ! -f "$OUTPUT_IMAGE_DIR/$1" ]; then
    echo "generating preview for $FILE_NAME"
    convert "$FILE_NAME" -geometry x1080 "$OUTPUT_IMAGE_DIR/$1"
  fi
}
find . -type f -name '*.jpg' | while read file; do copyimagefilesfunc "$file"; done

echo "All done."
cd $CURRENT