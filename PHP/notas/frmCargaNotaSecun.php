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
<!--**************************** DESDE ACA PAGINA HTML **************************************-->
<html>
    <head>
        <title></title>
            <link rel='stylesheet' type='text/css' href='NotasCarga.css' />
            <script type="text/javascript" language="javascript" src="funciones.js"></script>
            <script type="text/javascript" src="Notas.js"></script>
    </head>
    <body>
	<form id="form2" name="form2" method="GET" action="frmCargaNotaSecun.php" >
            <table id="nota_secundaria_1">
                <tr>
                    <td colspan='2'> 
                        <input id='InputH2' name='ipie' type='text' maxlength='30' value="<?php echo $PIE; ?>" />
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                         <input id='InputH1' name='ititulo' type='text' maxlength='30' value="<?php echo $TITULO; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea  id='TextP' name='idetallecorto'  cols="50" rows="10" type='text' size='50pt' maxlength='500' ><?php echo $DETALLE_CORTO; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="Guardar" type="submit" value="Guardar"  class="Guardar" onclick="javascript:Modif_Nota(form2)" />
                    </td>
                    <td>
                        <input name='itiponota' type='text' value='2' style='visibility: hidden' width='0pt' height='0pt'/>
                        <input name='imagen' type='text' value='' style='visibility: hidden' width='0pt' height='0pt'/>
                    </td>
                 </tr>                           
            </table>          
	</form>
    </body>
</html>