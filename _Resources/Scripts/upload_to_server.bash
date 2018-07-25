#!/bin/bash
## Copy ./deploy to server

# Ensure that you run copy_files_to_gen.bash directory before you run this script

LOCAL_DIRECTORY="./deploy"
SERVER_USERNAME="humanitiesga"
SERVER="english.selu.edu"


if [[ $* == *--live-site* ]]; then
  REMOTE_DIRECTORY="/home/www/humanitiesonline/ruskin"
  
  # Change BASE url
  sed -i '' -e 's/ruskin_dev/ruskin/g' $LOCAL_DIRECTORY/config.json.php
  
  # Remove php error flags from .htaccess
  sed -i '' -E -e '/^php_.+error.*$/d' $LOCAL_DIRECTORY/.htaccess
  
else
  REMOTE_DIRECTORY="/home/www/humanitiesonline/ruskin_dev"
fi


echo "Uploading files"
# rsync -aP $DIRECTORY humanitiesga@english.selu.edu:$REMOTE_DIRECTORY
sshpass -f .ssh_password rsync -aP $LOCAL_DIRECTORY/ $SERVER_USERNAME@$SERVER:$REMOTE_DIRECTORY
echo "Done."

sshpass -f .ssh_password \
  ssh $SERVER_USERNAME@$SERVER \
  "cd $REMOTE_DIRECTORY && bash -s" < _Resources/Scripts/post_deployment.bash