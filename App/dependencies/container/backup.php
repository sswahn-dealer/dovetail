<?php
/**
 * App Container
 *
 */
 
$container = $app->getContainer();

$container['view'] = function ($container) {

    $view = new \Slim\Views\Twig('../App/Views/Templates', [
        'cache' => false
    ]);
    
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'], 
        $container['request']->getUri()
    ));
    
    return $view;
};

//Begin Controller Instantiation (written from sys/update_routes.php):

$container['DashboardControllerApi'] = function ($container) {
    return new \App\Controllers\DashboardControllerApi();
};

$container['DashboardControllerPage'] = function ($container) {
    return new \App\Controllers\DashboardControllerPage($container['view']);
};

$container['HomepageControllerPage'] = function ($container) {
    return new \App\Controllers\HomepageControllerPage($container['view']);
};
