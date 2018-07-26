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
write_log($idnota, "Iidnota:");
$idimagen=trim($_GET['Iidimagen']);
write_log($idimagen, "Iidimagen:");

// Se realiza la conexion a la base de datos.
include ("../../PHP/conexion.php");
//
// Actualizo el campo recibido por GET con la informacion que tambien hemos recibido
$query = "INSERT INTO img_notas (id_nota, url_img, detalle) VALUES (".$idnota.", '', '');";
write_log($query, "Query");
mysql_query($query, $conexion) or die('Error al insertar: ' . mysql_error());
$Insertadas = mysql_affected_rows();
write_log($Insertadas, "Filas Insertadas" );//
$respuesta = "Imagen Insertada";
echo rawurlencode($respuesta);
?>