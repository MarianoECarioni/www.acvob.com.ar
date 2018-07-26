<?php
print_r($_GET);
//
$anio=trim($_GET['Ianio']);
$torneo=trim($_GET['Itorneo']);
$categoria=trim($_GET['Icategoria']);
$numero=trim($_GET['Inumero']);
$semana=trim($_GET['Isemana']);

// Si los campos son validos, se procede a actualizar los valores en la DB
	include '../../PHP/conexion.php';
// Actualizo el campo recibido por GET con la informacion que tambien hemos recibido
	mysql_query("DELETE FROM resultados 
	              WHERE anio = '$anio'
				    AND id_torneo = '$torneo'
					AND id_categoria = '$categoria'
					AND numero = '$numero'
					AND semana = '$semana'", $conexion) or die(mysql_error());
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
	mysql_close($conexion);
//	
$respuesta = "Resultado borrado";
echo rawurlencode($respuesta);
?>