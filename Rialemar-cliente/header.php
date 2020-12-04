<!DOCTYPE html>
<html lang="es">  
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Agencias RIALEMAR&copy;</title>
		<link rel="icon" href="<?=ROOTURLSERVIDOR?>images/logo.ico" type="image/x-icon/">
		<link rel="icon" href="<?=ROOTURLSERVIDOR?> favicon.ico" type="image/x-icon/">
		<link rel="stylesheet" type="text/css" href="<?=CSS?>header.css">
		<link rel="stylesheet" type="text/css" href="<?=CSS?>general.css">
		<link rel="stylesheet" type="text/css" href="<?=CSS?>cars.css">
		<link rel="stylesheet" type="text/css" href="<?=CSS?>formulario.css">
		<script src="https://kit.fontawesome.com/146714d81a.js" crossorigin="anonymous"></script>
		<script src="<?=JS?>fechaActual.js"></script>
	</head>
	<body>
		<?php
			$accion = "";
			if(isset($_GET['accion'])){
				$accion = $_GET['accion'];
			}
		?>
		<header>
			<div class="header">
				<div class="logo">
					<div class="imglogo" onclick="window.location.href='<?=ROOTURL?>?accion=home'"><img src="<?=ROOTURLSERVIDOR?>Images/logo.png" alt="Logo"></div>
				</div>
				<div class="select">
					<a href="<?=ROOTURL?>?accion=home">INICIO</a>
				</div>
				<div class="select">
					<a href="<?=ROOTURL?>?accion=listaCarros">AUTOS</a>
				</div>
				<div class="select">
					<a href="<?=ROOTURL?>?accion=#">PARTES</a>
				</div>
				<div class="select">
					<a href="<?=ROOTURL?>?accion=contact">CONT&Aacute;CTANOS</a>
				</div>
				<div class="select">
					<a href="<?=ROOTURL?>?accion=membership">MEMBRES&Iacute;A</a>
				</div>
				<?php if(isset($_SESSION["user_session"])){ ?>
				<div class="logged">
					<div class="username"><?php echo getDatosClienteLogin($_SESSION['user_session']); ?></div>
					<div class="imgprofile"><img src="<?=ROOTURLSERVIDOR?>Images/logo.png" alt="Hola"></img></div>
					<div class="settings"><i class="fas fa-user-cog" onclick="window.location.href='<?=ROOTURL?>?accion=settings'"></i></div>
					<div class="settings"><i class="fas fa-sign-out-alt" onclick="window.location.href='<?=ROOTURL?>?accion=logout'"></i></div>
				</div>
				<?php }
				else{
				?>
				<div class="not-logged">
					<button class="btn" onclick="window.location.href='<?=ROOTURL?>?accion=login'"><span class="text">Iniciar sesi&oacute;n</span></button>
					<button class="btn" onclick="window.location.href='<?=ROOTURL?>?accion=register'"><span class="text">Registrarse</span></button>
				</div>
				<?php } ?>
			</div>
			<span id="line"></span>
		</header>
		