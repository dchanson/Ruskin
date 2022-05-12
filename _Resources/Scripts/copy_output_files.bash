#!/bin/bash
# Copy/Link resources and html's from ./ to $OUT/

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
  

echo "Copying images"
mkdir -p $OUT/images
cp -r _Resources/images $OUT/images

echo "Copying XML transformations to $OUT"
rsync -r gen/_xml/_Completed/. $OUT/ >/dev/null
rsync -r "gen/_xml/_In_Process/." $OUT/ >/dev/null

if [ "$SYMLINK" -eq "0" ]; then
    echo "Copying raw XML files"
    cp -r _xml/. "$OUT/xml"
fi

if [ "$SYMLINK" -eq "0" ]; then
    echo "Copying fonts"
    rm -rf "$OUT/fonts"
    cp -r "_Resources/fonts" "$OUT/fonts"
fi

echo "All done."
