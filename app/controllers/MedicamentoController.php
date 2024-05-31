<?php

namespace app\controllers;

use app\core\View;

class MedicamentoController
{

    public function __construct(
        private $view = new View()
    ) {
    }

    public function index(): void
    {
        $this->view->render('medicamentos', [
            'title' => 'Medicamentos'
        ]);
    }
}
