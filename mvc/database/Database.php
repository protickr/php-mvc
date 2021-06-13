<?php

namespace mvc\database;

use mvc\Application;


class Database
{
    public \PDO $pdo;

    public function __construct($databaseConfig = [])
    {
        $dbDsn = $databaseConfig["dsn"] ?? '';
        $username = $databaseConfig["username"] ?? '';
        $password = $databaseConfig["password"] ?? '' ;

        $this->pdo = new \PDO($dbDsn, $username, $password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function prepare($sql): \PDOStatement
    {
        return $this->pdo->prepare($sql);
    }

}