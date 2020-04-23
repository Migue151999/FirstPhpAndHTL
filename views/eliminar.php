<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "cursophp";

$connection = new mysqli($host, $username, $password, $database);
if (mysqli_connect_error()) {
	trigger_error("Error to conecte to MySQL");
}



?>