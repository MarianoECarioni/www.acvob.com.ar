<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MenuInicial</title>
<link rel="stylesheet" type="text/css" href="Admin.css"/>
</head>
<body align="center">
<?php
function redirect($url,$seconds){
$ss = $seconds * 1;
$comando = "<script>window.setTimeout('window.location=".chr(34).$url.chr(34).";',".$ss.");</script>";
echo ($comando);
}
if ($_SESSION['usuario'] != "ucovoley"){
  redirect("Login.php",1);
}
?>
<center>
<table height="442" class="TmenuIni">
<tr><td class="CeldaTop"><h1>Men&uacute de administraci&oacuten</h1></td></tr>
<tr><td height="288" class="CeldaCentral">
<center>
<form action="AdminPos.php" method="post" name="form1" target="_parent">
  <p>
    <span class="menuIni">
      <input name="Posiciones" type="submit" value="Posiciones" />
    </span></p>
</form>
<form action="AdminFix.php" method="post" name="form1" target="_parent">
  <p>
    <span class="menuIni">
      <input name="Fixture" type="submit" value="Fixture" />
    </span></p>
</form>
<form action="AdminRes.php" method="post" name="form1" target="_parent">
  <p>
    <span class="menuIni">
      <input name="Resultados" type="submit" value="Resultados" />
    </span></p>
</form>
<form action="AdminTno.php" method="post" name="form1" target="_parent">
  <p>
    <span class="menuIni">
      <input name="Torneos" type="submit" value="Torneos" />
    </span></p>
</form>
<form action="AdminCat.php" method="post" name="form1" target="_parent">

  <p>
    <span class="menuIni">
      <input name="Categorias" type="submit" value="Categorías" />
    </span></p>
</form>
</center>
</td></tr>
<tr><td height="96" class="CeldaTop">
<center>
<form action="Login.php" method="post" name="frmVolver">
  <p class="CeldaBottom">
    <input name="Volver" type="submit" value="Volver"/>
  </p>
</form>
</center>
</td></tr>
</table>
</center>
<div align="center"></div>
</body>
</html>
