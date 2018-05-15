#!/bin/bash
## Copy ./deploy to server

# Ensure that you run copy_files_to_gen.bash directory before you run this script

DIRECTORY="./deploy/"
REMOTE_DIRECTORY="/home/www/humanitiesonline/ruskin_dev"
rsync -aP $DIRECTORY humanitiesga@english.selu.edu:$REMOTE_DIRECTORY
