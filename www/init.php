<?php
echo "Hi!\r\n";
printf("%s\r\n","Hi!");

// bootstrap.php
// Include Composer Autoload (relative to project root).
require_once "../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query;
use Doctrine\DBAL\Logging\DebugStack;

$paths = array("./Entities");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '123',
    'dbname'   => 'db_nfsko_190615'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($dbParams, $config);
$stack = new DebugStack();
$em->getConfiguration()->setSQLLogger($stack);

echo "Entity Manager creted with success";

$sql = 'select d.objid from directory_elm d';
$rsm = new ResultSetMapping();

// $query = $em->createNativeQuery($sql, $rsm);
 $rsm->addScalarResult('objid', 'objid');
// $elms = $query->getResult();
// var_dump($elms);

$query = $em->createNativeQuery($sql, $rsm);
$elms = $query->getResult(Query::HYDRATE_SCALAR);
var_dump($elms);

$conn = $em->getConnection();
//$stmt = $conn->query($sql);
$stmt = $conn->prepare($sql);
$stmt = $conn->query($sql);
var_dump($stmt->fetchAll());


echo "Statistics below\r\n\r\n";


var_dump($stack);

//TODO
/*
 * Need to try:
 * 1. Get results as objects
 * 2. Get results as array using native query
 * 3. Get results as arrya using query from connection
 * 4. Get results as arrya using prepared statement
 */


?>