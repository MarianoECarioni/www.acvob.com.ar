<?php
$siglo=$_GET['anios'];
$torn=$_GET['torneos'];
$cat=$_GET['categorias'];
//
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
	     }
     }	
?>
<?php
    session_start(); // inicializo la sesion de php
?>

<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" ></link>
        <link rel="stylesheet" type="text/css" href="../../Estilos/Posiciones.css" ></link>
        <script type="text/javascript" src="../../PHP/Scripts/Posiciones.js"></script>
    </head>
    <body>
<!-- ------------------------------------------------------------------------------------------------------------------->
       <div class="tablas">
            <br>
            <center>
                <table border="0">
                    <tr>
                        <td class="bordes">
                        </td>
                        <td class="centro">
                            <?php
                            //
                             echo "<form action='' method='post' class='formTablas' id='cabecera' >";
                                echo "<input  name='#' type='text' disabled='disabled' value='Equipo'    size='20' maxlength='30' readonly />";
                                echo "<input  name='#' type='text' disabled='disabled' value='P.J.'      size='4'  maxlength='4'  readonly />";
                                echo "<input  name='#' type='text' disabled='disabled' value='P.G.'      size='4'  maxlength='4'  readonly />";
                                echo "<input  name='#' type='text' disabled='disabled' value='P.P.'      size='4'  maxlength='4'  readonly />";
                                echo "<input  name='#' type='text' disabled='disabled' value='Gana P.'   size='7'  maxlength='2'  readonly />";
                                echo "<input  name='#' type='text' disabled='disabled' value='Pierde P.' size='9'  maxlength='2'  readonly />";
                                echo "<input  name='#' type='text' disabled='disabled' value='S.G.'      size='4'  maxlength='4'  readonly />"; 
                                echo "<input  name='#' type='text' disabled='disabled' value='S.P.'      size='4'  maxlength='4'  readonly />";
                                echo "<input  name='#' type='text' disabled='disabled' value='D.S.'      size='5'  maxlength='5'  readonly />";  
                                echo "<input  name='#' type='text' disabled='disabled' value='Puntos'    size='4'  maxlength='4'  readonly />"; 
                                echo "<input  name='#' type='text' disabled='disabled' value='D.T.'      size='7'  maxlength='7'  readonly />"; 
                            echo "</form>";
                            //
                            include("../../PHP/conexion.php");
                            $query="SELECT * 
                                      FROM posiciones                          
                                                             WHERE anio = '$siglo'                                                   
                                                               AND id_torneo = '$torn'                                            
                                                               AND id_categoria = '$cat'
                                     ORDER BY puntos DESC, DSet DESC, SGanado DESC, DTantos DESC";
                            //				   
                             echo "<form action='frmPosiciones.php' method='GET' class='formTablas' id='consulta' >";
                             $fila=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );
                            //
                             $reg = 1;
                             while($row=mysql_fetch_array($fila)){
                                $equipo = $row['equipo']; 
                                $PJugado = $row['PJugado'];	
                                $PGanado = $row['PGanado'];
                                $PPerdido = $row['PPerdido'];	
                                $GanaP = $row['GanaP'];	
                                $PierdeP = $row['PierdeP'];	
                                $SGanado = $row['SGanado'];	
                                $SPerdido = $row['SPerdido'];
                                $DSet = $row['DSet'];	
                                $puntos = $row['puntos'];	
                                $DTantos = $row['DTantos'];	      	
                            //
                                echo "<input name='iequipo$reg' type='text' size='20' disabled='disabled' maxlength='30' value='$equipo' readonly />";
                                echo "<input name='iPJugado$reg' type='text' size='4' maxlength='4' value='$PJugado' />";
                                echo "<input name='iPGanado$reg' type='text' size='4' maxlength='4' value='$PGanado' />";
                                echo "<input name='iPPerdido$reg' type='text' size='4' maxlength='4' value='$PPerdido' />";
                                echo "<input name='iGanaP$reg' type='text' size='7' maxlength='2' value='$GanaP' />";
                                echo "<input name='iPierdeP$reg' type='text' size='9' maxlength='2' value='$PierdeP' />";
                                echo "<input name='iSGanado$reg' type='text' size='4' maxlength='4' value='$SGanado' />";
                                echo "<input name='iSPerdido$reg' type='text' size='4' maxlength='4' value='$SPerdido' />";
                                echo "<input name='iDSet$reg' type='text' size='5' maxlength='5' value='$DSet' />";
                                echo "<input name='ipuntos$reg' type='text' size='4' maxlength='4' value='$puntos' />";
                                echo "<input name='iDTantos$reg' type='text' size='7' maxlength='7' value='$DTantos' />";
                            //  delete         
                                echo "<input name='borarr' type='submit' value='-' onclick='javascript:Borra_Posiciones(consulta, $reg)'/>";
                            //  update    
                                echo "<input name='modificar$reg' type='submit' value='#' onclick='javascript:Modificar_Posiciones(consulta, $reg)'/>";
                                echo "<br/>";
                                $reg = $reg + 1;
                             }
                             //  campos ocultos para paso de variables.    
                                echo "<input name='anios' type='hidden' value='$siglo' />";
                                echo "<input name='torneos' type='hidden' value='$torn' />";
                                echo "<input name='categorias' type='hidden' value='$cat' />";
                             mysql_close($conexion);
                            // 
                             echo "</form>";
                             //
                             echo "<form action='frmPosiciones.php' method='GET' class='formTablas' id='filnueva'>";
                                echo "<input name='equipoi' type='text' size='20' maxlength='30' />";
                                echo "<input name='PJugadoi' type='text' size='4' maxlength='4'  />";
                                echo "<input name='PGanadoi' type='text' size='4' maxlength='4'  />";
                                echo "<input name='PPerdidoi' type='text' size='4' maxlength='4' />";
                                echo "<input name='GanaPi' type='text' size='7' maxlength='2' />";
                                echo "<input name='PierdePi' type='text' size='9' maxlength='2' />";
                                echo "<input name='SGanadoi' type='text' size='4' maxlength='4' />";
                                echo "<input name='SPerdidoi' type='text' size='4' maxlength='4' />";
                                echo "<input name='DSeti' type='text' size='5' maxlength='5' />";
                                echo "<input name='puntosi' type='text' size='4' maxlength='4' />";
                                echo "<input name='DTantosi' type='text' size='7' maxlength='7' />";
                            //  campos ocultos para paso de variables.    
                                echo "<input name='anios' type='hidden' value='$siglo' />";
                                echo "<input name='torneos' type='hidden' value='$torn' />";
                                echo "<input name='categorias' type='hidden' value='$cat' />";
                            //  inset             
                                echo "<input name='insertar' type='submit' value='+' onclick='javascript:Inserta_Posiciones(filnueva)'/>"; 
                            echo "</form>";
                            ?>
                        </td>    
                        <td class="bordes">
                        </td>
                    </tr>
                </table>    
            </center>     
        </div> 
    </body>
</html>