<link href="<?=CSS?>login.css" rel="stylesheet" type="text/css" media="screen">   

<div class="container-login" style="background-image: url('<?=ROOTURLSERVIDOR?>Images/bg-login.jpg'); background-position:bottom; background-size: 75%;">
		<form class="form-signin" method="post" id="login-form" action="Login/validar.php">
			<h2 class="form-signin-heading">Inicia Sesi&oacute;n</h2>
			<div id="error">
			</div>
				<input type="text" class="form-control" placeholder="Nombre de usuario" name="user" id="usuario" />
				<span id="check-e"></span>
				<input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="password" id="password"/>
				<button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
					Ingresar
				</button> 	
		</form>
</div>