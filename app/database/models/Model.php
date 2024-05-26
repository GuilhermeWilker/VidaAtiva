<?php

declare(strict_types=1);

namespace app\database\models;

use app\database\DB;

abstract class Model
{
    public function __construct(
        protected $conenction = DB::connect()
    ) {
    }
}
