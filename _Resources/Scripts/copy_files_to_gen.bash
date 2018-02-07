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

	echo "Copying search project"
	cp -r _Search $OUT/search

	echo "Copying XML transformations to $OUT"
	cp -r gen/_Completed/. $OUT/
else
	echo "Symlinking src to $OUT";
	ln -s src $OUT

	echo "Linking Images"
	ln -sf "`pwd`/_Resources/images/" $OUT/

	echo "Linking search project"
    rm -f $OUT/_Search
	ln -sf "`pwd`/_Search" "$OUT/search"

	echo "Linking XML transformations to $OUT"
	find "`pwd`/gen/_Completed" -type d -maxdepth 1 -mindepth 1
	find "`pwd`/gen/_Completed" -type d -maxdepth 1 -mindepth 1 -exec ln -sf {} $OUT/ \;

fi
echo "done."; echo;


exit 0



echo "All done."