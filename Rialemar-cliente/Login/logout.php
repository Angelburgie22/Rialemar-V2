<?php
/*En ajustes de cuenta está la opción de eliminar cuenta que al finalizar necesita cerrar sesión
pero dado que está en una diferente carpeta tengo que salirme de la actual, verificando que la variable
respuesta que se obtiene al hacer clic al botón de opción del deleteCliente.php puedo saber
en que carpeta estoy
*/  
require_once('configuracion.php');
unset($_SESSION['user_session']);
if(isset($_COOKIE[session_name()])){
	setcookie(session_name(), ' ',time()-4200, '/');
}
if(session_destroy())
{
	header("Location: ".ROOTURL);
}
?>