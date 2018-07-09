#!/bin/bash
## Copy ./deploy to server

# Ensure that you run copy_files_to_gen.bash directory before you run this script

DIRECTORY="./deploy"
REMOTE_DIRECTORY="/home/www/humanitiesonline/ruskin_dev"

echo "Uploading files"
# rsync -aP $DIRECTORY humanitiesga@english.selu.edu:$REMOTE_DIRECTORY
sshpass -f .ssh_password rsync -aP $DIRECTORY/ humanitiesga@english.selu.edu:$REMOTE_DIRECTORY

