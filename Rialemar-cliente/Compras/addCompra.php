<?php
	/*Incluir las variables y demás parámetros de ajuste del archivo configuracion.php*/
	require_once('configuracion.php');
	/*Incluir la conexión a la base de datos*/
	include("Clases/MySqli.php");
	/*Variables para enviar en la sentencia a la tabla*/
	$ID_Cliente = $_SESSION['user_session'];
	$ID_Empleado = 1;
	$ID_Carro = $_GET['ID_Carro'];
	$Fecha_Compra = date("Y-m-d");
	$Monto = $_GET['Monto'];
	$Estado = "Espera";
	/*Incluir el archivo header.php en la página*/
	require_once(HEADERADMIN);
	/*Sentencia insert hacia la tabla de compras*/
	$query = "INSERT INTO compras (ID_Cliente, ID_Empleado, ID_Carro, Fecha_Compra, Monto, Estado) VALUES ('$ID_Cliente', '$ID_Empleado', '$ID_Carro', '$Fecha_Compra', '$Monto', '$Estado')";
	/*Si hay errores con la conexión con la base de datos*/
	if(!$result = mysqli_query($con, $query)){
		echo '<div id="mensaje">
				<center>
				<h2 class="title">Error al intentar realizar la compra</h2>'.
				mysqli_error($con)
				.'<br><input type=button value="Ir al inicio" onclick=self.location="'.ROOTURL.'?accion=listaCarros">  
				</center>
			</div>';
	}
	/*Si no hay errores y la ejecución es exitosa*/
	else{
		echo '<div id="mensaje"><center>
			<h2>Compra realizada</h2>
			<br>
			<input type=button value="Ir al inicio" onclick=self.location="'.ROOTURL.'?accion=listaCarros" class="btn"> 
			</center>
		</div>';
	}
	/*Incluir el archivo footer.php en la página*/
	require_once(FOOTERADMIN);
?>