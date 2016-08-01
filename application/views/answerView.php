<table class="table" id="answer">
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