###########################################################################
#                      The Smith-Pad Updater Tool 
#
#
#               Written by Senal Bulumulle
#              
#   Version 1.0 
###########################################################################
## Displays the banner 
cd /var/www/html/

cd Smith-Pad

git pull https://github.com/senalbulumulle/Smith-Pad.git master

## Restart 
sudo reboot
