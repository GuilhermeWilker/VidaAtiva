<?php

namespace app\routes;

use app\core\Router;

$router = new Router;

//$router->group(['prefix' => 'admin', 'controller' => 'admin', 'middlewares' => []], function () {
//    $this->add('/teste', 'GET', 'TesteController:index');
//});

$router->add("/", 'GET', 'HomeController:index');
$router->add("/medicamentos", 'GET', 'MedicamentoController:index');

return $router;
