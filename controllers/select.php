<?php 
// контроллер для управления страницей получения массива с записями
require_once('../models/select.php');
$select = new Select();
?>

<?php
$title = 'Все записи';
require_once('../view/templates/header.php');
require_once('../view/select.php');
require_once('../view/templates/footer.php');

