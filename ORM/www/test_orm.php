<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Doctrine\Common\ClassLoader;

require_once '../vendor/autoload.php';
require_once '../src/bootstrap.php';

echo 'Trying to test ClassLoader by checking class Entity\EntityDirectoryElm... ';
if (!ClassLoader::classExists('Entity\EntityDirectoryElm'))
	echo 'Class Not Found<br>';
else
	echo 'Class Founded<br>';

try {
	echo 'Trying to test EntityManager by checking class Entity\EntityDirectoryElm... ';
	if ($em !== null)
		$repo = $em->getRepository( 'Entity\EntityDirectoryElm' );
	else
		'EM is null<br>';	
	$cats = $repo->findAll();	
	echo 'Founded '.count( $cats ).' entities<br>';
} catch (Exception $e) {
	echo $e->getMessage();
	Echo $e->getTraceAsString();
}
echo 'Test finished';