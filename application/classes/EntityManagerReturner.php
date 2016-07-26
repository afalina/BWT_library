<?php
namespace App;

class EntityManagerReturner
{
    public function getManager()
    {
        require ($_SERVER['DOCUMENT_ROOT'].'/autoloader.php');
        require ($_SERVER['DOCUMENT_ROOT'].'/cli-config.php');
        return $entityManager;
    }
}
?>
