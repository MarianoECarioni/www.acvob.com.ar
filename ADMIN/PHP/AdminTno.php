<?php
    session_start();
    function redirect($url,$seconds){
        $ss = $seconds * 1;
        $comando = "<script>window.setTimeout('window.location=".chr(34).$url.chr(34).";',".$ss.");</script>";
        echo ($comando);
    }
    if ($_SESSION['usuario'] != "ucovoley"){
        redirect("../index.php",1);
    }
    else{
        error_reporting(E_ALL & ~E_NOTICE);
        
        if ($_GET['p']) phpinfo();
        include("../../PHP/conexion.php");
        // set up DB
        //$conn = mysql_connect("sql209.byethost7.com","b7_11184280","Boca2012");
        //mysql_select_db("b7_11184280_uco");

        // set your db encoding -- for ascent chars (if required)
        mysql_query("SET NAMES 'utf8'");

        // include and create object
        include("../../PHP/jqgrid/inc/jqgrid_dist.php");
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
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" href="../../PHP/jqgrid/js/themes/redmond/jquery-ui.custom.css"></link>	
        <link rel="stylesheet" type="text/css" media="screen" href="../../PHP/jqgrid/js/jqgrid/css/ui.jqgrid.css"></link>	
        <link rel="stylesheet" type="text/css" href="../../Estilos/Admin.css"></link>
        
        <script type="text/javascript" language="javascript" src="../../Scripts/funciones.js"></script>            
        <script src="../../PHP/jqgrid/js/jquery.min.js" type="text/javascript"></script>
        <script src="../../PHP/jqgrid/js/jqgrid/js/i18n/grid.locale-es.js" type="text/javascript"></script>
        <script src="../../PHP/jqgrid/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
        <script src="../../PHP/jqgrid/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
        <title>Administraci&oacuten de Torneos </title>
    </head>
    <body class="body1">
         <table class="TPrincipal"  border="0" >
         <!--*** CABECERA DE PAGINA ***-->
            <tr class="LinEncab" >
               <td class="ColEncab">
                   <img src="../../Imagenes/cabecera.png" width="100%" onclick="abrir('../../index.php')" >
               </td>
            </tr>
            <tr>
                <td>
                    <table border="0" align="center">
                        <tr>
                            <td class="CeldaTop">
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
                            <td class="CeldaBottom">
                                <form action="menuinicial.php" method="post" name="volver">
                                    <input name="volver" type="submit" value="Volver" class="botonVolver" />
                                </form>
                            </td>
                        </tr>
                   </table>    
                </td>
            </tr>
            <tr>
                <td height="60px" >
                    <iframe src="../../HTML/MapaDelSitio.html" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=100% height=100% scrolling=no >
                    </iframe>
                </td>
            </tr>
         </table>    
    </body>
</html>