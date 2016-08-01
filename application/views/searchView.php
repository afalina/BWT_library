<div class="jumbotron search">
    <div class="header">
        <h1>Найди, что искал</h1>
        <h2>среди всего жизненного разнообразия</h2>
    </div>
</div>

<form action="" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="inputText" placeholder="Введите ваш поисковый запрос">
    </div>
</form>
<h3>Результаты поиска</h3>
<div class="panel panel-default">
    <table class="table">
<?php
$i = 1;
if ($data) {?>
        <? foreach ($data as $row): ?>
            <tr>
                <td><b><?= $i . '. ' ?></b></td>
                <td><b><?= $row->book->author ?></b></td>
                <td><b><?= '«' . $row->book->title . '»' ?></b></td>
                <td><b><?= $row->book->published_year ?></b></td>
                <? $i++ ?>
            </tr>
            <tr>
                <td></td>
                <td colspan="3"><?= $row->record?></td>
            </tr>
        <? endforeach ?>
    
<?
} 
?>
    </table>
</div>