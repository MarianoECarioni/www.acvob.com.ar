<?php
print_r($_GET);
//
echo ("entro al php");
$anio=trim($_GET['Ianio']);
$torneo=trim($_GET['Itorneo']);
$cat=trim($_GET['Icategoria']);
$numero=trim($_GET['Inumero']);
$semana=trim($_GET['Isemana']);
$fecha=trim($_GET['Ifecha']);
$local=trim($_GET['Ilocal']);
$visita=trim($_GET['Ivisitante']);
$PTL=trim($_GET['IPTL']);
$PTV=trim($_GET['IPTV']);
$S1L=trim($_GET['IS1L']);
$S1V=trim($_GET['IS1V']);
$S2L=trim($_GET['IS2L']);
$S2V=trim($_GET['IS2V']);
$S3L=trim($_GET['IS3L']);
$S3V=trim($_GET['IS3V']);
$S4L=trim($_GET['IS4L']);
$S4V=trim($_GET['IS4V']);
$S5L=trim($_GET['IS5L']);
$S5V=trim($_GET['IS5V']);
//
// Se realiza la conexion a la base de datos.
include ("../../PHP/conexion.php");
// Actualizo el campo recibido por GET con la informacion que tambien hemos recibido
mysql_query("INSERT INTO resultados VALUES('$anio', '$torneo', '$cat', '$numero', '$semana', '$fecha', '$local', '$visita', '$PTL', '$PTV',
                                           '$S1L', '$S1V', '$S2L', '$S2V', '$S3L', '$S3V', '$S4L', '$S4V', '$S5L', '$S5V' )", $conexion ) or die(mysql_error());
echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
mysql_close($conexion);
//
$respuesta = "Fila insertada";
echo rawurlencode($respuesta);
?>