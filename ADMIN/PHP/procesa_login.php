<?php
session_start(); // inicializo la sesion de php
include("../../PHP/conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$query = "SELECT usuario FROM usuario WHERE usuario='$usuario' AND clave='$clave'";
$resultado = mysql_query($query, $conexion);

if(mysql_num_rows($resultado) > 0){ // ver cantidad de fila
	$fila = mysql_fetch_array($resultado); // capturo la fila
  	$_SESSION['usuario'] = $fila['usuario']; // copio el id de usuario a una variable de sesion
	header("location: menuinicial.php"); // hago la redireccion al menu inicial
}else{
	// muestro el mesaje de error y el link a intentarlo nuevamente
	echo "Datos incorrectos. Intentelo nuevamente <a href=\"Login.php\" >aqui</a>";
}
?>