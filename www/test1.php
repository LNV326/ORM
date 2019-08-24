<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Doctrine\DBAL\Logging\DebugStack;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

// require "../build/vendor.phar";

require_once '../vendor/autoload.php';
require_once '../src/bootstrap.php';

function profile ($em) {
    $stack = $em->getConfiguration()->getSQLLogger();
    echo 'Request time: '.number_format((microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])*1000, 2).'ms'.'<br>';
    echo 'Query count to DB: '.count($stack->queries).'<br>';
    echo 'Query time: '.number_format(array_sum(array_column($stack->queries, 'executionMS'))*1000, 2).'ms'.'<br>';
    
    $secondLevelCache = $em->getConfiguration()->getSecondLevelCacheConfiguration();
    
    // Get the total number of put in all regions.
    // echo 'Put in cache: '.$logger->getPutCount().'<br>';
    
    // Get the total number of entries successfully retrieved from all regions.
    // echo 'Read from cache: '.$logger->getHitCount().'<br>';
    
    // Get the total number of cached entries *not* found in all regions.
    // echo 'Not found in cache: '.$logger->getMissCount().'<br>';
    
    if (!is_null($secondLevelCache)) {
        $logger = $secondLevelCache->getCacheLogger();
        $queryRegion = $em->getCache()::DEFAULT_QUERY_REGION_NAME;
        echo 'Query put in cache: '.$logger->getRegionPutCount($queryRegion).'<br>';
        echo 'Query read from cache: '.$logger->getRegionHitCount($queryRegion).'<br>';
        echo 'Query not found in cache: '.$logger->getRegionMissCount($queryRegion).'<br>';
    }
}

function test1($em) {
    $sql = 'select c from Entity\EntityForumPosts c';
    $query = $em->createQuery($sql)
    ->setFirstResult(1)
    ->setMaxResults(100)
    ->setCacheable(true)
    ->setLifetime(60)
    ->useResultCache(true, 60);
    $elms = $query->getResult();
    
    echo "<br>".count($elms);
    echo "<br>";
    
    $em->clear();
}

    
//     $sql = 'select c.* from forum_posts c limit 10000';
//     $rsm = new ResultSetMappingBuilder($em);
//     $rsm->addRootEntityFromClassMetadata('Entity\EntityForumPosts', 'c');
//     $query = $em->createNativeQuery($sql, $rsm);
//     $elms = $query->getArrayResult();
    
test1($em);
profile($em);





?>