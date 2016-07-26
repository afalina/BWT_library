<?php
require 'vendor/autoload.php';
require '/Users/afalina/Public/configs/bwtlibrary.php';
use \Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => DATABASE_HOST,
    'database'  => DATABASE_NAME,
    'username'  => DATABASE_USER,
    'password'  => DATABASE_PASSWORD,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

use \Illuminate\Events\Dispatcher;
use \Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));

$capsule->setAsGlobal();

$capsule->bootEloquent();
