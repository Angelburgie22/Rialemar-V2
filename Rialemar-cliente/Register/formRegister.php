<script type="text/javascript" src="<?=ROOTURL?>JS/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="<?=ROOTURL?>JS/validation.min.js"></script>
<script type="text/javascript" src="<?=ROOTURL?>JS/form_scriptRegister.js"></script>
<script type="text/javascript" src="<?=ROOTURL?>JS/bootstrap.min.js"></script>


<link href="<?=CSS?>login.css" rel="stylesheet" type="text/css" media="screen">


	<div class="container">
		<form class="form-register" method="post" id="register-form">
			<h2 class="form-register-heading">Reg&iacute;strate</h2><hr/>
			<div id="error">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Nombre" name="name" id="name"/>
				<span id="check-e"></span>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Apellido paterno" name="apaterno" id="apaterno"/>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Apellido materno" name="amaterno" id="amaterno"/>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Correo electr&oacute;nico" name="correo" id="correo"/>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Nombre de usuario" name="user" id="user"/>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="password" id="password"/>
			</div>
			<div class="form-group">
				<input type="number" min="18" max="99" maxlength="2" class="form-control" placeholder="Edad" name="edad" id="edad"/>
			</div>
			<div class="form-group">
				<input type="tel" maxlength="10" class="form-control" placeholder="Tel&eacute;fono" name="telefono" id="telefono"/>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Domicilio" name="domicilio" id="domicilio"/>
			</div>
			<hr/>
			<div class="form-group">
				<button type="submit" class="btn btn-default" name="btn-register" id="btn-register">
					<span class="glyphicon glyphicon-log-in"></span> &nbsp; Register
				</button> 	
			</div>        
		</form>
    </div>    
