<?php
function write_log($cadena,$tipo)
{
	$arch = fopen(realpath( '.' )."/logs/ucvov_".date("Y-m-d").".txt", "a+"); 
	fwrite($arch, "[".date("Y-m-d H:i:s.u")." ]- $cadena: ".$tipo."\n");
	fclose($arch);        
}


function reemplazar($cadena1,$orden)      
{
   if ($orden === 'DER' ){ 
        write_log($cadena1,"cadena" );
        $nuevacadena = str_replace("xn", "<br>", $cadena1);
   }
   else{
        write_log($cadena1,"cadena" );
        $nuevacadena = str_replace("<br>", "\n", $cadena1);
    }
   return $nuevacadena;
}
/*
$origen="img/imagen.jpg";

$destino="img/nuevaimagen.jpg";

$destino_temporal=tempnam("tmp/","tmp");

redimensionar_jpeg($origen, $destino_temporal, 300, 350, 100);

 

// guardamos la imagen

$fp=fopen($destino,"w");

fputs($fp,fread(fopen($destino_temporal,"r"),filesize($destino_temporal)));

fclose($fp);

 

// mostramos la imagen

echo "<img src='img/nuevaimagen.jpg'>";

 */

function redimensionar_jpeg($img_original, $img_nueva, $img_nueva_anchura, $img_nueva_altura, $img_nueva_calidad)

{
	// crear una imagen desde el original 
	$img = ImageCreateFromJPEG($img_original);

	// crear una imagen nueva 
	$thumb = imagecreatetruecolor($img_nueva_anchura,$img_nueva_altura);

	// redimensiona la imagen original copiandola en la imagen 
	ImageCopyResized($thumb,$img,0,0,0,0,$img_nueva_anchura,$img_nueva_altura,ImageSX($img),ImageSY($img));

 	// guardar la nueva imagen redimensionada donde indicia $img_nueva 
	ImageJPEG($thumb,$img_nueva,$img_nueva_calidad);

	ImageDestroy($img);
}

?>