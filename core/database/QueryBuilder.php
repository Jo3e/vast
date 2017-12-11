<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insert($table, $data = [])
    {
        // insert to db
    }

    public function retrieve($table, $data = [])
    {
        // get data from database
    }
}

