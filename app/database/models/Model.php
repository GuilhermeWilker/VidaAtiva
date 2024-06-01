<?php

declare(strict_types=1);

namespace app\database\models;

use app\database\DB;
use PDO;

abstract class Model
{
    protected PDO $connection;
    protected string $table;

    public function __construct()
    {
        $this->connection = DB::connect();
    }

    public function all(): array
    {
        $sql = "select * from {$this->table}";
        $listData = $this->connection->prepare($sql);

        $listData->execute();

        return $listData->fetchAll();
    }

    public function findById(int $id): ?object
    {
        $sql = "select * from {$this->table} where id = :id";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result ?: null;
    }

    public function create(array $data): bool
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));

        $sql = "insert into {$this->table} ($columns) values ($placeholders)";

        $stmt = $this->connection->prepare($sql);

        foreach ($data as $key => $value) {
            $paramType = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
            $stmt->bindValue(':' . $key, $value, $paramType);
        }

        return $stmt->execute();
    }
}
