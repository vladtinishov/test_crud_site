<?php
require_once('../models/delete.php');
$del = new Delete();
$del->delete('test', 'id', $_GET['id']);

echo 'deleted';

$title = 'Добавить запись';
require_once('../view/templates/header.php');