<?php
//var/apps
//        /{AppName}:Still need a name!
//                  /inc  << this is where our framework goes
//                  /lib  << this is outher libs
//                  /public << the html stuff we link to the world
//                  /packages << the installed packages for this server
//                  /config  << need to have some config stuff some day
//This is where the magic happens...

include('/opt/local/apache2/www/code/ListFramework/AutoLoader.php');

$autoloader = Lists\AutoLoader::getInstance();
$autoloader->registerNamespace('REST','/opt/local/apache2/www/code/Packages/REST');
$autoloader->register();

Lists\FrontController::run();
// something getting echoed out here...
?>