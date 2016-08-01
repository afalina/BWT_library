<?=$_GET['url'];?>
<div class="jumbotron main">
    <div class="header">
        <h1>Добавить книгу</h1>
        <h2>и порадоваться жизни</h2>
    </div>
</div>

<?php
if ($data) {
?><div class="alert alert-danger" role="alert">
    <?php
    foreach ($data as $row) {
        echo $row.'<br>';
    }
    ?>
  </div>
<?}?>
<div class="well">
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <input class="form-control" type="text" name="author" required placeholder="Автор книги">
    </div>
    <div class="form-group">
        <input class="form-control" name="title" required placeholder="Название книги">
    </div>
    <div class="form-group">
        <input class="form-control" name="published_year" required placeholder="Год издания">
    </div>
    <div class="form-group">
        <label>Загрузить файл с книгой</label>
        <span class="glyphicon glyphicon-upload"></span><input class="btn" name="filename" required type="file">
    </div>
    <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Добавить книгу">
</form>
</div>