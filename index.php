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
$loader = Lists\AutoLoader::getInstance();
$loader->registerNamespace('Zend','/var/apps/list/lib/Zend/');
$loader->register();

$front = Lists\FrontController::getInstance();
//$front->run('/var/apps/listerthingamabob/packages/');

//$response = $front->execute(); //Request object is implied. The controller will load up a default http request object

//$response->sendResponse(); //Need to account for headers and html/xml/whatever


//And that should be it.
echo "Bullshit goes here";