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
$dbParams = [
    'dbname'   => 'test_db',
    'user'     => 'root',
    'password' => '',
    'host'     => '127.0.0.1',
    'driver'   => 'pdo_mysql',
];

// 4. Creazione della connessione con DriverManager
$connection = DriverManager::getConnection($dbParams, $config);

// 5. Creazione EntityManager
$entityManager = new EntityManager($connection, $config);
