<?php
echo 'Bootstrap is started /n';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Cache\ArrayCache;

$paths = array( realpath(__DIR__."/../src/Entity") );
$isDevMode = false;

// the connection configuration
$dbParams = array(
		'driver' 	=> 'pdo_mysql',
		'user'		=> 'sa1',
		'password'	=> '123',
		'dbname'	=> 'u11795_nfsko'
);

$cache = new \Doctrine\Common\Cache\ArrayCache();

$reader = new AnnotationReader();
$driver = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($reader, $paths);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$config->setMetadataCacheImpl( $cache );
$config->setQueryCacheImpl( $cache );
$config->setMetadataDriverImpl( $driver );

$entityManager = EntityManager::create($dbParams, $config);
$em = $entityManager;
$em->getConfiguration()->addEntityNamespace('Entity', 'src/Entity');

//-- This I had to add to support the Mysql enum type.
$platform = $entityManager->getConnection()->getDatabasePlatform();
$platform->registerDoctrineTypeMapping('enum', 'string');

echo 'Bootstrap is finished /n';
?>