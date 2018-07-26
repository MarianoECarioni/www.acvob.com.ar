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
$query="select c.id_fixture, c.numero, c.local, c.visitante, c.sede, c.fecha, c.hora 
          from torneo a, categoria b, fixture c                          
				 where c.anio = '$siglo'                                                   
				   and c.id_torneo = a.id_torneo                                          
				   and c.id_torneo = '$torn'                                            
				   and c.id_categoria = '$cat'                                        
					 and c.id_categoria = b.id_categoria                                    
					 and c.semana = '$sem'";
?>

<!DOCTYPE >
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../../Estilos/Posiciones.css" >
        <script type="text/javascript" src="../../PHP/Scripts/BorrarFixture.js"></script>
        <script type="text/javascript" src="../../PHP/Scripts/InsertaFixture.js"></script>
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
                                echo "<form action='' method='post' id='cabecera'>";
                                echo "<input name='numero' type='text' disabled='disabled' value='Número' size='11' maxlength='11' readonly />";
                                echo "<input name='Local' type='text' disabled='disabled' value='Local' size='30' maxlength='30' readonly />";
                                echo "<input name='Visitante' type='text' disabled='disabled' value='Visitante' size='30' maxlength='30' readonly />";
                                echo "<input name='Sede' type='text' disabled='disabled' value='Sede' size='30' maxlength='30' readonly />";
                                echo "<input name='Fecha' type='text' disabled='disabled' value='Fecha' size='10' maxlength='10' readonly />";
                                echo "<input name='Hora' type='text' disabled='disabled' value='Hora' size='8' maxlength='8' readonly />";
                               echo "</form>";
                               //
                                echo "<form action='frmFixture.php' method='GET' id='consulta'>";
                                $fila=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );;
                               //
                                while($row=mysql_fetch_array($fila)){
                                       $idfixture = $row['id_fixture']; 
                                       $numero = $row['numero'];	
                                       $local = $row['local'];
                                       $visita = $row['visitante'];	
                                       $sede = $row['sede'];	
                                       $fecha = $row['fecha'];	
                                       $hora = $row['hora'];	
                               //
                                echo "<input name='numero' type='text' size='11' maxlength='11' value='$numero' readonly />";
                                echo "<input name='Local' type='text' size='30' maxlength='30' value='$local' readonly />";
                                echo "<input name='Visitante' type='text' size='30' maxlength='30' value='$visita' readonly />";
                                echo "<input name='Sede' type='text' size='30' maxlength='30' value='$sede' readonly />";
                                echo "<input name='Fecha' type='text' size='10' maxlength='10' value='$fecha' readonly />";
                                echo "<input name='Hora' type='text' size='5' maxlength='5' value='$hora' readonly />";
                                echo "<input name='borarr' type='submit' value='-' onclick='javascript:Borra_Fixture($idfixture)'/>";
                                echo "<br/>";
                                }
                                echo "<input name='anios' type='hidden' value='$siglo' />";
                                echo "<input name='torneos' type='hidden' value='$torn' />";
                                echo "<input name='categorias' type='hidden' value='$cat' />";  
                                echo "<input name='semanas' type='hidden' value='$sem' />";  
                                echo "</form>";
                                //
                                echo "<form action='frmFixture.php' method='GET' id='filnueva'>";
                                echo "<input name='numero-i' type='text' size='11' maxlength='11'  />";
                                echo "<input name='Local-i' type='text' size='30' maxlength='30'  />";
                                echo "<input name='Visitante-i' type='text' size='30' maxlength='30' />";
                                echo "<input name='Sede-i' type='text' size='30' maxlength='30'  />";
                                echo "<input name='Fecha-i' type='text' size='10' maxlength='10'  />";
                                echo "<input name='Hora-i' type='text' size='5' maxlength='5'  />";
                                echo "<input name='anios' type='hidden' value='$siglo' />";
                                echo "<input name='torneos' type='hidden' value='$torn' />";
                                echo "<input name='categorias' type='hidden' value='$cat' />";  
                                echo "<input name='semanas' type='hidden' value='$sem' />";
                                echo "<input name='insertar' type='submit' value='+' onclick='javascript:Inserta_Fixture(filnueva)'/>";
                               //
                                echo "</form>";
                            ?>
                        </td>
                    </tr>
                </table>
            </center>    
        </div>
    </body>
</html>