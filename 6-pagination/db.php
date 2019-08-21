<?php
$host = 'localhost'; // The hostname
$username = 'root'; // username
$password = ''; // Password (Fill in if using a password)
$database = 'demo'; // The name of the database

// Connection to MySQL with PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);

