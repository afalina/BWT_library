<?php
namespace App;

use \Illuminate\Database\Capsule\Manager;
use \Illuminate\Events\Dispatcher;
use \Illuminate\Container\Container;

class DB extends Manager
{
    public static function init() {
        require '/Users/afalina/Public/configs/bwtlibrary.php';
        $db = new DB();
        $db->addConnection([
            'driver'    => 'mysql',
            'host'      => DATABASE_HOST,
            'database'  => DATABASE_NAME,
            'username'  => DATABASE_USER,
            'password'  => DATABASE_PASSWORD,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        $db->setEventDispatcher(new Dispatcher(new Container));
        $db->setAsGlobal();
        $db->bootEloquent();
    }
}