<div class="main">
<?php foreach($select->select_all() as $key => $value):?>
    <div class="record">
        Заголовок:
        <a href="/controllers/single.php?id=<?php echo $value['id'] ?>">
            <?php echo $value['title'] ?>
        </a>
        <p>Контент: <?php echo $value['content'] ?></p>
        <a href="../controllers/delete.php?id=<?php echo $value['id']?>">Delete</a>
        <a href="../controllers/update.php?id=<?php echo $value['id']?>">Update</a>
        <hr>
    </div>
<?php endforeach ?>
</div>