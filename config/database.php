<?php

// файл с настройками базы данных

class Database{
    private $host = 'localhost';
    private $base = 'pdolesson';
    private $user = 'root';
    private $pass = 'root';
    private $charset = 'utf8';

    private $dsn;
    private $pdo;

    // настройка pdo
    private $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    // инициализация базы данных
    public function __construct()
    {
        $this->dsn = "mysql:host=$this->host;dbname=$this->base;charset=$this->charset";
        $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
    }

    // вернуть объект pdo 
    public function getPDO(){
        return $this->pdo;
    }
}