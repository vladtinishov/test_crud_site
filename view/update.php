<div class="main">
    <form action="../controllers/update.php">
        title: <br>
        <input type="text" name='title'><br><br>
        content: <br>
        <input type="text" name='content'><br><br>
        <input type="hidden" name='id' value="<?php echo $_GET['id'];?>">
        <input type="submit">
    </form>
</div>