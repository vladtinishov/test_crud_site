<?php
require_once('../config/database.php');

class Create{
    private $db;
    private $pdo;

    public function __construct()
    {
        $this->db = new Database();
        $this->pdo = $this->db->getPDO();
    }

    public function create($data){
        $stmt = $this->pdo->prepare("INSERT INTO test(title, content) 
        VALUES (:title, :content)");

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);

        $title = $data['title'];
        $content = $data['content'];
        $stmt->execute();

    }
}


$cr = new Create();
$data = array(
    'title' => $_GET['title'],
    'content' => $_GET['content'],
);
$cr->create($data);


echo 'Record created';