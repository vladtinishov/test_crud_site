<?php
// контроллер для управления страницей удаления записей
require_once('../models/delete.php');
$del = new Delete();
$del->delete('test', 'id', $_GET['id']);

echo '<span style="background: green; color: white; padding: 10px; border-radius:10px">
        Удалено | 
        <a style="color: white" href="../index.php">на главную</a>
        </span>';

$title = 'Добавить запись';
require_once('../view/templates/header.php');