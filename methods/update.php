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


$update = new Update();
$key = $_GET['id'];
$sql = "UPDATE test SET title=:title, content=:content WHERE id=$key";
$data = array(
    'title' => $_GET['title'],
    'content' => $_GET['content'],
);
$update->update($data, $sql);