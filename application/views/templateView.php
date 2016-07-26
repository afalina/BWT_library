<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
</head>
<body>
    <a href="<?='http://'.$_SERVER['HTTP_HOST'].'/main'?>">Добавить книгу</a>
    <a href="<?='http://'.$_SERVER['HTTP_HOST'].'/list'?>">Список книг</a>
    <a href="<?='http://'.$_SERVER['HTTP_HOST'].'/search'?>">Поиск по книгам</a>
    <?php include 'application/views/'.$contentView; ?>
</body>
</html>