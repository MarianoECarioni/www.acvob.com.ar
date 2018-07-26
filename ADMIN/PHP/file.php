<?php
$idnota = $_GET['idnotaImg'];   
$cantidad = $_GET['Cantidad'];
include("Funciones.php");
//echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
//echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
//echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
//echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
/*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/

$Parametros = explode("-", $idnota);
$IDNota = $Parametros[0];

$array = array();
for ($i = 0; $i < $cantidad; $i++)
{
    $array[$i] = 'No';
}


for ($i = 0; $i < $cantidad; $i++)
{
    $archivo = 'archivo'.$i;
    
    $CarpetaTemporal = $_FILES[$archivo]['tmp_name'];
    echo $CarpetaTemporal.'<br>';
    $ImagenTemporal = $CarpetaTemporal.'\\'.$_FILES[$archivo]['name'];
    echo $ImagenTemporal.'<br>';
    
    
    if ($_FILES[$archivo]["error"] > 0)
    {
        echo "Error: " . $_FILES[$archivo]['error'] . "<br>";
    }
    else
    {
        redimensionar_jpeg($CarpetaTemporal,$CarpetaTemporal,640,480,70); 
        move_uploaded_file($_FILES[$archivo]['tmp_name'], "../../Imagenes/" . $_FILES[$archivo]['name']);
        $array[$i] = $_FILES[$archivo]['name'];
    }        
}

include ("../../PHP/conexion.php");
$path = '../Imagenes/';

for ($i = 0; $i < $cantidad; $i++)
{
    if ($array[$i] != 'No')
    {
        $j = $i + 1;
        
        $query = "SELECT * FROM img_notas WHERE id_nota='$IDNota' AND id_imagen= ".$Parametros[$j];
        $resultado = mysql_query($query, $conexion) or die('Error en  select: ' . mysql_error());;
        $número_filas = mysql_num_rows($resultado);
        
        if ($número_filas >0 ){
            $query = "UPDATE img_notas SET url_img = '".$path.$array[$i]."' WHERE id_nota='$IDNota' AND id_imagen= ".$Parametros[$j];
            mysql_query($query, $conexion) or die('Error en  update: ' . mysql_error());;
            $Actualizado = mysql_affected_rows();
            write_log($Actualizado, "Filas Actualizadas" );
        }
        else {
            $nombre = "'../Imagenes/".$_FILES['archivo'.$i]['name']."'";
            $query = "INSERT INTO img_notas (id_nota, url_img, detalle) VALUES ( ".$IDNota.", ".$nombre.", '');";
            mysql_query($query, $conexion) or die('Error al insertar: ' . mysql_error());
            $Insertadas = mysql_affected_rows();
            write_log($Insertadas, "Filas Insertadas" );
        }

       /* write_log(mysql_sqlstate(), "sqlstate");
        write_log(mysql_error() ," mysql_error" );
        write_log(mysql_errno() ," mysql_errno" );*/
    }
}
mysqli_close($conexion); 
?>