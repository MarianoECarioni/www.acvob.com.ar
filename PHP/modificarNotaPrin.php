<?php
print_r($_GET);
//
$pie=trim($_GET['Ipie']);
$titulo=trim($_GET['Ititulo']);
$imagen=trim($_GET['Iimagen']);
$tiponota=trim($_GET['Itiponota']);
$detcorto=trim($_GET['Idetallecorto']);
//
// Se realiza la conexion a la base de datos.
include ("conexion.php");
//
// Actualizo el campo recibido por GET con la informacion que tambien hemos recibido
mysql_query("UPDATE notas SET TITULO='$titulo',   
                              PIE='$pie',
                              LINK_IMAGEN='$imagen',
                              DETALLE_CORTO='$detcorto'
              WHERE TIPO_DE_NOTA='$tiponota'", $conexion ) or die(mysql_error());
//                
echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
mysql_close($conexion);
//
$respuesta = "Fila modificada";
echo rawurlencode($respuesta);
?>