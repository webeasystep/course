<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

//Connection to database
$db = new mysqli($servername, $username, $password, $database);

//Returns true if there is NO connection
if(!$db){
	//Error Message
	die("Connection failed: " . $db->connect_error);
}