<?php
// контроллер для управления страницей получения массива с данным одной страницы
require_once('../models/select.php');

$record = new Select();
$data = $record->select_one($_GET['id']);
$title = 'adsf';
foreach($data as $key){
    $title = $key['title'];
    $content = $key['content'];
}

require_once('../view/templates/header.php');
require_once('../view/single.php');