<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>LogIn</title>
        <link rel="stylesheet" type="text/css" href="../Estilos/Admin.css"/>
    </head>
    <body class="body1" align="center" >
         <table class="TPrincipal"  border="0" >
            <!--*** CABECESRA DE PAGINA ***-->
            <tr class="LinEncab" >
               <td class="ColEncab">
                   <img src="../Imagenes/cabecera.png" width="100%" onclick="abrir('index.php')" >
               </td>
            </tr>
            <tr>
                <td align="center">
                    <div class="login">
                        <form id="form1" name="form1" method="post" action="PHP/procesa_login.php">
                            <br>
                            <label >
                                <div align="center"><p>Usuario</p></div>
                            </label>
                            <div align="center">
                                <input name="usuario" type="text" id="usuario"   class="redondo" size="15" maxlength="15" />
                                    <br />
                                </div>
                            <label>
                                <div align="center"><p>Contraseña</p></div>
                            </label>
                            <div align="center">
                                <input name="clave" type="password" id="clave" class="redondo" size="15" maxlength="8" />
                                <br><br>
                                <input name="Ingresar" type="submit" value="Ingresar" class="boton" />
                            </div>
                        </form>
                        <br>
                    </div>    
                    <br>
                </td>
            </tr>
            <tr>
                <td height="60px" >
                    <iframe src="../HTML/MapaDelSitio.html" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=100% height=100% scrolling=no >
                    </iframe>
                </td>
            </tr>
         </table>
    </body>
</html>