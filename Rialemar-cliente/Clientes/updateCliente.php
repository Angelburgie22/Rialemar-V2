<?php
	/*Incluir las variables y demás parámetros de ajuste del archivo configuracion.php*/
	require_once('../configuracion.php');
	/*Incluir la conexión a la base de datos*/
	include("../Clases/MySqli.php");
	/*Variables para enviar en la sentencia a la tabla*/
	$ID_Cliente = $_SESSION['user_session'];
	$APaterno = $_POST["txtAPaterno"];
	$AMaterno = $_POST["txtAMaterno"];
	$Nombre = $_POST["txtNombre"];
	$Edad = $_POST["txtEdad"];
	$Correo = $_POST["txtCorreo"];
	$Domicilio = $_POST["txtDomicilio"];
	$Nombre_Usuario = $_POST["txtNombre_Usuario"];
	$Contra_Usuario = $_POST["txtContra_Usuario"];
	/*Sentencia update con los datos modificados para el usuario actual*/
	$query = "UPDATE Clientes SET Nombre = '$Nombre', APaterno = '$APaterno', AMaterno = '$AMaterno', Edad = '$Edad', Correo = '$Correo', Domicilio = '$Domicilio', Nombre_Usuario = '$Nombre_Usuario', Contra_Usuario = '$Contra_Usuario' WHERE ID_Cliente = $ID_Cliente";
	/*Si hay errores con la conexión con la base de datos*/
	if(!$result = mysqli_query($con, $query)){
		echo '<div id="mensaje">
				<center>
				<h2 class="title">Error al actualizar tus datos</h2>'.
				mysqli_error($con)
				.'<br></center></div>';
	}
	/*Si no hay errores y la ejecución es exitosa*/
	else{
		echo '<div id="mensaje"><center>
			<h2>Datos actualizados</h2>
			<br>
			</center>
		</div>';
	}
?>