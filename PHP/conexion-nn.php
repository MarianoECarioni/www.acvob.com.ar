<?php
$conexion=mysql_connect("sql209.byethost7.com","b7_11184280","Boca2012")
or exit("no se puede conectar con el servidor");

$base_datos=mysql_select_db("b7_11184280_uco",$conexion)
or exit("no se puede conectar con la base de datos");
?>