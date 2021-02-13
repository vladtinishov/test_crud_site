<?php
require_once('../config/database.php');
class Delete{
    private $db;
    private $pdo;

    public function __construct()
    {
        $this->db = new Database();
        $this->pdo = $this->db->getPDO();
    }

    public function delete($data, $db){
        $sql = "DELETE FROM $db WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $data);
        $stmt->execute();
    }
}
