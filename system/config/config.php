<?php

//Define database connection variabels as constants
define('DB_DRIVER', 'mysql'); //used for pdo dsn
define('DB_HOST', 'localhost');
define('DB_NAME', 'custom-cms');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_ENCODE', 'UTF8');

//Application URI
define('BASE_URI', 'http://' . $_SERVER['SERVER_NAME'] . '/custom-cms/');