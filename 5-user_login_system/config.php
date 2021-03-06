<?php

ini_set('display_errors', 'On');

error_reporting(E_ALL);

//database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'demo';
// setting up the web root and server root
$thisFile = str_replace('\\', '/', __FILE__);

$docRoot = $_SERVER['DOCUMENT_ROOT'];

$webRoot = str_replace(array($docRoot, 'config.php'), '', $thisFile);

$srvRoot = str_replace('config.php', '', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);

define("COOKIE_TIME_OUT", 1); //specify cookie timeout in days

require_once 'database.php';
require_once 'common.php';

/*
* End of file config.php
*/