<?php

declare(strict_types=1);

require '../vendor/autoload.php';

$router = require '../app/routes/web.php';

function dd($x)
{
    echo '<pre>';
    var_dump($x);
    exit;
    echo '</pre>';
}


$requestUri = trim($_SERVER['REQUEST_URI'], '/');
$requestMethod = $_SERVER['REQUEST_METHOD'];

$routeInfo = $router->resolve($requestUri, $requestMethod);


if ($routeInfo) {
    [$controllerName, $methodName] = explode(':', $routeInfo['action']);
    $controllerName = "app\\controllers\\$controllerName";
    $controller = new $controllerName();

    call_user_func_array([$controller, $methodName], $routeInfo['params']);
} else {
    http_response_code(404);

    echo '404 Not Found';
}
