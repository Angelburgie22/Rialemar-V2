<?php
	/*Solicito las variables de configuración del archivo configuracion.php*/
	require_once '../configuracion.php';
	/*Variable que guarda el nombre del host*/
	$db_host = DBHOST;
	/*Variable que guarda el puerto para la conexión a la bd*/
	$db_port = DBPORT;
	/*Variable que guarda el nombre de la base de datos*/
	/*$db_name = DB;*/ /*Morales: Tuve algun problema con la conexión y mim solución era colocar el puerto en los parámetros de conexión*/
	/*Variable que guarda el usuario para la conexión a la bd*/
	$db_user = DBUSER;
	/*Variable que guarda la contraseña para la conexión a la bd*/
	$db_pass = DBPASSWD;
	
	/*Se comprueba que se haya dado click al botón enviar del formulario de register*/
	if(isset($_POST['btn-register'])){
		/*Variable que guarda el valor del usuario ingresado en el formulario*/
		$user = $_POST['user'];
		/*Variable que guarda el valor del apellido paterno ingresado en el formulario*/
		$apaterno = $_POST['apaterno'];
		/*Variable que guarda el valor del apellido materno ingresado en el formulario*/
		$amaterno = $_POST['amaterno'];
		/*Variable que guarda el valor del correo ingresado en el formulario*/
		$correo = $_POST['correo'];
		/*Variable que guarda el valor del nombre ingresado en el formulario*/
		$name = $_POST['name'];
		/*Variable que guarda el valor de la contraseña ingresado en el formulario*/
		$password = $_POST['password'];
		/*Variable que guarda el valor de la edad ingresado en el formulario*/
		$edad = $_POST['edad'];
		/*Variable que guarda el valor del teléfono ingresado en el formulario*/
		$telefono = $_POST['telefono'];
		/*Variable que guarda el valor del domicilio ingresado en el formulario*/
		$domicilio = $_POST['domicilio'];
		try{
			/*Variable que almacena los datos para laconexión a la base de datos*/
			$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
			/*Se activa el modo error*/
			$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			/*Se guarda la sentencia insert a ejecutar en la base de datos*/
			$stmt = $db_con->prepare("INSERT INTO clientes (Nombre, APaterno, AMaterno, Edad, Telefono, Correo, Domicilio, Nombre_Usuario, Contra_Usuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
			/*Se ejecuta la sentencia previa*/
			$stmt->execute([$name, $apaterno, $amaterno, $edad, $telefono, $correo, $domicilio, $user, $password]);
			/*Variable booleana para indicar a un script que todo fue exitoso*/
			$confirmar = true;
			/*Se despliega su valor que el script tomará como comprobación exitosa*/
			echo $confirmar;
		}
		/*Si hubo algún error en alguna sentencia dentro del try*/
		catch(PDOException $e){
			/*Se guarda el mensaje de la excepción para ser desplegada*/
			echo $e->getMessage();
		}
	}
?>