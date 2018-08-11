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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel='stylesheet' type='text/css' href='../Estilos/Notas.css'    />
    <script type="text/javascript" language="javascript" src="../Scripts/funciones.js"></script>
</head>
<body>
<?php
    
    $Llamada = $_GET['llamada'];
    $IdTipoNota = $_GET['idtiponota'];
    include ("conexion.php");
    $query = "SELECT * FROM notas WHERE TIPO_DE_NOTA = ".$IdTipoNota." and id_nota > 1";
    $resultado=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );
     
    $Vueltas = 1;
    while (($fila = mysql_fetch_assoc($resultado))  && $Vueltas <= $Llamada ){
        $TITULO =  $fila['TITULO'];	
        $DETALLE_CORTO = $fila['DETALLE_CORTO'];
        $IMAGEN =  $fila['LINK_IMAGEN'];
        $PIE = $fila['PIE'];
        $IDNOTA = $fila['ID_NOTA'];
        $Vueltas++;
    }            
    mysql_close($conexion);    
    $urlAnterior = substr($_SERVER['HTTP_REFERER'],-14);
    
if ($IdTipoNota == 1){ ?>
<?php 
if ($urlAnterior === "AdminNotas.php"){
  $cadena = '"'."abrir('../ADMIN/PHP/EditNotasAmpliadas.php?idnota=".$IDNOTA."')".'" ';  
    
}
else {
$cadena = '"'."abrir('NotasAmpliadas.php?idnota=".$IDNOTA."')".'"';
}
        
//echo '<table  id="nota_ex_principal" background='.$IMAGEN.' onclick='.$cadena.' ></td>';
?>
<div >
    <div style="position: absolute; top: 0px; left:10pt;">
        <iframe src="PresentacionAutomaticaChica.php?idnota= <?php echo $IDNOTA; ?>" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=280pt height=200pt scrolling=no ></iframe>
    </div>
</div>
<div style="position: absolute;">   
<table  id="nota_ex_principal" onclick=<?php  echo $cadena ?> >    
  <tr  class="foto"> 
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
</table>
</div>
<?php 
}
else { 
    $cadena = '"'."abrir('NotasAmpliadasSinFoto.php?idnota=".$IDNOTA."')".'"';
    echo '<table id="nota_secundaria_1" onclick='.$cadena.'>';
?>   
        <tr>      
            <td colspan="2" > 
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

<?php    
} ?>

</body>
</html>