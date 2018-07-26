<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="es" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="DISTRIBUTION" content="Global" />
    <meta name="ROBOTS" content="all" />
    <meta name="AUTHOR" content="Asociación Civil de Voley del Oeste Bonaerense" />
    <meta name="classification" content="deporte, voley, ascenso, polideportivo, voley maxi, voley tira" />
    <meta name="Googlebot" content="all" />
    <meta name="GENERATOR" content="Asociación Civil de Voley del Oeste Bonaerense"  />
    <meta name="SUBJECT" content="Asociación Civil de Voley del Oeste Bonaerense"  />
    <meta name="DESCRIPTION" content="ACVOB, posiciones" />
    <meta name="ABSTRACT" content="ACVOB, posiciones" />
    <meta name="KEYWORDS" content="posiciones" />
    <link rel='stylesheet' type='text/css' href='../Estilos/Tablas.css'>
    <title></title>
</head>
<body>
<?php
   echo "<form method='GET' name='Seleccion' action='TabPosiciones.php' target='Posiciones' >";
?>
      <table id="Combo">
         <tr><td align="left">
<?php    
            echo "<select name='Torneos' size='1' onChange='ComboBox(this);'>";
                echo "<option value='#'>Seleccione torneo...</option>";
//                
                include ("conexion.php");
				        $query="SELECT id_torneo, nombre FROM torneo";
				        $fila=mysql_query($query, $conexion);
//
				        while ($row=mysql_fetch_array($fila)){
					            $id_tor = $row['id_torneo'];	
					            $torneo = $row['nombre'];
					            printf("<OPTION value=\"$id_tor\">$torneo</option>");
                }            
                mysql_close($conexion);    
            echo "</select>";
?>                     
         <td>
<?php    
            echo "<select name='Categorias' size='1' onChange='ComboBox(this);'>";
                echo "<option value='#'>Seleccione categor&iacute;as...</option>";
//                
                include ("conexion.php");
				        $query="SELECT id_categoria, nombre FROM categoria";
				        $fila=mysql_query($query, $conexion);
//
				        while ($row=mysql_fetch_array($fila)){
					            $id_cat = $row['id_categoria'];	
					            $categoria = $row['nombre'];
					            printf("<OPTION value=\"$id_cat\">$categoria</option>");
                }            
                mysql_close($conexion);    
               echo "</select>";
?>               
              </td></tr>
              <tr><td colspan="2" align="left">             
               <input name="Enviar" type="submit" value="Cargar">
              </td></tr>
            </form>           
         </td></tr>
     </table>    
     <table border='1' class="azul">
         <tr><td>
             <iframe name="Posiciones"  frameborder=0 scrolling=no  width="100%" height="300px" marginwidth=0 marginheight=0 align=left allowtransparency="true" style="background-color:transparent;"> </iframe>
         </td></tr>
     </table>
</body>
</html>
 
