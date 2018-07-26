<?php
print_r($_GET);
$campo=trim($_GET['actualizar']);
// Si los campos son validos, se procede a actualizar los valores en la DB
	include '../../PHP/conexion.php';
// Actualizo el campo recibido por GET con la informacion que tambien hemos recibido
    echo $campo;
	mysql_query("DELETE FROM fixture WHERE id_fixture='$campo'", $conexion) or die(mysql_error());
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
	
//	
$respuesta = "fixture borrado";
echo rawurlencode($respuesta);
?>