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
      echo "<table text-align='left'>";
      echo "<tr><td colspan='5'>";
      echo "<h1 align='center'>$categoria</h1>";
      echo "</td></tr>";
      echo "</table>";
//                 
      include ("conexion.php");
//                 
      $query="SELECT numero, fecha, hora, sede, local, visitante 
                FROM fixture 
               WHERE anio = $anio 
                 AND id_torneo = $idtorneo
                 AND id_categoria = $idcat
                 AND semana = $semana ";
			$fila=mysql_query($query, $conexion) or die(mysql_error());
//      
      echo "<table border='1'>";
           echo "<tr class='Cabecera'>";
           echo "<td  class='CeldaEncab'><b> Nro.</b></td>";
           echo "<td  class='CeldaEncab'><b>Fecha</b></td>";
           echo "<td  class='CeldaEncab'><b>Hora</b></td>";
           echo "<td  class='CeldaEncab'><b>Sede</b></td>";
           echo "<td  class='CeldaEncab'><b>Equipos</b></td>";
           echo "</tr>";
//      
      $tipo = 1;
			while ($row=mysql_fetch_array($fila)){
					$numero = $row['numero'];	
					$fecha = $row['fecha'];
					$hora = $row['hora'];
					$sede = $row['sede'];
					$local = $row['local'];
					$visita = $row['visitante'];
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
               echo "<td>$hora</td>";
               echo "<td>$sede</td>";
               echo "<td>$local Vs. $visita</td>";
          echo "</tr>";
          $tipo = $tipo + 1;
//           
          }
      echo "</table>";
      mysql_close($conexion);
?>      
  </body>
</html>
