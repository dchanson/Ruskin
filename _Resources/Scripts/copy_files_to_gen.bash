#!/bin/bash
# Copy/Link resources and PHP scripts from ./ to $OUT/

# Option defaults for symlinking/copying
SYMLINK=0
OUT="./deploy"
HTACCESS_SOURCE_DIR="_Resources/htaccesses"

# getopts string
# This string needs to be updated with the single character options (e.g. -f)
opts="s:"

# Gets the command name without path
cmd(){ echo `basename $0`; }

# Help command output
usage(){
echo "\
`cmd` [OPTION...]
-s, --symlink; Symlink instead of copying files.
" | column -t -s ";"
}

# Error message
error(){
    echo "`cmd`: invalid option -- '$1'";
    echo "Try '`cmd` -h' for more information.";
    exit 1;
}

# There's two passes here. The first pass handles the long options and
# any short option that is already in canonical form. The second pass
# uses `getopt` to canonicalize any remaining short options and handle
# them
for pass in 1 2; do
    while [ -n "$1" ]; do
        case $1 in
            --) shift; break;;
            -*) case $1 in
                -s|--symlink)     SYMLINK=1;;
                --*)           error $1;;
                -*)            if [ $pass -eq 1 ]; then ARGS="$ARGS $1";
                               else error $1; fi;;
                esac;;
            *)  if [ $pass -eq 1 ]; then ARGS="$ARGS $1";
                else error $1; fi;;
        esac
        shift
    done
    if [ $pass -eq 1 ]; then ARGS=`getopt $opts $ARGS`
        if [ $? != 0 ]; then usage; exit 2; fi; set -- $ARGS
    fi
done

echo "Deleting existing files..."
rm -rf 'deploy'

echo "Copying source files to $OUT";
# cp -r src $OUT
rsync -a --no-l \
  --exclude-from="_Resources/deploy_exclude_list.txt"\
  --cvs-exclude \
  --filter="dir-merge,- .gitignore" \
  src/. $OUT >/dev/null
  
cp src/$(readlink src/index.php) $OUT/index.php

echo "Copying images"
cp -r _Resources/images $OUT/

echo "Copying XML transformations to $OUT"
rsync -r gen/_Completed/. $OUT/ >/dev/null
rsync -r "gen/_In%20Process/." $OUT/ >/dev/null

echo "Handling config"
if [ "$SYMLINK" -eq "0" ]; then
    echo "Overwriting config.json"
    rm -f $OUT/config.json.php $OUT/config_template.json.php
    cp "src/config_production.json.php" "$OUT/config.json.php"
fi

if [ "$SYMLINK" -eq "0" ]; then
    echo "Copying raw XML files"
    mkdir -p "$OUT/xml"
    cp -r _Completed "$OUT/xml"
    cp -r "_In Process" "$OUT/xml"
fi

if [ "$SYMLINK" -eq "0" ]; then
    echo "Copying fonts"
    rm -rf "$OUT/fonts"
    cp -r "_Resources/fonts" "$OUT/fonts"
fi

echo "Copying private directory"
rm -rf "$OUT/private"
cp -r "_Resources/private" "$OUT/private"

echo "Copying scss"
cp -r "_Resources/css_styles" "$OUT/private/css_styles"
rm -rf "$OUT/private/css_styles/scss_cache"

if [ "$SYMLINK" -eq "0" ]; then
  echo "Handling .htaccess files"

  for filename in $HTACCESS_SOURCE_DIR/*.htaccess; do
    htpath1=$(basename $filename | cut -f 1 -d '.' | tr '_' '/')
    htpath2="$OUT/$htpath1"
    htpath3="$htpath2/.htaccess"
    
    mkdir -p $htpath2
    echo "Copying $filename to $htpath3"
    cp $filename $htpath3
  done
fi


echo "All done."
