<?php

namespace app\routes;

use app\core\Router;

$router = new Router;

//$router->group(['prefix' => 'admin', 'controller' => 'admin', 'middlewares' => []], function () {
//    $this->add('/teste', 'GET', 'TesteController:index');
//});

$router->add("/", 'GET', 'HomeController:index');

$router->add("/medicamentos", 'GET', 'MedicamentoController:index');
$router->add("/create/medicamento", 'GET', 'MedicamentoController:create');
$router->add('/show/medicamentos', 'GET', 'MedicamentoController:show');

$router->add("/medicamento", 'POST', 'MedicamentoController:store');

return $router;
