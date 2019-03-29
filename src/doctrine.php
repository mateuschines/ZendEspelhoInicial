<?php

use Doctrine\ORM\Tools\Setup;//criar config das anotacoes
use Doctrine\ORM\EntityManager;//class principal do ORM gerenciar tudo na entidade
//caminho da onde ira estar as entidades
$paths = [
    __DIR__. '\App\src\Entity'
];

$isDevMode = true;

$dbParams = [
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'son_expressive_doctrine'
];

//dizendo pro doctrine que estamos criando via anotação
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

$entityManager = EntityManager::create($dbParams, $config);

function getEntityManager() {
    global $entityManager;
    return $entityManager;
}