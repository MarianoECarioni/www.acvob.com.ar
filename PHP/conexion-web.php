<?php
$conexion=mysql_connect("localhost","269084","gabeze")
or exit("no se puede conectar con el servidor");

$base_datos=mysql_select_db("269084",$conexion)
or exit("no se puede conectar con la base de datos");
?>