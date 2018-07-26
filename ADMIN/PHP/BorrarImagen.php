<?php
/**
 * Escribe lo que le pasen a un archivo de logs
 * @param string $cadena texto a escribir en el log
 * @param string $tipo texto que indica el tipo de mensaje. Los valores normales son Info, Error,  
 *                                       Warn Debug, Critical
 */
include ("Funciones.php");
write_log("entre", "entre");

print_r($_GET);
//
$idnota=trim($_GET['Iidnota']);
$idimagen=trim($_GET['Iidimagen']);

// Se realiza la conexion a la base de datos.
include ("../../PHP/conexion.php");
//
// Actualizo el campo recibido por GET con la informacion que tambien hemos recibido
mysql_query("DELETE FROM img_notas WHERE id_nota='$idnota' AND id_imagen='$idimagen' ", $conexion ) or die(mysql_error());
//                
echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
write_log(mysql_errno($conexion)," mysql_errno" );
mysql_close($conexion);
//
$respuesta = "Imagen Borrada";
echo rawurlencode($respuesta);
?>