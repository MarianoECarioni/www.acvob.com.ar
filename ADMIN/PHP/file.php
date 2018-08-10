<?php
$idnota = $_GET['idnotaImg'];   
$cantidad = $_GET['Cantidad'];
$IDNota   = $_GET['IdNota'];
include("Funciones.php");
//echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
//echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
//echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
//echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
/*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/
write_log("*-------------INICIO", "Inicio de file.php----------*");

//Separo los parámetros de entrada en un array 
$Parametros = explode("-", $idnota);
//El primer parámetro es el Id de la nota, los restantes son los ID de imágen. 
$IDNota = $Parametros[0];
write_log("Parametro 1", $Parametros[0]);

//Inicializo el array de ID de Imágen con el valor "No".
$array = array();
for ($i = 0; $i < $cantidad; $i++)
{
    $array[$i] = 'No';
}

write_log("Cantidad", $cantidad);
//Recorro las imágenes a cargar
for ($i = 0; $i < $cantidad; $i++)
{
    $archivo = 'archivo'.$i;
    write_log("Archivo", $archivo);
    
    $CarpetaTemporal = $_FILES[$archivo]['tmp_name'];
    write_log("Carpeta temporal_".$i, $CarpetaTemporal);
    
    $ImagenTemporal = $CarpetaTemporal.'\\'.$_FILES[$archivo]['name'];
    write_log("Imagen temporal_".$i, $ImagenTemporal);
    
    
    if ($_FILES[$archivo]["error"] > 0)
    {
        echo "Error: " . $_FILES[$archivo]['error'] . "<br>";
        write_log("Error de acceso al archivo", $_FILES[$archivo]['error'] );
    }
    else
    {
        write_log("Redimensiono", $archivo);
        redimensionar_jpeg($CarpetaTemporal,$CarpetaTemporal,640,480,70); 
        write_log("Muevo", "Muevo de la temporal a la definitiva");
        
        move_uploaded_file($_FILES[$archivo]['tmp_name'], "../../Imagenes/" . $_FILES[$archivo]['name']);
        $array[$i] = $_FILES[$archivo]['name'];
        write_log("Termino", $archivo);
    }        
}

include ("../../PHP/conexion.php");
$path = '../Imagenes/';
write_log("Path imágenes", $path);

for ($i = 0; $i < $cantidad; $i++)
{
    if ($array[$i] != 'No')
    {
        $j = $i + 1;
        
        //verifico si existe la imágen
        $query = "SELECT * FROM img_notas WHERE id_nota='$IDNota' AND id_imagen= ".$Parametros[$j];
        $resultado = mysql_query($query, $conexion) or die('Error en  select: ' . mysql_error());;
        $número_filas = mysql_num_rows($resultado);
        write_log("Cantidad de filas_IDImagen_".$Parametros[$j], $número_filas);
        
        if ($número_filas >0 ){
            write_log("Accion MySql", "Hago update imagen ".$Parametros[$j]);
            write_log("URL-img", $path.$array[$i]);
            $query = "UPDATE img_notas SET url_img = '".$path.$array[$i]."' WHERE id_nota='$IDNota' AND id_imagen= ".$Parametros[$j];
            mysql_query($query, $conexion) or die('Error en  update: ' . mysql_error());;
            $Actualizado = mysql_affected_rows();
            write_log("Filas Actualizadas", $Actualizado);
        }
        else {
            write_log("Accion MySql", "Hago insert imagen ".$Parametros[$j]);
            $nombre = "'../Imagenes/".$_FILES['archivo'.$i]['name']."'";
            $query = "INSERT INTO img_notas (id_nota, url_img, detalle) VALUES ( ".$IDNota.", ".$nombre.", '');";
            mysql_query($query, $conexion) or die('Error al insertar: ' . mysql_error());
            $Insertadas = mysql_affected_rows();
            write_log("Filas Insertadas", $Insertadas);
        }

       /* write_log(mysql_sqlstate(), "sqlstate");
        write_log(mysql_error() ," mysql_error" );
        write_log(mysql_errno() ," mysql_errno" );*/
    }
}
write_log("*----------------FIN", "Fin de file.php--------------*");
mysqli_close($conexion); 
header('Location: LoadFiles.php?&idnota='.$IDNota);
?>