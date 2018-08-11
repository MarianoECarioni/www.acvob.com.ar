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
      <script type="text/javascript" language="javascript" src="../Scripts/funciones.js"></script>
      <script type="text/javascript" language="javascript" src="../Scripts/jquery.js"></script>
      <script type="text/javascript" language="javascript" src="../Scripts/jquery.carouFredSel-4.4.3-packed.js"></script>

      <script type="text/javascript">//<![CDATA[
        $(function(){
            $('#slider div:gt(0)').hide();
            setInterval(function(){
            $('#slider div:first-child').fadeOut(0)
                .next('div').fadeIn(1000)
                 .end().appendTo('#slider');}, 4000);
            });
//]]></script>
</head>
<body>
    <?php
     include ("conexion.php");
     
     //Obtengo los datos de la nota. 
     $query = "SELECT * FROM img_notas WHERE ID_NOTA  = 1";
     $resultado=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );
	
     
     echo "<div id='slider'>";
     while ($fila = mysql_fetch_assoc($resultado)){
          $Imagen =  $fila['url_img'];	
          
          echo "<div><img src='".$Imagen."' width='448px' height='336px'/></div>";
     }            
     echo "</div>";
     mysql_close($conexion);    
?>
</body>
</html>