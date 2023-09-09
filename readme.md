# Outside Sage Framework #

* Install Sage Local Wp and update custom preferences settings
* Create New Wordpress site 
* All WP files will be now - local site/app/public folder
* Clone this boilerplate to and replce all the files into public folder except wp-config.php
* On the first go we must need to change theme folder name from sage10 to project based name.
   * Inside package.json file, replace sage10 with project based name.
* Open shell using localwp 
* and go to theme folder using command `` cd wp-content/themes/themeName ``
* From theme folder run composer using command `` composer install `` - This will install all the package dependecies that we needs to run sage framework
* Now we need to install packages for asset building using command `` yarn `` from theme folder. Note - **Node version must be >= 16**
* From base theme folder (sage10 || project name)  run `` yarn prepare `` to add husky.

## For Windows follow below settings ##
* For windows - OS must have WSL with version 1
* For that follow - 
* Install remote - WSL extension in VS code.
* Install WSL dystro (ubuntu) from Microsoft Store
* Open your WSL Terminal directly or in VS Code.
* Update package manager
* ``sudo apt-get update``
* ``sudo apt-get upgrade``
* install npm (Node Package Manager) `` sudo apt-get install npm ``
* Install nvm( Node Version Manager) `` sudo apt install curl ``
* curl https://raw.githubusercontent.com/creationix/nvm/master/install.sh | bash 
* Install node latest version using nvm
* nvm install 16.15.0
* Install yarn using command `` npm install --global yarn ``
* After this same above process needs to be followed


### Usefull Commands ###
* `` composer install `` - to install framework dependencies
* `` yarn `` - to install NPM dependencies
* `` yarn dev `` - for developer instance
* `` yarn build `` - for build process
