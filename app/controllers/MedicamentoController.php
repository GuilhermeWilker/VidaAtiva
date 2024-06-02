<?php

namespace app\controllers;

use app\core\View;
use app\database\models\Medicamento;

class MedicamentoController
{
    private $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index(): void
    {
        $medicamento = new Medicamento();
        $medicamentos = $medicamento->all();

        $this->view->render('medicamentos/show', [
            'title' => 'Medicamentos',
            'medicamentos' => $medicamentos
        ]);
    }

    public function create(): void
    {
        $this->view->render('medicamentos/create', [
            'title' => 'Adicionar Medicamento'
        ]);
    }

    public function store()
    {
        $medicamento = new Medicamento();

        $medImagem = $_FILES['medicamento-foto'];

        if (isset($medImagem) && $medImagem['error'] == UPLOAD_ERR_OK) {
            $uploadDir = realpath(dirname(__DIR__) . '/../public/storage/');

            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $fileName = basename($medImagem['name']);
            $file = $uploadDir . DIRECTORY_SEPARATOR . $fileName;

            if (move_uploaded_file($medImagem['tmp_name'], $file)) {
                $medicamento->create([
                    'medicamento' => $_POST['medicamento-nome'],
                    'horario' => $_POST['medicamento-horario'],
                    'dose' => $_POST['medicamento-dose'],
                    'imagem' => $fileName  // store only the file name
                ]);

                header('Location: /');
                exit();
            } else {
                die('Não foi possível fazer o upload da sua imagem');
            }
        } else {
            die('Erro no upload da imagem');
        }
    }
}
