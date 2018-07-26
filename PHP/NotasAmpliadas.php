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
    <meta name="DESCRIPTION" content="ACVOB, notas" />
    <meta name="ABSTRACT" content="ACVOB, notas" />
    <meta name="KEYWORDS" content="notas" />
    <title></title>
    <link rel='stylesheet' type='text/css' href='../Estilos/Notas.css'    />
    <link rel='stylesheet' type='text/css' href='../Estilos/estilos3.css'    />
    <script type="text/javascript" language="javascript" src="../Scripts/funciones.js"></script>
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

<table class="TPrincipal"  border="0" >
     <!--*** CABECERA DE PAGINA ***-->
    <tr class="LinEncab"  >
        <td class="ColEncab" >
            <img src="../Imagenes/cabecera.png" width="95%" onclick="abrir('../index.php')" >
        </td>
        
    </tr>
    <tr>
        <td align="center">
            <table  id="NotaAmpliadaSF"  border="0">
                <tr  class="piefoto">
                    <td>
                        <h2><?php echo $PIE ?></h2>                           
                        <h1><?php echo $TITULO; ?></h1>
                    </td>                            
                </tr>
                <!--<tr  <a href="#" onclick="afoto('<?php //echo $IMAGEN; ?>','Nota Principal');return false" >  
                    <td class="foto"  background=<?php //echo $IMAGEN; ?>> -->
                <tr align="center" b>
                    <td  class="foto" valign="bottom" >
                        <iframe src="PresentacionImagenes.php?idnota=<?php echo $IDNota; ?>" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=720px height=500px scrolling=no >
                        </iframe>   
                    </td>
                </tr>
                <tr  class='pie'>
                    <td>
                        <p><?php echo $DETALLE_CORTO; ?></p><br>
                    </td>
                </tr>
                <tr>
                    <td  class="DetalleLargo">
                        <p><?php echo $DETALLE_LARGO; ?></p>
                    </td>
                </tr>
            </table>
            <br>
        </td>
    </tr>
    <tr>
        <td height="65px">
            <iframe src="../HTML/MapaDelSitio.html" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=100% height=100% scrolling=no >
            </iframe>       
        </td>
    </tr>
</table>    
</body>
</html>