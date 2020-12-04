<?php
include_once("../configuracion.php");
//Solicito el arreglo y sus campos del archivo funciones.php y lo guardo en la variable
	$datosCliente = getDatosCliente($_SESSION['user_session']);
	//Checo que haya campos donde guardar valores dentro del arreglo
	if($datosCliente != null)
	{
		//Pongo el valor de cada campo del registro de este usuario en los inputs de tipo text
		foreach($datosCliente as $key=>$campo){ 
?>
		<link href="<?=CSS?>subformulario.css" rel="stylesheet" media="screen">
		<!--Realizo la forma que tiene como metodo Enviar las variables por POST hacia el archivo updateCliente.php/-->
		<br><br><br><br>
		<div>
			<form name="formCliente" action="updateCliente.php" method="POST" class="formulario">
				<!--Cabecera de nivel 2 /-->
				<h2>Modifica tus datos</h2>
				<!--Hago cajas de texto para cada campo de mi tabla Clientes y cada una con una etiqueta que
					describe que es lo que tengo que ingresar
				/-->	
				<!--Campos que deben de llenarse para poder continuar/-->
				<label>Nombre de usuario: <span>*</span>
					<input type="text" name="txtNombre_Usuario" placeholder="Nombre de usuario" required>
				</label>
				
				<label>Contrase&ntilde;a: <span>*</span>
					<input type="text" name="txtContra_Usuario" placeholder="Contrase&ntilde;a" required>
				</label>
				
				<label>Nombre: <span>*</span>
					<input type="text" name="txtNombre" value="<?=$campo['Nombre']?>" placeholder="Nombre" required>
				</label>

				<label>Apellido Paterno: <span>*</span>
					<input type="text" name="txtAPaterno" value="<?=$campo['APaterno']?>" placeholder="APaterno" required>
				</label>

				<label>Apellido Materno: <span>*</span>
					<input type="text" name="txtAMaterno" value="<?=$campo['AMaterno']?>" placeholder="AMaterno" required>
				</label>
				
				<label>Edad: <span>*</span>
					<input type="text" name="txtEdad" value="<?=$campo['Edad']?>" placeholder="Edad" required>
				</label>
				
				<label>Tel&eacute;fono: <span>*</span>
					<input type="text" name="txtTelefono" value="<?=$campo['Telefono']?>" placeholder="Telefono" required>
				</label>
				
				<label>Correo: <span>*</span>
					<input type="text" name="txtCorreo" value="<?=$campo['Correo']?>" placeholder="Correo" required>
				</label>
				
				<label>Domicilio: <span>*</span>
					<input type="text" name="txtDomicilio" value="<?=$campo['Domicilio']?>" placeholder="Domicilio" required>
				</label>
				<!--Hago un boton de Enviar/-->
				<input type="submit" name="btnModificar" value="Modificar">
			</form>
		</div>
<?php 	} ?>
<?php } ?>