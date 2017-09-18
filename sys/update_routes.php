<?php
/**
 * Update Routes and Dependencies
 *
 */

//Routes:
$file = fopen('../App/route_bootstrap.php', 'w');

$preamble = "<?php\n\n".'/'.'/'.'To update routes run update_routes.php in /sys'."\n\n";

fwrite($file, $preamble);

foreach (glob('../App/routes/api/v1/*.php') as $api_route) {
    $line = "require_once '" . $api_route . "';\n";
    fwrite($file, $line);
}

foreach (array_filter(glob('../App/routes/pages/*.php'), 'is_file') as $page_route) {
    $line = "require_once '" . $page_route . "';\n";
    fwrite($file, $line);
}

foreach (glob('../App/routes/pages/redirects/*.php') as $page_route) {
    $line = "require_once '" . $page_route . "';\n";
    fwrite($file, $line);
}

foreach (glob('../App/routes/helpers/*.php') as $helper_route) {
    $line = "require_once '" . $helper_route . "';\n";
    fwrite($file, $line);
}

fclose($file);

//Dependencies:


//Create Controller DI Files
foreach (glob('../App/Controllers/*.php') as $controller_path) {

    $removed_extension = substr($controller_path, 0, -4);
    
    $controller_namespace = explode('..\\', str_replace('/', '\\', $removed_extension))[1];

    $controller_name = explode('../App/Controllers/', $removed_extension)[1];
    
    $newFile = '../App/dependencies/' . $controller_name . 'DI.php';
    
    $handle = fopen($newFile, 'w');
    
    $dependency = (strpos($controller_name, 'Redirect') !== false) 
        ? '$container["router"]' 
        : '$container["view"]';
        
    if (strpos($controller_name, 'Api') !== false) {
        $dependency = '';
    }

    $line = '<?php' . "\n" . '$container["' . $controller_name . '"] = function ($container) { 
            return new ' . $controller_namespace . '(' . $dependency . '); 
        };';

    fwrite($handle, $line);
    
    fclose($handle);
}


//Save first 35 lines in container
$file_name = '../App/dependencies/container/container.php';

$file = file($file_name);

$slice = array_slice($file, 0, 35);

$handle = fopen($file_name, 'w');

fwrite($handle, implode('', $slice));

fclose($handle);


//Include DI Files In Container
$handle = fopen($file_name, 'a');

foreach (glob('../App/dependencies/*.php') as $controller_di) {
    $line = "require_once '" . $controller_di . "';\n";
    fwrite($handle, $line);
}

fclose($handle);



