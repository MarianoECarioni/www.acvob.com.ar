<?php
function write_log($cadena,$tipo)
{
	$arch = fopen(realpath( '.' )."/logs/ucvov_".date("Y-m-d").".txt", "a+"); 

	fwrite($arch, "[".date("Y-m-d H:i:s.u")." ".$_SERVER['REMOTE_ADDR']." ".
                   $_SERVER['HTTP_X_FORWARDED_FOR']." - $tipo ] ".$cadena."\n");
	fclose($arch);
}
write_log("Ingreso a uploader.php","Debug");

$target_path = "PHP/imagenes";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
	echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
} 
else{
	echo "Ha ocurrido un error, trate de nuevo!";
} 

?>