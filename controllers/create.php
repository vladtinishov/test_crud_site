<?php
require_once('../models/create.php');

if(isset($_GET['title']) && isset($_GET['content'])){
$cr = new Create();
$data = array(
    'title' => $_GET['title'],
    'content' => $_GET['content'],
);
$sql = "INSERT INTO test(title, content) VALUES (:title, :content)";
$cr->create($data, $sql);
echo 'Record created';
}
?>

<?php 
$title = 'Добавить запись';
require_once('../view/templates/header.php');
require_once('../view/create.php');
require_once('../view/templates/footer.php');