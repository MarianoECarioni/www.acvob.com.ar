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
     $query = "SELECT Nota.*, Img.url_img FROM notas Nota, img_notas Img WHERE Nota.ID_NOTA  = 1 AND Img.id_nota = Nota.ID_NOTA ORDER BY id_imagen DESC ";
     $resultado=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );
		        
     while ($fila = mysql_fetch_assoc($resultado)){
          $TITULO =  $fila['TITULO'];	
          $DETALLE_CORTO = $fila['DETALLE_CORTO'];
          $IMAGEN =  $fila['url_img'];
          $PIE = $fila['PIE'];
     }            
     mysql_close($conexion);    
     $urlAnterior = substr($_SERVER['HTTP_REFERER'],-14);
     
     if ($urlAnterior === "AdminNotas.php"){
        $PAGINA='"'."abrir('../ADMIN/PHP/EditNotasAmpliadas.php?idnota=1')".'" ';
     }
     else {
        $PAGINA='"'."abrir('NotasAmpliadas.php?idnota=1')".'" ';
     }     
?>
<!--<div id="slider">
    <div><img src="../Imagenes/DSC_1091.JPG"/></div>
    <div><img src="../Imagenes/DSC_1085.JPG"/></div>
    <div><img src="../Imagenes/DSC_1162.JPG"/></div>
</div>-->
<!--<table  id="nota_principal" onclick=<?php //echo $PAGINA; ?> background=<?php //echo $IMAGEN; ?> >-->

       <div >
           <div style="position: absolute; top: 0px;">
               <iframe src="PresentacionAutomatica.php?idnota=1" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=448pt height=336pt scrolling=no ></iframe>
           </div>
       </div>
<div style="position: absolute;">
<table  id="nota_principal"  onclick=<?php echo $PAGINA; ?> >
    <tr  class="foto">
        <td>
        </td>
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
</table>
</div>    
 

</body>
</html>