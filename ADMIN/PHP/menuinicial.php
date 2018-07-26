<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>MenuInicial</title>
        <link rel="stylesheet" type="text/css" href="../../Estilos/Admin.css"/>
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
        <table class="TPrincipal"  border="0" >
            <!--*** CABECESRA DE PAGINA ***-->
            <tr class="LinEncab" >
               <td class="ColEncab">
                   <img src="../../Imagenes/cabecera.png" width="100%" onclick="abrir('index.php')" >
               </td>
            </tr>
            <tr>
                <td>
                    <center>
                        <table class="TmenuIni" border="0">
                            <tr>
                                <td class="CeldaTop" colspan="3">
                                    <h1>Men&uacute de administraci&oacuten</h1>
                                </td>
                            </tr>
                            <tr align="center" valign="top" class="FilaCentral">
                                <td class="CeldaCentral">
                                    <h2>Tablas</h2>
                                    <div class="DivDeBotones">
                                        <form action="AdminPos.php" method="post" name="form1" target="_parent">
                                          <p>
                                            <span class="menuIni">
                                              <input name="Posiciones" type="submit" value="Posiciones" class="boton" />
                                            </span></p>
                                        </form>
                                        <form action="AdminFix.php" method="post" name="form1" target="_parent">
                                          <p>
                                            <span class="menuIni">
                                              <input name="Fixture" type="submit" value="Fixture" class="boton" />
                                            </span></p>
                                        </form>
                                        <form action="AdminRes.php" method="post" name="form1" target="_parent">
                                          <p>
                                            <span class="menuIni">
                                              <input name="Resultados" type="submit" value="Resultados" class="boton" />
                                            </span></p>
                                        </form>
                                        <br>
                                    </div>    
                                </td>
                              </div> 
                                <td class="CeldaCentral">
                                    <h2>Datos</h2>
                                    <div class="DivDeBotones">
                                        <form action="AdminTno.php" method="post" name="form1" target="_parent">
                                          <p>
                                            <span class="menuIni">
                                              <input name="Torneos" type="submit" value="Torneos" class="boton"  />
                                            </span></p>
                                        </form>
                                        <form action="AdminCat.php" method="post" name="form1" target="_parent">
                                          <p>
                                            <span class="menuIni">
                                              <input name="Categorias" type="submit" value="Categorías" class="boton" />
                                            </span></p>
                                        </form>
                                        <br>
                                    </div>
                                </td>
                                <td class="CeldaCentral">    
                                    <h2>Web</h2>
                                    <div class="DivDeBotones">
                                        <form action="AdminNotas.php" method="post" name="form1" target="_parent">
                                          <p>
                                            <span class="menuIni">
                                              <input name="Notas" type="submit" value="Notas" class="boton" />
                                            </span></p>
                                        </form>
                                        <br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="CeldaBottom" colspan="3">
                                    <form action="../index.php" method="post" name="frmVolver">
                                          <p class="CeldaBottom">
                                            <input name="Volver" type="submit" value="Volver" class="botonVolver"/>
                                          </p>
                                        </form>
                                </td>
                            </tr>
                        </table>
                    </center>
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
