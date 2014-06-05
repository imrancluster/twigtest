<?php

require_once __DIR__ . '/vendor/autoload.php';

global $twig;
global $db;

$twigLoader = new Twig_Loader_Filesystem(__DIR__ . '/views');
$twig = new Twig_Environment($twigLoader, array('cache' => __DIR__ . '/views/cache'));

$config = array(
    'host'  => 'localhost',
    'port'  => 3306,
    'user'  => 'root',
    'pass'  => 'bismillah',
    'db'    => 'twigtest'
);

$db = mysql_connect($config['host'], $config['user'], $config['pass']);
mysql_select_db($config['db'], $db);