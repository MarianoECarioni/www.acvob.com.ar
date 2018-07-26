<?php
print_r($_GET);
//
//echo ("entro");
$torneo=trim($_GET['Itorneo']);
$cat=trim($_GET['Icategoria']);
$semana=trim($_GET['Isemana']);
$anio=trim($_GET['Ianio']);
$numero=trim($_GET['Inumero']);
$local=trim($_GET['Ilocal']);
$visita=trim($_GET['Ivisita']);
$sede=trim($_GET['Isede']);
$fecha=trim($_GET['Ifecha']);
$hora=trim($_GET['Ihora']);
// Se realiza la conexion a la base de datos.
include '../../PHP/conexion.php';
//realizo el insert
$id = mysql_insert_id();
mysql_query("INSERT INTO fixture VALUES('$id', '$torneo', '$cat', '$semana', '$anio', '$numero', '$local', '$visita', '$sede', '$fecha', '$hora')", $conexion ) or die(mysql_error());
//
$respuesta = "Fila insertada";
echo rawurlencode($respuesta);
?>