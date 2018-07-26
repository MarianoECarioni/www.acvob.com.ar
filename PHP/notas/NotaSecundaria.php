<html>
<head>
    <title></title>
      <link rel='stylesheet' type='text/css' href='Notas.css'    />
    <script type="text/javascript" language="javascript" src="funciones.js"></script>
</head>
<body>
<?php
     include ("conexion.php");
     $query = "SELECT * FROM notas WHERE ID_NOTA = 2";
     $resultado=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );
		        
     while ($fila = mysql_fetch_assoc($resultado)){
          $TITULO =  $fila['TITULO'];	
          $DETALLE_CORTO = $fila['DETALLE_CORTO'];
          $IMAGEN =  $fila['LINK_IMAGEN'];
          $PIE = $fila['PIE'];
     }            
     mysql_close($conexion);    
?>
    <table id="nota_secundaria_1">
        <tr>
            <td colspan="2"> 
                <h2><?php echo $PIE ?></h2>                           
                <h1><?php echo $TITULO; ?></h1>
            </td>
        </tr>
        <tr>
            <td>
                <p><?php echo $DETALLE_CORTO; ?></p>
	        </td>
        </tr>
        <tr>
            <td colspan="2">
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
            </td>
        </tr>                           
    </table>           

<!--<table  id="nota_secundaria" >
     <tr  class="foto" <a href="#" onclick="afoto('<?php echo $IMAGEN; ?>','Nota Principal');return false" >  
     <td></td>
  </tr>
  <tr  class="piefoto">
      <td><p><?php echo $PIE ?></p></td>                            
  </tr>
  <tr  class='pie'>
      <td>
          <h1><?php echo $TITULO; ?></h1>
          <p><?php echo $DETALLE_CORTO; ?></p>
      </td>
  </tr>
</table> -->
 

</body>
</html>