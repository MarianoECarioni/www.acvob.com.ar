<?php
print_r($_GET);
//
//echo ("entro");
$torneo=trim($_GET['Itorneo']);
$cat=trim($_GET['Icategoria']);
$anio=trim($_GET['Ianio']);
$equipo=trim($_GET['Iequipo']);
$PJ=trim($_GET['IPJugadoi']);
$PG=trim($_GET['IPGanadoi']);
$PP=trim($_GET['IPPerdidoi']);
$GPun=trim($_GET['IGanaPi']);
$PPun=trim($_GET['IPierdePi']);
$SG=trim($_GET['ISGanadoi']);
$SP=trim($_GET['ISPerdidoi']);
$DS=trim($_GET['IDSeti']);
$puntos=trim($_GET['Ipuntosi']);
$DT=trim($_GET['IDTantosi']);
//
// Se realiza la conexion a la base de datos.
include ("../../PHP/conexion.php");
// Actualizo el campo recibido por GET con la informacion que tambien hemos recibido
mysql_query("UPDATE posiciones SET PJugado='$PJ',   
                                   PGanado='$PG',
                                   PPerdido='$PP',
                                   GanaP='$GPun',
                                   PierdeP='$PPun',
                                   SGanado='$SG',
                                   SPerdido='$SP',
                                   DSet='$DS',
                                   puntos='$puntos',
                                   DTantos='$DT'
              WHERE anio='$anio'
                AND id_torneo='$torneo'
                AND id_categoria='$cat'
                AND equipo='$equipo'", $conexion ) or die(mysql_error());
//                
echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
mysql_close($conexion);
//
$respuesta = "Fila modificada";
echo rawurlencode($respuesta);
?>