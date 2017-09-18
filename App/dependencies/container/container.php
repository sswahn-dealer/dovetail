<?php
/**
 * App Container
 *
 */
$container = $app->getContainer();

$container['view'] = function ($container) {

    $view = new \Slim\Views\Twig('../App/Views/Templates', [
        'cache' => '../App/cache/templates',
        'auto_reload' => true
    ]);
    
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'], 
        $container['request']->getUri()
    ));
    
    return $view;
};
//wtf is this:
$container['redirect'] = function ($container) {
    return $container;
};

$container['Connection'] = function ($container) {
    return new \App\Connections\Connection();
};

$container['Database'] = function ($container) {
    return new \App\Models\Database();
};


require_once '../App/dependencies/ApiControllerDI.php';
require_once '../App/dependencies/GeneratorControllerDI.php';
require_once '../App/dependencies/PageControllerDI.php';
require_once '../App/dependencies/RedirectControllerDI.php';
require_once '../App/dependencies/UtilityControllerDI.php';
