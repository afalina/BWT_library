<?php
namespace App;

use \Illuminate\Database\Capsule\Manager;
use \Illuminate\Events\Dispatcher;
use \Illuminate\Container\Container;
class Connection
{
    protected static $_instance = null;

    private function __construct()
    {
        $db = new Manager;
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

    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new Connection();
        }
        return self::$_instance;
    }
}