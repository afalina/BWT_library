<h1>Поиск по книгам</h1>
<form action="" method="post">
    <input name="inputText">
</form>
<div>
    Результаты поиска
</div>
<?php
if ($data==[]) {
    echo "Поиск ничего не дал :(";
} else {
    foreach($data as $row) {
        echo $row->author . ' «' . $row->title . '»' . ' ' . $row->published_year 
        . ' года издания';
        echo '<br>';
        echo $row->record;
        echo "<br><hr>";
    }
}