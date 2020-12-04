<?php

//Conectar a la base de datos MySQL
$con = new mysqli(DBHOST, DBUSER, DBPASSWD, DB);
//Checar conexión
if($con->connect_error){
	//Error: Mostrar mensaje de error
	die("Connection failed:" . $con->connect_error);
}
$query = "SET NAMES 'utf8'";
	if(!$result = mysqli_query($con, $query)){
		exit(mysqli_error($con));
	}
?>
	