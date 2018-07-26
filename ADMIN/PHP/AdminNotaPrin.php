<?php
session_start();
function redirect($url,$seconds){
$ss = $seconds * 1;
$comando = "<script>window.setTimeout('window.location=".chr(34).$url.chr(34).";',".$ss.");</script>";
echo ($comando);
}
if ($_SESSION['usuario'] != "ucovoley"){
  redirect("Login.php",1);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Admin.css" />
<script src="jqgrid/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
<title>Administraci&oacute;n de Notas </title>
</head>
<body>
<TABLE class="TPrincipal" border="1">        
  <tr>
    <td>
 		<iframe name="NotaPrin"  src="frmCargaNotaPrincipal.php" frameborder=0 scrolling=no  width="460px" height="500px"> </iframe>
    </td>
	<td>
		<iframe name="NotaSecun" src="frmCargaNotaSecun.php" frameborder=0 scrolling=no  width="460PX" height="500px"> </iframe>
	</td>	
  </tr>
  <tr>
    <td>
       <form action="menuinicial.php" method="post" name="volver">
           <input name="volver" type="submit" value="Volver" />
       </form>
    </td>
  </tr>
</table>    
</body>
</html>