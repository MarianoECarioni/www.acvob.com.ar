<?php
$conexion=mysql_connect("localhost","root","")
or exit("no se puede conectar con el servidor");

$base_datos=mysql_select_db("UCO",$conexion)
or exit("no se puede conectar con la base de datos");
?>