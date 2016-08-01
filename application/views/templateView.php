<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" href="application/styles/bootstrap.css">
    <link rel="stylesheet" href="application/styles/bootstrap-theme.css">
    <link rel="stylesheet" href="application/styles/global.css">
    <script src="application/scripts/jquery.js"></script>
    <script src="application/scripts/bootstrap.js"></script>
    <script src="application/scripts/global.js"></script>

</head>
<body>
<div class="container">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?='http://'.$_SERVER['HTTP_HOST'].'/main'?>">Добавить книгу</a>
                    </li>
                    <li>
                        <a href="<?='http://'.$_SERVER['HTTP_HOST'].'/list'?>">Список книг</a>
                    </li>
                    <li>
                        <a href="<?='http://'.$_SERVER['HTTP_HOST'].'/search'?>">Поиск по книгам</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
    <div class="container">
        <?php include 'application/views/'.$contentView; ?>
    </div>
</body>