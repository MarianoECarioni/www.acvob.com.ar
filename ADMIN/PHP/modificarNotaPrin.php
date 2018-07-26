<?php
header("Content-Type: text/html;charset=utf-8");
print_r($_GET);
//

$idnota= trim($_GET['Iidnota']);
$pie=trim($_GET['Ipie']);
$titulo=trim($_GET['Ititulo']);
$imagen=trim($_GET['Iimagen']);
$tiponota=trim($_GET['Itiponota']);
$detcorto=$_GET['Idetallecorto'];
$detlargo=trim($_GET['Idetallelargo']);
//
// Se realiza la conexion a la base de datos.
include ("../../PHP/conexion.php");
include ("Funciones.php");
//
//$detcortoR = reemplazar($detcorto, "DER");
//
// Actualizo el campo recibido por GET con la informacion que tambien hemos recibido
mysql_query("UPDATE notas SET TITULO='$titulo',   
                              PIE='$pie',
                              LINK_IMAGEN='$imagen',
                              DETALLE_CORTO='$detcorto',
                              DETALLE_LARGO='$detlargo'    
              WHERE ID_NOTA ='$idnota'", $conexion ) or die(mysql_error());
//  
echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
mysql_close($conexion);
//
$respuesta = "Fila modificada";
echo rawurlencode($respuesta);
?>
