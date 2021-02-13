<?php
require_once('../methods/delete.php');
$del = new Delete();
$del->delete($_GET['id'], 'test');

echo 'Deleted';