<?php


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/vendor/autoload.php';

global $twig;
global $db;
global $entityManager;


$twigLoader = new Twig_Loader_Filesystem(__DIR__ . '/views');
$twig = new Twig_Environment($twigLoader, array(
    'cache' => __DIR__ . '/views/cache',
    'debug' => true
));

$twig->addExtension(new Twig_Extension_Debug());


$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'dbname'   => 'twigtest',
    'user'     => 'root',
    'password' => '123456'
);

$db = mysql_connect($conn['host'], $conn['user'], $conn['password']);
mysql_select_db($conn['dbname'], $db);


$base_url = "http://twigtest.local/";
$static = $base_url . "views/public/";


$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);