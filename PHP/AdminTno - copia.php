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
else{
error_reporting(E_ALL & ~E_NOTICE);
if ($_GET['p']) phpinfo();
// set up DB
$conn = mysql_connect("localhost", "269084", "gabeze");
mysql_select_db("269084");

// set your db encoding -- for ascent chars (if required)
mysql_query("SET NAMES 'utf8'");

// include and create object
include("jqgrid/inc/jqgrid_dist.php");
$g = new jqgrid();

// set few params
$grid["caption"] = "Torneos actuales";
$g->set_options($grid);

// set database table for CRUD operations
$g->table = "torneo";

// subqueries are also supported now (v1.2)
// $g->select_command = "select * from (select * from invheader) as o";
//$g->select_command = "select * from torneo where id_torneo = 3";

// render grid
$out = $g->render("list1");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="jqgrid/js/themes/redmond/jquery-ui.custom.css"></link>	
<link rel="stylesheet" type="text/css" media="screen" href="jqgrid/js/jqgrid/css/ui.jqgrid.css"></link>	
<link rel="stylesheet" type="text/css" href="Admin.css"></link>
<script src="jqgrid/js/jquery.min.js" type="text/javascript"></script>
<script src="jqgrid/js/jqgrid/js/i18n/grid.locale-es.js" type="text/javascript"></script>
<script src="jqgrid/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
<script src="jqgrid/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
<title>Administraci&oacuten de Torneos </title>
</head>
<body>
 <table width="200" border="1" align="center">
  <tr>
    <td class="CeldaBottom" >
     <h1> Administraci&oacuten de Torneos </h1>
    </td>
  </tr>
  <tr>
    <td class="CeldaCentral">
      <div style="margin:10px">
	    <?php echo $out?>
      </div>
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