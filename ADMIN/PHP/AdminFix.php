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
        include("../../PHP/conexion.php");
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../../Estilos/Admin.css" />
        <link rel="stylesheet" type="text/css" href="../../Estilos/estilos3.css" />
        <script src="../../PHP/jqgrid/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
        <script  language="javascript">
        Borra_Fixture(idFix);
        </script> 
        <title>Administraci&oacuten de Fixture</title>
    </head>
    <body>
        <table class="TPrincipal"  border="0" >
            <!--*** CABECERA DE PAGINA ***-->
            <tr class="LinEncab" >
               <td class="ColEncab">
                   <img src="../../Imagenes/cabecera.png" width="95%" onclick="abrir('index.php')" >
               </td>
            </tr>
            <tr>
                <td>
                    <table border="0" align="center"  class="TmenuIni">
                        <tr>
                           <td class="CeldaTop" >
                               <h1> Administraci&oacuten de Fixture </h1>
                           </td>
                        </tr>
                        <tr>
                            <td class="CeldaCentral">
                                <br>
                                <form method="GET" name="Seleccion" action="frmFixture.php" target="Fixture" >
                                    <select name="anios" size="1" class="Select">
                                        <option value="Seleccione a&ntilde;o">Seleccione un a&ntilde;o... </option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                    </select>
                          <!-- ---------------------------------------------------------------------------------------->
                                    <select NAME="torneos" size=1 class="Select">
                                        <option value="Seleccione torneo">Seleccione un torneo... </option>
                                            <?php
                                                $query="SELECT id_torneo, nombre FROM torneo";
                                                $fila=mysql_query($query, $conexion);

                                                if  (mysql_num_rows($fila)==0){ 
                                                    echo "no existen datos";
                                                    exit(0);
                                                }

                                                while ($row=mysql_fetch_array($fila)){
                                                    $id_tor = $row['id_torneo'];	
                                                    $torneo = $row['nombre'];
                                                    printf("<OPTION value=\"$id_tor\">$torneo</option>");
                                                }
                                            ?>
                                    </select>
                          <!------------------------------------------------------------------------------------------>
                                    <select NAME="categorias" size=1 class="Select">
                                        <option value="Seleccione categor&iacute">Seleccione una categor&iacutea... </option>
                                        <?php
                                            $query="SELECT id_categoria, nombre FROM categoria";
                                            $fila=mysql_query($query, $conexion);

                                            if  (mysql_num_rows($fila)==0){ 
                                                echo "no existen datos";
                                                exit(0);
                                            }

                                            while ($row=mysql_fetch_array($fila)){
                                                $id_cat = $row['id_categoria'];	
                                                $cat = $row['nombre'];
                                                printf("<OPTION value=\"$id_cat\">$cat</option>");
                                            }
                                        ?>
                                    </select>
                          <!------------------------------------------------------------------------------------------>
                                    <select name="semanas" size="1" class="Select">
                                            <option value="Semana">Semana ...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>  
                                    </select>    
                                    <input name="Enviar" type="submit" value="Enviar datos!" class="boton">         
                                </form>
                            </td>
                        </tr>     
                        <tr class="CeldaFixture" >
                            <td>
                                <iframe name="Fixture"  frameborder=0 scrolling=no  width="100%" height="520px"> </iframe>
                            </td>
                        </tr>
                        <tr>
                            <td class="CeldaBottom">
                                <form action="menuinicial.php" method="post" name="volver">
                                    <input name="volver" type="submit" value="Volver" class="botonVolver"/>
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