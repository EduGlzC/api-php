<?php
// Debug
/* 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

require_once('../index.php');
require_once('../classes/greeting.php');
require_once('../classes/photo.php');


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$elementsUri = explode( '/', $uri );

switch ($elementsUri[4]) {
    case 'Greeting':
        $objMsg = new Greeting();
        if (isset($elementsUri[5])) {
            echo $objMsg->helloWorld($elementsUri[5]);
        } else {
            echo $objMsg->helloWorld();
        }
        break;
    case 'Photo':
        $objPhoto = new Photo();
        if (isset($elementsUri[5])) {
            echo $objPhoto->getPhotos($elementsUri[5]);
        } else {
            echo $objPhoto->getPhotos();
        }
        break;
    default:
        echo "Err 404 - Oups we do not have this service!";
        break;
}