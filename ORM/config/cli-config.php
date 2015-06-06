<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'vendor/autoload.php';
require_once 'src/bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = $em;

return ConsoleRunner::createHelperSet($entityManager);
?>