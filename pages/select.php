<?php 
require_once('../methods/select.php');
$select = new Select();
?>


<?php foreach($select->select_all() as $key => $value):?>
    <div class="record">
        <a href="/pages/single.php?id=<?php echo $value['id'] ?>">
            <?php echo $value['title'] ?>
        </a>
        <p><?php echo $value['content'] ?></p>
        <a href="delete.php?id=<?php echo $value['id']?>">Delete</a>
        <a href="update.php?id=<?php echo $value['id']?>">Update</a>
        <hr>
    </div>
<?php endforeach ?>

