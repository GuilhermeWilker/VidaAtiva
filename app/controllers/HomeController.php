<?php

namespace app\controllers;

use app\core\View;

class HomeController
{
    public function __construct(
        private $view = new View
    ) {
    }

    public function index(): void
    {
        $this->view->render("index", [
            'title' => 'Home'
        ]);
    }
}
