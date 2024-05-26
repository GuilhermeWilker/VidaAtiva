<?php

namespace app\controllers;

use app\core\View;

class MedicamentoController
{

    public function __construct(
        private $view = new View()
    ) {
    }

    public function index($medicamento): void
    {
        $this->view->render('index', [
            'title' => 'Medicamentos',
            'medicamento' => $medicamento
        ]);
    }
}
