<div class="jumbotron list">
    <div class="header">
        <h1>Список книг</h1>
        <h2>и все такое</h2>
    </div>
</div>
<?php
$i = 1;
?>
<div class="panel panel-default">
    <table class="table">
        <tr>
            <td><b>#</b></td>
            <td><b>Имя автора</b></td>
            <td><b>Название</b></td>
            <td><b>Год издания</b></td>
        </tr>
        <? foreach ($data as $row): ?>
            <tr>
                <td><?= $i . '. ' ?></td>
                <td><?= $row->author ?></td>
                <td><?= '«' . $row->title . '»' ?></td>
                <td><?= $row->published_year ?></td>
                <? $i++ ?>
            </tr>
        <? endforeach ?>
    </table>
</div>