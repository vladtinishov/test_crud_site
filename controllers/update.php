<?php
// контроллер для управления страницей обновления записей
require_once('../models/update.php');
if(isset($_GET['title']) && isset($_GET['content'])){
    $update = new Update();
    $key = $_GET['id'];
    $sql = "UPDATE test SET title=:title, content=:content WHERE id=$key";
    $data = array(
        'title' => $_GET['title'],
        'content' => $_GET['content'],
    );
    $update->update($data, $sql);
    echo '<span style="background: green; color: white; padding: 10px; border-radius:10px">Обновлено</span>';
}

?>

<?php 

$title = 'Обновить данные';
require_once('../view/templates/header.php');
require_once('../view/update.php');
require_once('../view/templates/footer.php');