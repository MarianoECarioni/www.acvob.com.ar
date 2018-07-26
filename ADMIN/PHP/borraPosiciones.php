<?php
print_r($_GET);
//
$anio=trim($_GET['Fanio']);
$torneo=trim($_GET['Ftorneo']);
$categoria=trim($_GET['Fcategoria']);
$equipo=trim($_GET['Fequipo']);
//
// Si los campos son validos, se procede a actualizar los valores en la DB
	include ("../../PHP/conexion.php");
// Actualizo el campo recibido por GET con la informacion que tambien hemos recibido
	mysql_query("DELETE FROM posiciones 
                  WHERE anio='$anio' 
                    AND id_torneo='$torneo' 
                    AND id_categoria='$categoria' 
                    AND equipo='$equipo'", $conexion) or die(mysql_error());
//                  
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
	mysql_close($conexion);
//	
$respuesta = "Registro borrado";
echo rawurlencode($respuesta);
?>