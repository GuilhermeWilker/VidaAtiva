<?php

namespace app\controllers;

use app\core\View;
use app\database\models\Medicamento;
use stdClass;

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

    public function create(): void
    {
        $this->view->render('/medicamentos/create', [
            'title' => 'Medicamentos'
        ]);
    }

    public function store()
    {
        $medicamento = new Medicamento();

        $medImagem = $_FILES['medicamento-foto'];

        if (isset($medImagem) && $medImagem['error'] == UPLOAD_ERR_OK) {
            $uploadDir = dirname(__DIR__) . '/storage/';
            $file = $uploadDir . basename($medImagem['name']);

            if (move_uploaded_file($medImagem['tmp_name'], $file)) {
                $medicamento->create([
                    'medicamento' => $_POST['medicamento-nome'],
                    'horario' => $_POST['medicamento-horario'],
                    'dose' => $_POST['medicamento-dose'],
                    'imagem' => $file
                ]);

                header('Location: /');
                exit();
            } else {
                die('Não foi possível fazer o upload da sua imagem');
            }
        }
    }
}
