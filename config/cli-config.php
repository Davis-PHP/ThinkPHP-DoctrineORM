<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\Persistence\Mapping\Driver\StaticPHPDriver;

$paths = array('./app/Entity');

$isDevMode = true;

$dbParams = array(
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'port' => 3306,
    'user' => 'root',
    'password' => '',
    'dbname' => 'tpsix',
    'charset' => 'utf8'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);
$driver = new StaticPHPDriver('./app/Entity');
$entityManager->getConfiguration()->setMetadataDriverImpl($driver);

return ConsoleRunner::createHelperSet($entityManager);

