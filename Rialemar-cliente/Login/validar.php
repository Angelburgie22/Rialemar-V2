<?php 
	/*Solicito las variables de configuración del archivo configuracion.php*/
	require_once '../configuracion.php';
	/*Variable que guarda el nombre del host*/
	$db_host = DBHOST;
	/*Variable que guarda el puerto para la conexión a la bd*/
	/*$db_port = DBPORT;*/
	/*Variable que guarda el nombre de la base de datos*/
	$db_name = DB;
	/*Variable que guarda el usuario para la conexión a la bd*/
	$db_user = DBUSER;
	/*Variable que guarda la contraseña para la conexión a la bd*/
	$db_pass = DBPASSWD;
	if(isset($_POST['btn-login'])){
		$user = $_POST['user'];
		$password = $_POST['password'];
		try{
			$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
			$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $db_con->prepare("SELECT * FROM clientes WHERE Nombre_Usuario='".$user."'");
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			if($row['Contra_Usuario'] == $password){
				$_SESSION['user_session'] = $row["ID_Cliente"];	
				header("Location: ../?accion=home");			
			}else{
				include("formLogin.php"); ?>
				<h1>Error en la autentificacion</h1>
				<?php
			}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
?>