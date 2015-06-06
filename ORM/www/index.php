<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Doctrine\Common\ClassLoader;

require_once '../vendor/autoload.php';
require_once '../src/bootstrap.php';


$repo = $em->getRepository( "Entity\\EntitySPages" );
$page = $repo->findOneByName( addslashes('news') );
if (is_null($page) ) {
	echo 'module';
} else {
	echo 'page';
}
echo '<br>';


if (!ClassLoader::classExists('EntityDirectoryElm'))
	echo 'NotFound<br>';
else
	echo 'Found<br>';
if (!ClassLoader::classExists('Entity\\EntityDirectoryElm'))
	echo 'NotFound<br>';
else
	echo 'Found<br>';
if (!ClassLoader::classExists('Entity:EntityDirectoryElm'))
	echo 'NotFound<br>';
else
	echo 'Found<br>';

try {
	
if ($em !== null)
	$em->getRepository('Entity\\EntityDirectoryElm');
else 'ololo';

$repo = $em->getRepository('Entity:EntityDirectoryElm');
$cats = $repo->findAll();

echo count($cats);
} catch (Exception $e) {
	echo $e->getMessage();
	Echo $e->getTraceAsString();
}
echo '111';