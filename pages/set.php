<?php
require_once('../methods/create.php');

$cr = new Create();
$data = array(
    'title' => $_GET['title'],
    'content' => $_GET['content'],
);
$sql = "INSERT INTO test(title, content) VALUES (:title, :content)";
$cr->create($data, $sql);


echo 'Record created';