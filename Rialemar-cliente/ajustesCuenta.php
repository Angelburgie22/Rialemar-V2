<?php if(isset($_SESSION['user_session'])){ ?>
<script type="text/javascript" src="<?=JS?>toggleBloques.js"></script>
<link href="<?=CSS?>ajustes.css" rel="stylesheet" media="screen">

<div class="cabecera">
	<h3 id="titulo">Ajustes de cuenta</h3>
</div>
<div class="ajustes">
	<div id="opcion_1" onclick="mostrar(1);" class="opcion">
		<p>Modificar mis datos</p><hr>
		<div id="primero" class="operacion">
			<iframe id="primer_iframe" src="<?=ROOTURL?>Clientes/editCliente.php"></iframe>
		</div>
	</div>
	<div id="opcion_2" onclick="mostrar(2);" class="opcion">
		<p>Eliminar mi cuenta</p><hr>
		<div id="segundo" class="operacion">
			<?php require_once("Clientes/deleteCliente.php") ?>
		</div>
	</div>
</div>
<?php 
}
else{   
	include("Login/formLogin.php");
}
?>