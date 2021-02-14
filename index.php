<?php $title="Главная"; require_once('view/templates/header.php');?>

<style>
body{
    margin: 0;
    padding: 0;
}
.links{
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100%;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
}
h1{
    margin: 0;
    padding: 0;
}
.links_inner{
    padding: 50px;
    border-radius: 10px;
    background: white;
}
</style>
<div class="links">
    <div class="links_inner">
        <h1><a href="controllers/select.php">Главная</a><br>
        <a href="controllers/create.php">Создать</a></h1>
    </div>
</div>

<?php require_once('view/templates/footer.php');?>