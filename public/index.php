<?php
/**
 * Application index
 *
 */
error_reporting(E_ALL);

ini_set('display_errors', 'On');

require '../vendor/autoload.php';

spl_autoload_register(function ($class) {
    require_once '../' . str_replace('\\', '/', $class) . '.php';
});

$set = ['settings' => [ 'displayErrorDetails' => true ]];

$app = new \Slim\App($set);

require_once '../App/dependencies/container/container.php';

require_once '../App/route_bootstrap.php';

$app->run();

