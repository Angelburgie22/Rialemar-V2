<?php
//Solicito los datos del archivo configuracion.php
require_once('configuracion.php');
//Realizo la conexión a la base de datos
include('Clases/MySqli.php');
$ID_Cliente = $_SESSION["user_session"]; //Guardo el ID del usuario actual en la variable
//Obtengo la respuesta y la accion del enlace enviado al dar click a alguna de las opciones
$respuesta = (isset($_GET['respuesta'])) ? $_GET['accion'] : null;
//Si no hay respuesta
if(!$respuesta){
?>	
<!--Creo un divisor con dos opciones de si o no para saber si eliminar o no el registro/-->
<div id="mensaje">
    <center>
		<h2 class="title">¿Est&aacute;s seguro de eliminar tu cuenta?</h2> 
			<br><input type=button value="Si" onclick=self.location="<?=ROOTURL?>?accion=deleteCliente&respuesta=si"> 
			<!--Botón Sí, que vuelve a este archivo pero para realizar el caso else/-->
	</center>
</div>
<?php } ?>
<?php
	//Si el botón presionado es sí
	if($respuesta){
		//Realizo la sentencia de eliminar de la tabla de Clientes
		$query = "DELETE FROM Clientes WHERE ID_Cliente = $ID_Cliente";
		//Compruebo que no haya error en la operación
		if (!$result = mysqli_query($con, $query)) {
				//Hago un divisor donde irá el mensaje de error y un botón que regresa al usuario a las opcones de usuario
		        echo '<div id="mensaje">
		        		<center>
						<h2 class="title">Error al intentar eliminar tu cuenta</h2>'.
						mysqli_error($con) //Concateno el error
						.'<br><input type=button value="Regresar" onclick=self.location="'.ROOTURL.'?accion=home" target="_parent">
						</center>
					</div>';
		}else{
		//Si se pudo eliminar la cuenta envío la página al archivo logout.php para cerrar la sesión
			include_once("Login/logout.php");
		}
    }
?>