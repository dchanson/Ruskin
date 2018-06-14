#!/bin/bash
# Copy/Link resources and PHP scripts from ./ to $OUT/

# Option defaults for symlinking/copying
SYMLINK=0
OUT="./deploy"

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

echo "SYMLINK is $SYMLINK"

if [ "$SYMLINK" -eq "0" ]; then
	echo "Coying files";
else
	echo "Symlinking files";
fi

echo "Handling source files"
if [ "$SYMLINK" -eq "0" ]; then
	echo "Copying source files to $OUT";
	cp -r src $OUT

	echo "Copying images"
	cp -r _Resources/images $OUT/

else
	echo "Symlinking src to $OUT";
	ln -s src $OUT

	echo "Linking Images"
	ln -sf "`pwd`/_Resources/images/" $OUT/

fi

echo "Copying XML transformations to $OUT"
rsync -r gen/_Completed/. $OUT/
rsync -r "gen/_In%20Process/." $OUT/

echo "Handling config"
if [ "$SYMLINK" -eq "0" ]; then
    echo "Overriting config.json"
    mv -f "$OUT/config_production.json" "$OUT/config.json"
fi

if [ "$SYMLINK" -eq "0" ]; then
    echo "Copying raw XML files"
    mkdir -p "$OUT/xml"
    cp -r _Completed "$OUT/xml"
    cp -r "_In Process" "$OUT/xml"
fi
    

echo "All done."
