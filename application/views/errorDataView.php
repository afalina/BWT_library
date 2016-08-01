<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
</head>

<div class="alert alert-danger" role="alert">
      <?php
  foreach ($data as $row) {
    echo $row.'<br>';
  }
  ?>
</div>