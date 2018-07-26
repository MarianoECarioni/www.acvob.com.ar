<?php
$siglo=$_GET['anios'];
$torn=$_GET['torneos'];
$cat=$_GET['categorias'];
$sem=$_GET['semanas'];
if (! is_numeric($siglo) or $siglo == 0){
	echo "ERROR - debe seleccionar un año";
	$siglo=0;}
else{
	if (! is_numeric($torn) or $torn == 0){
		echo "ERROR - debe seleccionar un torneo";
		$torn=0;}
	else{
		if (! is_numeric($cat) or $cat == 0){
			echo "ERROR - debe seleccionar una categor&iacute;a";
			$cat=0;}	
		else{
			if (! is_numeric($sem) or $sem == 0){
				echo "ERROR - debe seleccionar una semana";
				$sem=0;}
		    }
	     }
     }	
?>
<?php
session_start(); // inicializo la sesion de php
include("../../PHP/conexion.php");
$query="select *
          from resultados                          
         where anio = '$siglo'                                                   
           and id_torneo = '$torn'                                            
           and id_categoria = '$cat'                                        
           and semana = '$sem'";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../../Estilos/Posiciones.css" >
        <script type="text/javascript" src="../../PHP/Scripts/Resultados.js"></script>
    </head>
<body>
<!-- ---------------------------------------------------------------------------------------->
<div class="tablas">
            <br>
            <center>
                <table border="0">
                    <tr>
                        <td class="bordes">
                        </td>
                        <td class="centro">        
                            <?php
                             echo "<form action='' method='post' class='formTablas' id='cabecera'>";
                             echo "<input name='numero'    type='text' disabled='disabled' value='Número'    size='5'  maxlength='11'  readonly />";
                             echo "<input name='Local'     type='text' disabled='disabled' value='Local'     size='10' maxlength='30' readonly />";
                             echo "<input name='Visitante' type='text' disabled='disabled' value='Visitante' size='10' maxlength='30' readonly />";
                             echo "<input name='Fecha'     type='text' disabled='disabled' value='Fecha'     size='8'  maxlength='10'  readonly />";
                             echo "<input name='S1L'       type='text' disabled='disabled' value='S1L'       size='2'  maxlength='2'   readonly />";
                             echo "<input name='S1V'       type='text' disabled='disabled' value='S1V'       size='2'  maxlength='2'   readonly />";
                             echo "<input name='S2L'       type='text' disabled='disabled' value='S2L'       size='2'  maxlength='2'   readonly />";
                             echo "<input name='S2V'       type='text' disabled='disabled' value='S2V'       size='2'  maxlength='2'   readonly />";
                             echo "<input name='S3L'       type='text' disabled='disabled' value='S3L'       size='2'  maxlength='2'   readonly />";
                             echo "<input name='S3V'       type='text' disabled='disabled' value='S3V'       size='2'  maxlength='2'   readonly />";
                             echo "<input name='S4L'       type='text' disabled='disabled' value='S4L'       size='2'  maxlength='2'   readonly />";
                             echo "<input name='S4V'       type='text' disabled='disabled' value='S4V'       size='2'  maxlength='2'   readonly />";
                             echo "<input name='S5L'       type='text' disabled='disabled' value='S5L'       size='2'  maxlength='2'   readonly />";
                             echo "<input name='S5V'       type='text' disabled='disabled' value='S5V'       size='2'  maxlength='2'   readonly />";
                            echo "</form>";
                            //
                             echo "<form action='frmResultados.php' method='GET' id='consulta'>";
                             $fila=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );;
                            //
                             $reg = 1;
                             while($row=mysql_fetch_array($fila)){
                                    $numero = $row['numero'];	
                                    $local  = $row['local'];
                                    $visita = $row['visitante'];
                                    $fecha  = $row['fecha'];	
                                    $S1L    = $row['s1l'];
                                    $S1V    = $row['s1v'];
                                    $S2L    = $row['s2l'];
                                    $S2V    = $row['s2v'];
                                    $S3L    = $row['s3l'];
                                    $S3V    = $row['s3v'];
                                    $S4L    = $row['s4l'];
                                    $S4V    = $row['s4v'];
                                    $S5L    = $row['s5l'];
                                    $S5V    = $row['s5v'];
                            //
                             echo "<input name='numero$reg'    type='text' size='5' maxlength='11'  value='$numero' readonly />";
                             echo "<input name='Local$reg'     type='text' size='10 maxlength='30'  value='$local'  readonly />";
                             echo "<input name='Visitante$reg' type='text' size='10 maxlength='30'  value='$visita' readonly />";
                             echo "<input name='Fecha$reg'     type='text' size='8' maxlength='10'  value='$fecha'  readonly />";
                             echo "<input name='S1L$reg'       type='text' size='2' maxlength='2'   value='$S1L'    readonly />";
                             echo "<input name='S1V$reg'       type='text' size='2' maxlength='2'   value='$S1V'    readonly />";
                             echo "<input name='S2L$reg'       type='text' size='2' maxlength='2'   value='$S2L'    readonly />";
                             echo "<input name='S2V$reg'       type='text' size='2' maxlength='2'   value='$S2V'    readonly />";
                             echo "<input name='S3L$reg'       type='text' size='2' maxlength='2'   value='$S3L'    readonly />";
                             echo "<input name='S3V$reg'       type='text' size='2' maxlength='2'   value='$S3V'    readonly />";
                             echo "<input name='S4L$reg'       type='text' size='2' maxlength='2'   value='$S4L'    readonly />";
                             echo "<input name='S4V$reg'       type='text' size='2' maxlength='2'   value='$S4V'    readonly />";
                             echo "<input name='S5L$reg'       type='text' size='2' maxlength='2'   value='$S5L'    readonly />";
                             echo "<input name='S5V$reg'       type='text' size='2' maxlength='2'   value='$S5V'    readonly />";
                             //Borra fila
                             echo "<input name='borarr'    type='submit' value='(-)' onclick='javascript:Borra_Resultado(consulta, $reg)'/>";
                             echo "<br/>";
                             $reg = $reg + 1;
                             }
                             echo "<input name='anios' type='hidden' value='$siglo' />";
                             echo "<input name='torneos' type='hidden' value='$torn' />";
                             echo "<input name='categorias' type='hidden' value='$cat' />";  
                             echo "<input name='semanas' type='hidden' value='$sem' />";  
                             echo "</form>";
                             //
                            echo "<form action='frmResultados.php' method='GET' id='filnueva'>";
                             echo "<input name='numero-i'    type='text' size='5' maxlength='11' />";
                             echo "<input name='Local-i'     type='text' size='10 maxlength='30' />";
                             echo "<input name='Visitante-i' type='text' size='10 maxlength='30' />";
                             echo "<input name='Fecha-i'     type='text' size='8' maxlength='10' />";
                             echo "<input name='S1L-i'       type='text' size='2' maxlength='2'  />";
                             echo "<input name='S1V-i'       type='text' size='2' maxlength='2'  />";
                             echo "<input name='S2L-i'       type='text' size='2' maxlength='2'  />";
                             echo "<input name='S2V-i'       type='text' size='2' maxlength='2'  />";
                             echo "<input name='S3L-i'       type='text' size='2' maxlength='2'  />";
                             echo "<input name='S3V-i'       type='text' size='2' maxlength='2'  />";
                             echo "<input name='S4L-i'       type='text' size='2' maxlength='2'  />";
                             echo "<input name='S4V-i'       type='text' size='2' maxlength='2'  />";
                             echo "<input name='S5L-i'       type='text' size='2' maxlength='2'  />";
                             echo "<input name='S5V-i'       type='text' size='2' maxlength='2'  />";
                            //Ocultos para traspaso de datos.
                             echo "<input name='anios'       type='hidden' value='$siglo' />";
                             echo "<input name='torneos'     type='hidden' value='$torn' />";
                             echo "<input name='categorias'  type='hidden' value='$cat' />";  
                             echo "<input name='semanas'     type='hidden' value='$sem' />";
                            //Envío del formulario. 
                             echo "<input name='insertar'    type='submit' value='(+)' onclick='javascript:Inserta_Resultado(filnueva)'/>";
                            //
                             echo "</form>";
                            ?>
                        </td>
                    </tr>
                </table>
            </center>
            <br>
        </div>
    </body>
</html>