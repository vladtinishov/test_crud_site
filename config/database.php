<?php
class Database{
    private $host = 'localhost';
    private $base = 'pdolesson';
    private $user = 'root';
    private $pass = 'root';
    private $charset = 'utf8';

    private $dsn;
    private $pdo;

    private $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function __construct()
    {
        $this->dsn = "mysql:host=$this->host;dbname=$this->base;charset=$this->charset";
        $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
    }

    public function getPDO(){
        return $this->pdo;
    }
}