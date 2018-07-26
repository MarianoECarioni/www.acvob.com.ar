<html>
<head>
    <title></title>
      <link rel='stylesheet' type='text/css' href='Notas.css'    />
    <script type="text/javascript" language="javascript" src="funciones.js"></script>
      <script type="text/javascript" src="Notas.js"></script>
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
	<form id="form1" name="form1" method="GET" action="frmCargaNotaSecun.php" marginWidth=0 marginHeight=0 >
		<table id="nota_secundaria_1" border="0">
			<tr>
				<td colspan="2"> 
					<h2><input id="InputH2" name='ipie' type='text' maxlength='30' value=<?php echo $PIE; ?> /></h2>                           
					<h1><input id="InputH1" class="Fields" name='ititulo' type='text' maxlength='30' value="<?php echo $TITULO; ?>" /></h1>
				</td>
			</tr>
			<tr>
				<td>
					<p><textarea  name='idetallecorto'  cols="30" rows="10" type='text' size='20' maxlength='300' /><?php echo $DETALLE_CORTO; ?> </p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
				</td>
			</tr>
			<tr>
				<td>
					<input name="Guardar" type="submit" value="Guardar"  onclick="javascript:Modif_Nota(form1)" />
				</td>
				<td>
				</td>
			</tr>                           
		</table>          
	</form>
</body>
</html>