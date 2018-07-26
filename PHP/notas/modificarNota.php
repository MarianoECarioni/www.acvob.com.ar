<?php
/**
 * Escribe lo que le pasen a un archivo de logs
 * @param string $cadena texto a escribir en el log
 * @param string $tipo texto que indica el tipo de mensaje. Los valores normales son Info, Error,  
 *                                       Warn Debug, Critical
 */
function write_log($cadena,$tipo)
{
               
        //$arch = fopen($path, "a+"); 
	$arch = fopen(realpath( '.' )."/logs/milog_".date("Y-m-d").".txt", "a+"); 

	fwrite($arch, "[".date("Y-m-d H:i:s.u")." ".$_SERVER['REMOTE_ADDR']." ".
                   $_SERVER['HTTP_X_FORWARDED_FOR']." - $tipo ] ".$cadena."\n");
	fclose($arch);
}

function reemplazar($cadena)
{
   write_log($cadena,"cadena" );
   $nuevacadena = str_replace("�", "&aacute;", $cadena); 
   $nuevacadena = str_replace("�", "&eacute;", $nuevacadena);
   $nuevacadena = str_replace("�", "&iacute;", $nuevacadena);
   $nuevacadena = str_replace("�", "&oacute;", $nuevacadena);
   $nuevacadena = str_replace("�", "&uacute;", $nuevacadena);
   $nuevacadena = str_replace("�", "&Aacute;", $nuevacadena);
   $nuevacadena = str_replace("�", "&Eacute;", $nuevacadena);
   $nuevacadena = str_replace("�", "&Iacute;", $nuevacadena);
   $nuevacadena = str_replace("�", "&Oacute;", $nuevacadena);
   $nuevacadena = str_replace("�", "&Uacute;", $nuevacadena);
   $nuevacadena = str_replace("xn", "<br>", $nuevacadena);
   return $nuevacadena;
}


print_r($_GET);
//
$pie=trim($_GET['Ipie']);
$titulo=trim($_GET['Ititulo']);
$imagen=trim($_GET['Iimagen']);
$tiponota=trim($_GET['Itiponota']);
$detcorto=$_GET['Idetallecorto'];

$detcorto = reemplazar($detcorto);
write_log("Estro es una prueba","Debug");
write_log($tiponota,"tipo nota" );
write_log($pie,"Pie" );
write_log($titulo,"Titulo" );
write_log($imagen,"imagen" );
write_log($detcorto,"Detalle corto" );

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
write_log(mysql_errno($conexion)," mysql_errno" );
mysql_close($conexion);
//
$respuesta = "Fila modificada";
echo rawurlencode($respuesta);
?>