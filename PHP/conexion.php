<?php
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);

$conexion=mysql_connect("localhost","root","")
or exit("no se puede conectar con el servidor");

$base_datos=mysql_select_db("b7_11184280_uco",$conexion)
or exit("no se puede conectar con la base de datos");
mysqli_query("SET NAMES 'utf8'");
?>