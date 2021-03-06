<?php

session_start();
ob_start();

function loadClasses($className)
{
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}
spl_autoload_register('loadClasses');

$config = require __DIR__ . '/config.php'; // db connection

try {
    $db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'], $config['db']['user'], $config['db']['pass']);
} catch (PDOException $e){
    die($e->getMessage());
}

foreach (glob(__DIR__ . '/helper/*.php') as $helperFile){   // calling helper functions to help
    require $helperFile;
}