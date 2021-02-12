<?php 
require_once('../methods/select.php');
$select = new Select();
?>


<?php foreach($select->select_all() as $key => $value):?>
    <div class="record">
        <a href="/pages/single.php?id=<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a>
        <p><?php echo $value['content'] ?></p>
    </div>
<?php endforeach ?>

