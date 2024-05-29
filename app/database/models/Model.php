<?php

declare(strict_types=1);

namespace app\database\models;

use app\database\DB;
use PDO;

abstract class Model
{
    protected PDO $conenction;
    protected string $table;

    public function __construct()
    {
        $this->conenction = DB::connect();
    }

    public function all(): array
    {
        $sql = "select * from {$this->table}";
        $listData = $this->conenction->prepare($sql);

        $listData->execute();

        return $listData->fetchAll();
    }

    public function findById(int $id): ?object
    {
        $sql = "select * from {$this->table} where id = :id";
        $stmt = $this->conenction->prepare($sql);

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

        $stmt = $this->conenction->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindValue(':', $key, $value);
        }

        return $stmt->execute();
    }
}
