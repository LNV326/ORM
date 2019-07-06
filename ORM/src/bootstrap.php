<?php
echo 'Bootstrap is started <br>';
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\Common\Cache\MemcacheCache;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Proxy\ProxyFactory;
use Doctrine\Common\Cache\MemcachedCache;
use Doctrine\ORM\Cache\RegionsConfiguration;
use Doctrine\ORM\Cache\DefaultCacheFactory;
use Doctrine\DBAL\Logging\DebugStack;
use Doctrine\ORM\Cache\Logging\StatisticsCacheLogger;

$isDevMode = true;
$isEnableLogging = true;

// The connection configuration
$dbParams = array(
    'driver' 	=> 'pdo_mysql',
    'user'		=> 'root',
    'password'	=> '123',
    'dbname'	=> 'db_nfsko_190615'
);

/**
 * Main cache configuration
 * 
 * Use memory for dev-env.
 * Use caching mechanism (Memcache for example) for prod-env.
 * @see https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/caching.html
 */
if ($isDevMode) {
    $cacheDriver = new ArrayCache;
} else {
    // Memcache (depricated)
//     $memcache = new Memcache();
//     $memcache->connect('localhost', 11211);
//     $cacheDriver = new MemcacheCache();
//     $cacheDriver->setMemcache($memcache);
    
    // Memcached
    $memcached = new Memcached();
    $memcached->addServer('localhost', 11211);
    $cacheDriver = new MemcachedCache();
    $cacheDriver->setMemcached($memcached);
}

/**
 * Creating annotation driver for metadata.
 */
$reader = new AnnotationReader();
$paths = array( realpath(__DIR__."/../src/Entity") );
$proxyDir = realpath(__DIR__."/../tmp/Proxy");
$metadataDriver = new AnnotationDriver($reader, $paths);

/**
 * Creating ORM configuration.
 * CacheDriver uses for: MetadataCache, QueryCache, ResultCache
 * 
 * @see https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/caching.html
 * @var \Doctrine\ORM\Configuration $config
 */
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $cacheDriver);
$config->setMetadataDriverImpl( $metadataDriver );


if ($isDevMode) {
    $config->setAutoGenerateProxyClasses(ProxyFactory::AUTOGENERATE_ALWAYS);
} else {
    $config->setAutoGenerateProxyClasses(ProxyFactory::AUTOGENERATE_FILE_NOT_EXISTS);
    
    /**
     * Creating second-level cache. It uses for save results of DB queries.
     * @see https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/second-level-cache.html
     */
    $config->setSecondLevelCacheEnabled(true);
    $cacheConfig = new RegionsConfiguration(); 
    $factory = new DefaultCacheFactory($cacheConfig, $cacheDriver);    
    $config->getSecondLevelCacheConfiguration()->setCacheFactory($factory);
}

// Enable logging
if ($isEnableLogging) {
    // Enable common logger for SQL-queries
    $config->setSQLLogger(new DebugStack());
    // Enable logger for second-level cache (result cache)
    if ($config->isSecondLevelCacheEnabled()) {
        $logger = new StatisticsCacheLogger();
        $config->getSecondLevelCacheConfiguration()->setCacheLogger($logger);
    }
}

/**
 * Creating Entity Manager
 * @var \Doctrine\ORM\EntityManager $em
 */
$em = EntityManager::create($dbParams, $config);
$em->getConfiguration()->addEntityNamespace('Entity', 'src/Entity');

// This I had to add to support the Mysql enum type.
$platform = $em->getConnection()->getDatabasePlatform();
$platform->registerDoctrineTypeMapping('enum', 'string');

echo 'Bootstrap is finished <br>';
?>