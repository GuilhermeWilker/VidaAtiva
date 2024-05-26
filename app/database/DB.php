<?php

declare(strict_types=1);

namespace app\database;

use PDO;

class DB
{
    public static function connect()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=vidaativa;charset=utf8", "root", "");

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;
    }
}
