<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <link rel='stylesheet' type='text/css' href='../Estilos/Tablas.css'>
  <title></title>
  </head>
  <body class="normal">
<?php
//
  $idcat    = $_GET['Categorias'];
  $idtorneo = $_GET['Torneos'];
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
      echo "<table align='left'>";
      echo "<tr><td colspan='11'>";
      echo "<h1 align='center'>$categoria</h1>";
      echo "</td></tr>";
//      echo "</table>";
//                 
      include ("conexion.php");
      $query="SELECT * 
                FROM posiciones 
               WHERE anio = $anio 
                 AND id_torneo = $idtorneo
                 AND id_categoria = $idcat
               ORDER BY puntos DESC, DSet DESC, SGanado DESC, DTantos DESC";
			$fila=mysql_query($query, $conexion) or die(mysql_error());      
//                 
//     echo "<table>";
         echo "<tr class='Cabecera'>";
             echo "<td rowspan ='2' class='CeldaEncab'>EQUIPO</td>";
             echo "<td rowspan ='2' class='CeldaEncab'>P.J.</td>";
             echo "<td rowspan ='2' class='CeldaEncab'>P.G.</td>";
             echo "<td rowspan ='2' class='CeldaEncab'>P.P.</td>";
             echo "<td rowspan ='2' class='CeldaEncab'>G.P.</td>";
             echo "<td rowspan ='2' class='CeldaEncab'>Pierde.P.</td>";
             echo "<td rowspan ='2' class='CeldaEncab'>S.G.</td>";
             echo "<td rowspan ='2' class='CeldaEncab'>S.P.</td>";
             echo "<td rowspan ='2' class='CeldaEncab'>D.S.</td>";
             echo "<td rowspan ='2' class='CeldaEncab'>PUNTOS</td>";
             echo "<td rowspan ='2' class='CeldaEncab'>D.T.</td>";
         echo "</tr>";                            
         echo "<tr></tr>";
//
      $tipo = 1;
//      
			while ($row=mysql_fetch_array($fila)){
					$equipo = $row['equipo'];	
					$PJ = $row['PJugado'];
					$PG = $row['PGanado'];
					$PP = $row['PPerdido'];
					$GP = $row['GanaP'];
					$PiP = $row['PierdeP'];
					$SG = $row['SGanado'];
					$SP = $row['SPerdido'];
					$DS = $row['DSet'];
					$Puntos = $row['puntos'];                              					
					$DT = $row['DTantos'];					
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
             echo "<td>$equipo</td>";
             echo "<td>$PJ</td>";
             echo "<td>$PG</td>";
             echo "<td>$PP</td>";
             echo "<td>$GP</td>";
             echo "<td>$PiP</td>";
             echo "<td>$SG</td>";
             echo "<td>$SP</td>";
             echo "<td>$DS</td>";
             echo "<td><b>$Puntos</b></td>";
             echo "<td>$DT</td>";
         echo "</tr>";
         $tipo = $tipo + 1;
         }
      echo "</table>";
?>      
</body>
</html>      