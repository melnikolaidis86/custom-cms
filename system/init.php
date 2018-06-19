<?php 
//Starting Session
session_start();

//Autoloading classes from src library
spl_autoload_register(function($className) {
    
    include __DIR__ . '/libraries/src/' . $className . '.php';
});

//Requiring configuration file
require_once(__DIR__ . '/config/config.php');

//Loading helper scripts
require_once (__DIR__ . '/helpers/' . 'format_helper.php');
require_once (__DIR__ . '/helpers/' . 'system_helper.php');
require_once (__DIR__ . '/helpers/' . 'db_helper.php');

//Requiring vendor files
require_once('vendor/autoload.php');
