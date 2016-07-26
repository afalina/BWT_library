<h1>Список книг</h1>
<?php
$i = 0;
foreach($data as $row) {
    $i++;
    echo $i . '. ' . $row->author . ' «' . $row->title . '»' . ' ' . $row->published_year
        . ' года издания';
    echo "<br><hr>";
}
?>