<?php
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);

$conexion=mysqli_connect("localhost","root","")
or exit("no se puede conectar con el servidor");

$base_datos=mysqli_select_db($conexion, "b7_11184280_uco")
or exit("no se puede conectar con la base de datos");
mysqli_query("SET NAMES 'utf8'");
?>