<?php

namespace Framework\Database;

use PDO;

class Database
{
    public PDO $pdo;
    public string $name = 'phpsite_db';
    public string $host = 'localhost';
    public string $charset = 'utf8';
    public string $username = 'user';
    public string $pass = '52305230';

    public function __construct()
    {
        $connect = "mysql:host=$this->host;dbname=$this->name;charset=$this->charset";
        $this->pdo = new PDO($connect, $this->username, $this->pass);
    }

    public function query($sql)
    {
        return $this->pdo->query($sql);
    }

    public function prepare($sql)
    {
        return $this->pdo->prepare($sql);
    }


}