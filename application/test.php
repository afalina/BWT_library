<?php
require ($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
require '/Users/afalina/Public/configs/bwtlibrary.php'; 

use \Doctrine\ORM\Tools\Setup;
use \Doctrine\ORM\EntityManager;

$paths = array($_SERVER['DOCUMENT_ROOT']);
$isDevMode = false;
// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'     => DATABASE_HOST,
    'user'     => DATABASE_USER,
    'password' => DATABASE_PASSWORD,
    'dbname'   => DATABASE_NAME,
);
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$config->addCustomStringFunction('MATCH_AGAINST', 'DoctrineExtensions\Query\Mysql\MatchAgainst');
$entityManager = EntityManager::create($dbParams, $config);
?>