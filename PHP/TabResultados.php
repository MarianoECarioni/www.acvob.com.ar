<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <link rel='stylesheet' type='text/css' href='../Estilos/Tablas.css'>
  <title></title>
  </head>
  <body>
<?php
//
  $idcat    = $_GET['Categorias'];
  $idtorneo = $_GET['Torneos'];
  $semana   = $_GET['Semanas'];
  $anio     = date ("Y");
//  
      include ("conexion.php");
//                 
      $query="SELECT nombre FROM categoria WHERE id_categoria = '$idcat' ";
			$fila=mysql_query($query, $conexion) or die(mysql_error());
			$row = mysql_fetch_array($fila);
			$categoria = $row['nombre'];
			mysql_close($conexion);
//
      echo "<table text-align='left' class='resultados'>";
      echo "<tr><td colspan='9'>";
      echo "<h1 align='center'>$categoria</h1>";
      echo "</td></tr>";
      echo "</table>";
//
      include ("conexion.php");
//                 
      $query="SELECT * 
                FROM resultados 
               WHERE anio = $anio 
                 AND id_torneo = $idtorneo
                 AND id_categoria = $idcat
                 AND semana = $semana ";
			$fila=mysql_query($query, $conexion) or die(mysql_error());
//      
      echo "<table border='1' class='resultados'>";
         echo "<tr class='Cabecera'>";
             echo "<td rowspan='2'><b> Nro.</b></td>";
             echo "<td rowspan='2'><b>Fecha</b></td>";
             echo "<td rowspan='2'><b>Equipos</b></td>";
             echo "<td rowspan='2'><b>Resultado</b></td>";
             echo "<td colspan='5'><b>Resultados por Sets</b></td>";
         echo "</tr>";
         echo "<tr class='Cabecera'>";
             echo "<td class='puntos'><b>Set 1</b></td>";
             echo "<td class='puntos'><b>Set 2</b></td>";
             echo "<td class='puntos'><b>Set 3</b></td>";
             echo "<td class='puntos'><b>Set 4</b></td>";
             echo "<td class='puntos'><b>Set 5</b></td>";
         echo "</tr>";
//         
      $tipo = 1;
			while ($row=mysql_fetch_array($fila)){
					$numero = $row['numero'];	
					$fecha = $row['fecha'];
					$local = $row['local'];
					$visita = $row['visitante'];
					$PTL = $row['ptsloc'];
					$PTV = $row['ptsvis'];
					$S1L = $row['s1l'];
					$S1V = $row['s1v'];
					$S2L = $row['s2l'];
					$S2V = $row['s2v'];
					$S3L = $row['s3l'];
					$S3V = $row['s3v'];
					$S4L = $row['s4l'];
					$S4V = $row['s4v'];
					$S5L = $row['s5l'];
					$S5V = $row['s5v'];
//
          if ($tipo % 2){
             $clase = "FilaPar";          
          }                     
          else
          {
             $clase = "FilaImpar";          
          } 
//
          echo "<tr class='$clase'>";
                echo "<td>$numero</td>";       
                echo "<td>$fecha</td>";
                echo "<td>$local Vs. $visita</td>";   
                echo "<td>$PTL-$PTV</td>";     
                echo "<td>$S1L-$S1V</td>";     
                echo "<td>$S2L-$S2V</td>";
                echo "<td>$S3L-$S3V</td>";
                echo "<td>$S4L-$S4V</td>";
                echo "<td>$S5L-$S5V</td>";
          echo "</tr>";
          $tipo = $tipo + 1;
//             
          }         
      echo "</table>";
      mysql_close($conexion);
?>
  </body>
</html>

