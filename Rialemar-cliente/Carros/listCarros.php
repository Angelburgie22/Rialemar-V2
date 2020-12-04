
<?php
	require_once("filtroCarros.php");  
	if(isset($_POST["btn-filter"])){
		$color = $_POST["color_carro"];
		$marca = $_POST["marca_carro"];
		$precioMax = $_POST["valor"];
		$listaCarros = filtrarCarrosPorPrecio($color, $marca, $precioMax);
	}
    else{
        $listaCarros = getListaCarros();
    }
	if($listaCarros != null){//Aqui se verifica que existan registros para desplegar los datos
?>	

	<div id="big_block" style="background-image: url('<?=ROOTURLSERVIDOR?>Images/bg-home7.png'); background-repeat:repeat; background-position:center; background-size: 145%;"> <!--Bloque en donde se almacenaran los bloques de los registros de la tabla Carros-->
	<?php //se lee cada registro de y cada campo de la lista de Carros
		foreach($listaCarros as $key=>$array) //Lee los registros de la tabla Carros
	{
	?>
	<div class="blocks"> <!--Bloque en donde irá cada registro-->
		<div class="car_block"> <!--Bloque en donde irá la imagen descriptiva del carro-->
			<img class="pic_car" src="<?=ROOTURLSERVIDOR.$array['Imagen']?>"> <!--Imagen del carro-->
		</div>
		<div class="info_block"> <!--Bloque en donde va una tabla con la descripción del carro-->
			<table class="info_table"> <!--Bloque que despliega los campos de cada registro de la tabla Carros-->
<!--Columna que contiene la decripción del campo--><!--Columna que despliega los campos del registro actual en celdas-->
				<tr><td>Marca del carro: </td><td><?=$array['Marca_Carro']?></td></tr>
				<tr><td>Modelo del carro: </td><td><?=$array['Modelo_Carro']?></td></tr>
				<tr><td>Color del carro: </td><td><?=$array['Color_Carro']?></td></tr>
				<tr><td>Tipo de transmision: </td><td><?=$array['Tipo_Transmision']?></td></tr>
				<tr><td>Tipo de traccion: </td><td><?=$array['Tipo_Traccion']?></td></tr>
				<tr><td>Año de salida: </td><td><?=$array['Fecha_Salida']?></td></tr>
				<tr><td>Costo: </td><td>$<?=$array['Precio_Carro']?></td></tr>
				<?php if(isset($_SESSION['user_session'])){ ?>
					<!--Botón que manda el ID del registro actual al archivo addCompra.php-->
					<tr><td><button class="button" onclick="location.href='<?=ROOTURL?>?accion=datosCompra&ID_Carro=<?=$array['ID_Carro']?>'">Comprar</button></td>
					<!--Botón que manda el ID del registro actual al archivo addRenta.php-->
					<td><button class="button" onclick="location.href='<?=ROOTURL?>?accion=datosRenta&ID_Carro=<?=$array['ID_Carro']?>'">Rentar</button></td></tr>
				<?php } ?>
			</table>
		</div>
	</div>
<?php } ?>
	</div>
<?php } ?>					
