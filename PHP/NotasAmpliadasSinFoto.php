<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel='stylesheet' type='text/css' href='../Estilos/Notas.css'    />
    <link rel='stylesheet' type='text/css' href='../Estilos/estilos3.css'    />
    <script type="text/javascript" language="javascript" src="Scripts/funciones.js"></script>
</head>
<body class="body1">
<?php
    $IDNota = $_GET['idnota'];  
    include ("conexion.php");
    $query = "SELECT * FROM notas WHERE ID_NOTA = $IDNota";
    $resultado=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );
		        
    while ($fila = mysql_fetch_assoc($resultado)){
         $TITULO =  $fila['TITULO'];	
         $DETALLE_CORTO = $fila['DETALLE_CORTO'];
         $IMAGEN =  $fila['LINK_IMAGEN'];
         $PIE = $fila['PIE'];
         $DETALLE_LARGO = $fila['DETALLE_LARGO'];
    }            
     mysql_close($conexion);    
?>
    <table class="TPrincipal"  border="0" align="center">
        <!--*** CABECERA DE PAGINA ***-->
        <tr class="LinEncab"  >
            <td class="ColEncab" colspan="2">
                 <img src="../Imagenes/cabecera.png" width="95%" onclick="abrir('../index.php')" >
            </td>

        </tr>
        <tr>
            <td align="center">
                <table id="NotaAmpliadaSF" border="0">
                    <tr>
                        <td > 
                            <h2><?php echo $PIE ?></h2>                           
                            <h1><?php echo $TITULO; ?></h1>
                        </td>
                    </tr>
                    <tr>
                        <td class="DetalleCorto" valign="center">
                            <p><?php echo $DETALLE_CORTO; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td >
                        </td>
                    </tr>
                    <tr>
                        <td class="DetalleLargo">
                            <p><?php echo $DETALLE_LARGO; ?></p>
                        </td>
                    </tr>                           
                </table>        
            </td>
        </tr>
        <tr>
            <td height="65px" >
                <iframe src="../HTML/MapaDelSitio.html" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=100% height=100% scrolling=no >
                </iframe>       
            </td>
        </tr>
    </table>    
</body>
</html>