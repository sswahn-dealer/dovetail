<?php
$container["PageController"] = function ($container) { 
            return new App\Controllers\PageController($container["view"]); 
        };