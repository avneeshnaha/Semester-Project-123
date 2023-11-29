<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/donate' => 'controllers/donate.php',
    '/footer' => 'controllers/footer.php',
    '/header' => 'controllers/header.php',
    
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    } else {
       abort();
    }
}

function abort($code = 404){
    http_response_code($code);

    echo "Sorry. Not found.";
   
    require "views/{$code}.php";

    die();
}
 
routeToController($uri, $routes);