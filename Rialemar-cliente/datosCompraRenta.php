<link rel="stylesheet" type="text/css" href="<?=CSS?>carrodatos.css">

<!--Contenedor principal de la página-->
<?php if(isset($_SESSION['user_session'])){ ?>
<div class="container">
	<div class="top-container">
		<?php 
		$datosCarro = getDatosCarro($_GET["ID_Carro"]);
		if($datosCarro != null){  
			foreach($datosCarro as $key => $campo){
		?>
		<div class="little-container"><?=$campo["Marca_Carro"]?> <?=$campo["Modelo_Carro"]?></div>
		<div class="little-container"><?=$campo["Color_Carro"]?></div>
		<div class="little-container">$<?=$campo["Precio_Carro"]?></div>
		<?php } ?>
		<?php } ?>
	</div>
	<div class="bottom-container">
		<div class="left-container">
			<div class="left-header">Datos del carro</div>
			<div class="data-table">
				<table>
			<?php $datosCarro = getDatosCarro($_GET["ID_Carro"]);
				if($datosCarro != null){
					foreach($datosCarro as $key => $campo){ ?>
							<tr><td>Marca del carro:</td><td><?=$campo["Marca_Carro"]?></td></tr>
							<tr><td>Modelo del carro:</td><td><?=$campo["Modelo_Carro"]?></td></tr>
							<tr><td>Tipo de transmisi&oacute;n:</td><td><?=$campo["Tipo_Transmision"]?></td></tr>
							<tr><td>Tipo de tracci&oacute;n:</td><td><?=$campo["Tipo_Traccion"]?></td></tr>
							<tr><td>Fecha de salida:</td><td><?=$campo["Fecha_Salida"]?></td></tr>
							<tr><td>Precio del carro:</td><td><?=$campo["Precio_Carro"]?></td></tr>
					<?php 
						$ID_Carro = $campo['ID_Carro'];
						$Monto = $campo['Precio_Carro'];
					} 
					?>
				<?php } ?>
				</table>
			</div>
		</div>
		<div class="right-container">
			<div class="car-pic">
				<img src="<?=ROOTURLSERVIDOR?><?=$campo['Imagen']?>">
			</div>
			<div class="buttons-header">
				¿Qu&eacute; quieres hacer?
			</div>
			<div class="buttons">
				<?php if($_GET['accion'] == "datosCompra"){ ?>
					<button onclick="location.href='<?=ROOTURL?>?accion=listaCarros'">Cancelar</button>
					<button onclick="location.href='<?=ROOTURL?>?accion=addCompra&ID_Carro=<?=$ID_Carro?>&Monto=<?=$Monto?>'">Comprar</button>
				<?php }else if($_GET['accion'] == "datosRenta"){ ?>
					<div class="date-container">
						<form id="form-fechas" action="Rentas/addRenta.php" method="POST">
							<input style="display: none" type="number" value="<?=$ID_Carro?>" name="ID_Carro">
							<input style="display: none" type="number" value="<?=$Monto?>" name="Monto">
							Fecha inicial: <input type="text" readonly="readonly" value="<?=date("yy-m-d")?>" name="fecha_inicial" />
							<?php
								$date = date("Y-m-d");
								$moddate = strtotime('+10 day', strtotime($date));
								$moddate = date("Y-m-d", $moddate);
							?>
							Fecha final: <input id="fecha_final" type="date" min="<?=$date?>" max="<?=$moddate?>" value="<?=$date?>" name="fecha_final">
						</form>
					</div>
					<div class="function-buttons">
						<button onclick="location.href='<?=ROOTURL?>?accion=listaCarros'">Cancelar</button>
						<input id="submit-button" form="form-fechas" type="submit" value="Rentar">
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php }else{ 
	require_once("Login/formLogin.php");
}
?>