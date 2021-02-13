<?php
// модель для управления страницей добавления записей
require_once('../config/database.php');

class Create{
    private $db;
    private $pdo;

    public function __construct()
    {
        $this->db = new Database();
        $this->pdo = $this->db->getPDO();
    }

    public function create($data, $sql){
        $stmt = $this->pdo->prepare($sql);
        
        foreach($data as $key => $value){
            $stmt->bindValue(":$key", $value);
        }

        $stmt->execute();

    }
}


