<?php


namespace app\controller;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class EM
{
    public function getEntityManager()
    {
        $isDevMoe = true;
        $config = Setup::createAnnotationMetadataConfiguration(array(app_path() . 'Entity'), $isDevMoe);

        $conn = array(
            'driver' => 'pdo_mysql',
            'host' => '127.0.0.1',
            'port' => 3306,
            'user' => 'root',
            'password' => '',
            'dbname' => 'tpsix',
            'charset' => 'utf8'
        );
        return EntityManager::create($conn, $config);
    }
}