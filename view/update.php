<div class="main">
    <form action="../controllers/update.php">
        <input type="text" name='title'>
        <input type="text" name='content'>
        <input type="hidden" name='id' value="<?php echo $_GET['id'];?>">
        <input type="submit">
    </form>
</div>