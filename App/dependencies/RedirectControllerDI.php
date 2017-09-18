<?php
$container["RedirectController"] = function ($container) { 
            return new App\Controllers\RedirectController($container["router"]); 
        };