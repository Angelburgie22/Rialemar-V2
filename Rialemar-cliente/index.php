<?php
	/*Incluir las variables de configuración del archivo configuracion.php*/
	require_once('configuracion.php');
	$accion = (isset($_POST['accion'])) ? $_POST['accion'] : null;
	$accion = (isset($_GET['accion'])) ? $_GET['accion'] : $accion;
	/*Incluir el header*/
	include_once(HEADERADMIN);
	/*Archivo a desplegar dependiendo del valor de accion*/
	switch($accion){
		case 'listaCarros':
			include_once("Carros/listCarros.php");
		break;
		/*COMPRAS*/
		case 'listaCompras':
			include_once("Compras/listaCompra.php");
		break;
		case 'datosCompra':
			include_once("datosCompraRenta.php");
		break;
		case 'addCompra':
			include_once("Compras/addCompra.php");
		break;
		case 'deleteCompra':
			include_once("Compras/deleteCompra.php");
		break;
		/**/
		/*RENTAS*/
		case 'listaRentas':
			include_once("Rentas/listaRentas.php");
		break;
		case 'datosRenta':
			include_once("datosCompraRenta.php");
		break;
		case 'addRenta':
			include_once("Rentas/addRenta.php");
		break;
		case 'deleteRenta':
			include_once("Rentas/deleteRenta.php");
		break;
		/**/
		/*CLIENTES*/
		case 'editCliente':
			include_once("Clientes/editCliente.php");
		break;
		case 'updateCliente':
			include_once("Clientes/updateCliente.php");
		break;
		case 'deleteCliente':
			include_once("Clientes/deleteCliente.php");
		break;
		/**/
		case 'register':
			include_once("Register/formRegister.php");
		break;
		case 'login':
			include_once("Login/formLogin.php");
		break;
		case 'logout':
			include_once("Login/logout.php");
		break;
		case 'settings':
			include_once("ajustesCuenta.php");
		break;
		case 'contact':
			include_once("contacto.php");
		break;
		default:
			include_once("home.php");
		break;
	}
	/*Incluir el footer*/
	include_once(FOOTERADMIN);
?>