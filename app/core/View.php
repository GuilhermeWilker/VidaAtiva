<?php

declare(strict_types=1);

namespace app\core;

use Exception;

class View
{
    private string $viewsPath = __DIR__ . '/../views';

    public function render(string $view, array $data = []): void
    {
        $view = $this->viewsPath . '/' . $view . '.template.php';

        if (!file_exists($view)) {
            throw new Exception("Não foi possível encontrar o template $view");
        }

        extract($data);
        include $view;
    }
}
