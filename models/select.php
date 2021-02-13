<?php
require_once('../config/database.php');

class Select{
    private $db;
    private $pdo;

    public function __construct()
    {
        $this->db = new Database();
        $this->pdo = $this->db->getPDO();
    }
    
    public function select_all(){
        $stmt = $this->pdo->query('SELECT * FROM test');

        return $stmt->fetchALL();
    }
    
    public function select_one($id){
        $stmt = $this->pdo->prepare('SELECT * FROM test WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt;
    }

}






