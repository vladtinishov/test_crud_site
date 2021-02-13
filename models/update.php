<?php
require_once('../config/database.php');

class Update{
    private $pdo;
    private $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->pdo = $this->db->getPDO();
    }

    public function update($data, $sql){
        $stmt = $this->pdo->prepare($sql);
        
        foreach($data as $key => $value){
            $stmt->bindValue(":$key", $value);
        }

        $stmt->execute();
    }
}


