<?php
     include ("conexion.php");
     $query = "SELECT * FROM notas WHERE ID_NOTA = 1";
     $resultado=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );
		        
     while ($fila = mysql_fetch_assoc($resultado)){
          $TITULO =  $fila['TITULO'];	
          $DETALLE_CORTO = $fila['DETALLE_CORTO'];
          $IMAGEN =  $fila['LINK_IMAGEN'];
          $PIE = $fila['PIE'];
     }            
     mysql_close($conexion);    
?>
<!--**************************** DESDE ACA PAGINA HTML **************************************-->
<html>
<head>
    <title></title>
      <link rel='stylesheet' type='text/css' href='NotasCarga.css'    />
    <script type="text/javascript" language="javascript" src="funciones.js"></script>
      <script type="text/javascript" src="Notas.js"></script>
</head>
<body>
<form id="form1" name="form1" method="GET" action="frmCargaNotaPrincipal.php" >
    <table  id="nota_principal" background=<?php echo $IMAGEN; ?>  border="0">
      <tr  class="foto" <a href="#" onclick="afoto('<?php echo $IMAGEN; ?>','Nota Principal');return false" >  
        <td><input name='itiponota' type='text' value='1' style='visibility: hidden' width='0pt' height='0pt'/></td>
      </tr>
      <tr>
        <td>
            <form enctype="multipart/form-data" action="uploader.php" method="POST">
                <input name="uploadedfile" type="file" />
                <input type="submit" value="Subir archivo" />
            </form> 
        </td> 
      </tr>
      <tr class="piefoto">
        <td width='50%'>
            <input id="texPie" name='ipie' type='text' maxlength='30' value='<?php echo $PIE; ?>' />
        </td>
        <td width='30%'>
            <input name="Guardar" type="submit" value="Guardar"  class="Guardar" onclick="javascript:Modif_Nota(form1)" />
        </td>
      </tr>
      <tr  class='pie'>
        <td colspan='2'>
          <h1><input id="titulo" name='ititulo' type='text' maxlength='30' value="<?php echo $TITULO; ?>" /></h1>
          <p><textarea id="detalleCorto" name='idetallecorto'  cols="30" rows="10" type='text' size='20' maxlength='300' /><?php echo $DETALLE_CORTO; ?> </textarea></p>
        </td>
      </tr>
      <tr class="imagen">
        <td >
          <input id="imagen" name='imagen' type='text' maxlength='300' value="<?php echo $IMAGEN; ?>" />
        </td>
      </tr>
    </table>
</form>
</body>
</html>
