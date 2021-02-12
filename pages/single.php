<?php
require_once('../methods/select.php');

$record = new Select();
$data = $record->select_one($_GET['id']);

foreach($data as $key):?>
    <h1><?php echo $key['title']; ?></h1>
    <h3><?php echo $key['content']; ?></h3>
<?php endforeach?>
