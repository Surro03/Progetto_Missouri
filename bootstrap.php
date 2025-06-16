<?php

require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

// 1. Percorso delle entità
$paths = [__DIR__ . '/src/Entity'];
$isDevMode = true;

// 2. Configurazione per attributi o annotazioni
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: $paths,
    isDevMode: $isDevMode,
);

// 3. Parametri del DB
$dbParams = array(
    'dbname'   => 'test_db',
    'user'     => 'root',
    'password' => '',
    'host'     => '127.0.0.1',
    'driver'   => 'pdo_mysql',
);

// 4. Creazione della connessione con DriverManager
$connection = DriverManager::getConnection($dbParams, $config);

// 5. Creazione EntityManager
$entityManager = new EntityManager($connection, $config);


// include the composer autoloader for autoloading packages
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/config/config.php');

// set up an autoloader for loading classes that aren't in /vendor
// $classDirs is an array of all folders to load from
/*$classDirs = array(
    __DIR__,
    __DIR__ . './Entity',
);*/

function getEntityManager() : \Doctrine\ORM\EntityManager
{
    $entityManager = null;

    if ($entityManager === null)
    {
        $paths = array(__DIR__ . DIRECTORY_SEPARATOR . "Entity");
        $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration($paths);
        $config->setAutoGenerateProxyClasses(true);

        # set up configuration parameters for doctrine.
        # Make sure you have installed the php7.0-sqlite package.
        $connectionParams = array(
            'dbname' => DB_NAME,
            'user' => DB_USER,
            'password' => DB_PASS,
            'host' => DB_HOST,
            'driver' => 'pdo_mysql',
        );

        $entityManager = \Doctrine\ORM\EntityManager::create($connectionParams, $config);
    }

    return $entityManager;
}
