<?php
echo 'Bootstrap is started <br>';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Cache\MemcacheCache;

$paths = array( realpath(__DIR__."/../src/Entity") );
$isDevMode = true;

// the connection configuration
$dbParams = array(
		'driver' 	=> 'pdo_mysql',
		'user'		=> 'sa1',
		'password'	=> '123',
		'dbname'	=> 'u11795_nfsko'
);

if ($isDevMode == true) {
	$cache = new \Doctrine\Common\Cache\ArrayCache;
} else {
	$cache = new MemcacheCache;
	$memcache = new Memcache();
	$memcache->connect('localhost', 11211);
	$cache->setMemcache($memcache);
}

$reader = new AnnotationReader();
$driver = new AnnotationDriver($reader, $paths);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$config->setMetadataCacheImpl( $cache );
$config->setQueryCacheImpl( $cache );
$config->setMetadataDriverImpl( $driver );
$config->setProxyDir( realpath(__DIR__."/../tmp/Proxy") );

if ($isDevMode == true) {
	$config->setAutoGenerateProxyClasses(true);
} else {
	$config->setAutoGenerateProxyClasses(false);
}

$entityManager = EntityManager::create($dbParams, $config);
$em = $entityManager;
$em->getConfiguration()->addEntityNamespace('Entity', 'src/Entity');

// This I had to add to support the Mysql enum type.
$platform = $entityManager->getConnection()->getDatabasePlatform();
$platform->registerDoctrineTypeMapping('enum', 'string');

echo 'Bootstrap is finished <br>';
?>