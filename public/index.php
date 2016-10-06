<?php


/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (__FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}
// Composer autoloading
include __DIR__ . '/../vendor/autoload.php';


// Retrieve configuration
$appConfig = require __DIR__ . '/../config/application.config.php';

// Run!
$indexController = new Application\Controller\IndexController();
$obj = $indexController->indexAction();
echo $obj->hello;