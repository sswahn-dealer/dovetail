<?php
$container["GeneratorController"] = function ($container) { 
            return new App\Controllers\GeneratorController($container["view"]); 
        };