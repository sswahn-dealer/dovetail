<?php
$container["UtilityController"] = function ($container) { 
            return new App\Controllers\UtilityController($container["view"]); 
        };