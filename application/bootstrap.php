<?php
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';
require_once '/Users/afalina/Public/configs/bwtlibrary.php';

\App\Connection::getInstance();

function escape_html($string) {
    return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8', true);
}

Route::start(); // запускаем маршрутизатор
?>