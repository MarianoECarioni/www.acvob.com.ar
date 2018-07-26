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
    <meta name="DESCRIPTION" content="ACVOB, fixture" />
    <meta name="ABSTRACT" content="ACVOB, fixture" />
    <meta name="KEYWORDS" content="fixture" />
    <link rel='stylesheet' type='text/css' href='../Estilos/Tablas.css'>
    <title></title>
    </head>
<body>
<?php
   echo "<form method='GET' name='Seleccion' action='TabFixture.php' target='Fixture' >";
?>
  <table id="Combo">
    <tr><td> 
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
      </td></tr>
      <tr><td>
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
            <select name="Semanas" size="1" onChange="ComboBox(this);">
                <option value "#">Semana...</option> 
                <option value="1">Semana 1.</option>
                <option value="2">Semana 2.</option>
                <option value="3">Semana 3.</option>
                <option value="4">Semana 4.</option>
                <option value="5">Semana 5.</option>
                <option value="6">Semana 6.</option>
                <option value="7">Semana 7.</option>
                <option value="8">Semana 8.</option>
                <option value="9">Semana 9.</option>
                <option value="10">Semana 10.</option>
                <option value="11">Semana 11.</option>
                <option value="12">Semana 12.</option>
                <option value="13">Semana 13.</option>
                <option value="14">Semana 14.</option>
                <option value="15">Semana 15.</option>
                <option value="16">Semana 16.</option>
                <option value="17">Semana 17.</option>
                <option value="18">Semana 18.</option>
                <option value="19">Semana 19.</option>
                <option value="20">Semana 20.</option>
            </select>
            <input name="Enviar" type="submit" value="Cargar">
        </form>
    </td></tr>
        </table>
        <table border='1' class="azul">
            <tr><td>
                <iframe name="Fixture" frameborder=0 scrolling=no  width="100%" height="300px" marginwidth=0 marginheight=0 align=left allowtransparency="true" style="background-color:transparent;"> </iframe>
            </td></tr>
        </table>
</body>
</html>