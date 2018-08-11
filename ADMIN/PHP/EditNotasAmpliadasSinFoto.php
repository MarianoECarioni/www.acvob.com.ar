<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel='stylesheet' type='text/css' href='../../Estilos/NotasCarga.css'    />
    <link rel='stylesheet' type='text/css' href='../../Estilos/Notas.css'    />
    <link rel='stylesheet' type='text/css' href='../../Estilos/estilos3.css'    />
    <script type="text/javascript" language="javascript" src="../../Scripts/funciones.js"></script>
    <script type="text/javascript" language="javascript" src="../../Scripts/Notas.js"></script>
</head>
<body class="body1">
<?php
    $IDNota = $_GET['idnota'];  
    include ("../../PHP/conexion.php");
    include ("Funciones.php");
    $query = "SELECT * FROM notas WHERE ID_NOTA =".$IDNota;
    $resultado=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );
    echo $resultado;
		        
    while ($fila = mysql_fetch_assoc($resultado)){
         $TITULO =  $fila['TITULO'];	
         $DETALLE_CORTO = $fila['DETALLE_CORTO'];
         $IMAGEN =  $fila['LINK_IMAGEN'];
         $PIE = $fila['PIE'];
         $DETALLE_LARGO = $fila['DETALLE_LARGO'];
    }            
     mysql_close($conexion);    
    $DETALLE_CORTO_R = reemplazar( $DETALLE_CORTO, "INV");
    $DETALLE_LARGO_R = reemplazar( $DETALLE_LARGO, "INV");

?>
    <table class="TPrincipal"  border="0" align="center">
        <!--*** CABECERA DE PAGINA ***-->
        <tr class="LinEncab"  >
            <td class="ColEncab" colspan="2">
                 <img src="../../Imagenes/cabecera.png" width="95%" onclick="abrir('../index.php')" >
            </td>

        </tr>
        <form id="form1" name="form1" method="GET" action="EditNotasAmpliadasSinFoto.php" >
            <tr>
            <td align="center">
                <table id="NotaAmpliadaSF" border="0">
                    <tr>
                        <td>
                            <input   style="display:none;" name="idnota" value='<?php echo $IDNota; ?>' /> 
                            <input   style="display:none;" name="imagen" value='<?php echo $IMAGEN; ?>' /> 
                        </td>
                    </tr>
                    <tr>
                        <td align='center'> 
                            <input id="texPie" name='ipie' type='text' maxlength='30' value='<?php echo $PIE; ?>' />
                            <!--<h2><?php //echo $PIE ?></h2>                           -->
                            <!--<h1><?php //echo $TITULO; ?></h1> -->
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input id="titulo" name='ititulo' type='text' maxlength='20' value="<?php echo $TITULO; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="DetalleCorto" valign="center">
                            <p><textarea id="detalleCortoSinFoto" name='idetallecorto'  cols="30" rows="10" type='text' size='20' maxlength='295' /><?php echo $DETALLE_CORTO_R; ?> </textarea></p>
                            <!--<p><?php //echo $DETALLE_CORTO; ?></p> -->
                        </td>
                    </tr>
                    <tr>
                        <td >
                        </td>
                    </tr>
                    <tr>
                        <td class="DetalleLargo">
                                <p><textarea id="detalleLargo" name='idetallelargo'  cols="50" rows="50" type='text' size='50' maxlength='60000' /><?php echo $DETALLE_LARGO_R; ?> </textarea></p>
                            <!--<p><?php //echo $DETALLE_LARGO; ?></p> -->
                        </td>
                    </tr>         
                </table>        
            </td>
        </tr>
        <tr>
            <td align="center" >
                <input name="Guardar" type="submit" value="Guardar"  class="boton" onclick="javascript:Modif_Nota(form1)" />
            </td>
        </tr>
    </form>    
            <tr>
            <td height="65px" >
                <iframe src="../../HTML/MapaDelSitio.html" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=100% height=100% scrolling=no >
                </iframe>       
            </td>
        </tr>
    </table>    
</body>
</html>