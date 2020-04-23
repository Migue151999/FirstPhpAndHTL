<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "cursophp";

$connection = new mysqli($host, $username, $password, $database);
if (mysqli_connect_error()) {
	trigger_error("Error to conecte to MySQL");
}

if (isset($_POST['user']) && isset($_POST['pass'])) {
	$usuario = $_POST['user'];
	$password = $_POST['pass'];
	$query = "Select id from usuarios where usuario = '$usuario' and password = '$password'";
	$resultado = mysqli_query($connection, $query);
	$data = array();
	while ($row = mysqli_fetch_row($resultado))$data = $row;
	if ($data != null) {

		session_start();
		$_SESSION['id'] = $data[0];
		

	}else{
		echo 'Usuario o  invalidos';
	}
}else {
	//echo 'Error';
}

?>


