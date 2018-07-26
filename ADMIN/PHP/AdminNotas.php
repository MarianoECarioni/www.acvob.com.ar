<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>acvob_voley</title>
        <link rel="stylesheet" type="text/css" href="../../Estilos/estilos3.css" />
        <link rel="stylesheet" type="text/css" href="../../Estilos/carrusel.css" />
        <link rel="stylesheet" type="text/css" href="../../Estilos/menuh.css"    />
        <link rel="stylesheet" type="text/css" href="../../Estilos/Notas.css"    />  
        <script type="text/javascript" language="javascript" src="../../PHP/Scripts/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="../../PHP/Scripts/jquery.carouFredSel-4.4.3-packed.js"></script>
        <script type="text/javascript" language="javascript" src="../../PHP/Scripts/funciones.js"></script>            
        <meta property="fb:admins" content="1456789350558"/>
    </head>
    <body class="body1">
        <table class="TPrincipal"  border="0" >
        <!--*** CABECESRA DE PAGINA ***-->
            <tr class="LinEncab" >
               <td class="ColEncab">
                   <img src="../../Imagenes/cabecera.png" width="95%" onclick="abrir('index.php')" >
               </td>
            </tr>
        <!--***MENU HORIZONTAL      ***-->
            <tr class="FilMenuH">
                <td>
                    <table id="menu2">
                        <tr>
                            <td>
                                <table id="menu" border="0">
                                    <tr>
                                        <td class="boton"><a href="../HTML/Planillas.html">Planillas y formularios</a></td>
                                        <td class="boton"><a href="../../Documentos/Instituciones-2014.doc">Instituciones</a></td>            
                                        <td class="boton"><a href="../HTML/Resena.html">Reseña</a></td>
                                        <td class="boton"><a href="mailto:ucovoley@yahoo.com.ar">Contacto</a></td>
                                    </tr>
                                </table>   
                            </td>
                            <td>
                                <table id="redes" border="0"> 
                                    <tr>
                                        <td> <p>Seguinos en </p> </td>
                                        <td><a href="https://www.facebook.com/ACVOB-1971873596394591/"><img src="../../Imagenes/facebook.png" width="35px"/></a></td>
                                    </tr>
                                </table>  
                            </td>
                        </tr>
                    </table>    
                </td>
            </tr>
         <!--*** FILA DE RELLENO    ***-->            
            <tr>
                <td><br>
                </td>
            </tr>
         <!--***NOTAS PRINCIPALES / DOCUMENTOS / BOLETINES ***-->
            <tr>
                <td>
                    <!-- Tabla de Notas principal, secundaria y boletines -->
                    <table id="notas">
                        <tr>
                            <td>
                                <iframe src="../../PHP/NotaPrincipal.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=448pt height=360pt scrolling=no >
                                </iframe>
                            </td>
                            <td>
                                <iframe src="../../PHP/NotaSecundaria.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=300pt height=360pt scrolling=no >
                                </iframe>
                            </td>
                            <td class="publi">
                                <table id="publicidad" >
                                    <tr ><td colspan="2"><h1>BOLETINES</h1></td></tr>
                                    <tr>
                                        <td ><img src="../../Imagenes/word.png" width=30pt></td>
                                        <td ><a href="../../Documentos/Boletin-01-2015.docx" >Boletin 01 de 2015</a></td>
                                    </tr>
                                    <tr>
                                        <td ><img src="../../Imagenes/word.png" width=30pt></td>
                                        <td ><a href="../../Documentos/Boletin-01-2014.doc" >Boletin 01 de 2014</a></td>
                                    </tr>
                                    <tr>
                                        <td ><img src="../../Imagenes/word.png" width=30pt></td>
                                        <td ><a href="../../Documentos/Boletin-02-2014.doc" >Boletin 02 de 2014</a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h1>DOCUMENTOS</h1></td>
                                    </tr>
                                    <tr>
                                        <td ><img src="../../Imagenes/word.png" width=30pt></td>
                                        <td ><a href="../../Documentos/Posiciciones-Finales-Clausura-2011.doc" >Pos. Finales Clausura 2011</a></td>
                                    </tr>
                                    <tr>
                                        <td ><img src="../../Imagenes/word.png" width=30pt></td>
                                        <td ><a href="../../Documentos/Posiciones-Clausura-2011.doc" >Posiciones Clausura 2011</a></td>
                                    </tr>                  
                                    <tr>
                                        <td ><img src="../../Imagenes/word.png" width=30pt></td>
                                        <td ><a href="../../Documentos/ComunicadoOficial.docx" >Comunicado Oficial</a></td>
                                    </tr>                       
                                </table>                
                            </td> 
                        </tr>
                    </table>
                    <br>
                </td>
            </tr>
         <!--*** FILA DE RELLENO    ***-->            
            <tr>
                <td><br></td>
            </tr> 
        <!--*** NOTAS Antiguas Y TABLAS FILA 7          ***-->    
            <tr>
                <td>
                   
                    <table border="0">
                        <tr valign="top">
                            <td>
                                
                                    <div id="TablaDeNotasViejas">
                                        <table id="nota_secundaria_2">
                                            <tr>
                                                <td colspan="2">
                                                    <table id="notas_antiguas" border="0">
                                                        <tr>
                                                            <td class="logo"></td>
                                                            <td><P>Notas</p></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                <?php for ($i = 1; $i <= 3; $i++ ){ ?>
                                            <!-- Fila de notas antiguas con foto -->
                                            <tr>
                                                <!--      NOTA IZQUIERDA 1 CON FOTO  -->
                                                <td class="colIzq">
                                                    <?php $j = ($i*2)-1;
                                                        $cadena ="../../PHP/NotasViejas.php?llamada=".$j."&idtiponota=1";
                                                        echo '<iframe src='.$cadena.' marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=314pt height=252pt scrolling=no>';
                                                        echo '</iframe>';
                                                    ?>
                                                </td>
                                                <!--      NOTA DERECHA 1 CON FOTO  -->
                                                <td>
                                                    <?php $j = $i*2; 
                                                        $cadena ="../../PHP/NotasViejas.php?llamada=".$j."&idtiponota=1";
                                                        echo '<iframe src='.$cadena.' marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=314pt height=252pt scrolling=no >';
                                                        echo '</iframe>';
                                                    ?>
                                                </td>
                                            </tr>
                                            <!-- Fila de notas antiguas sin foto -->
                                            <tr>
                                                <td class="colIzq">
                                                    <table id="nota_ex_principal_sin_foto">
                                                        <tr>
                                                            <td>
                                                               <?php $j = ($i*2)-1; 
                                                                    $cadena="../../PHP/NotasViejas.php?llamada=".$j."&idtiponota=2";  
                                                                    echo '<iframe src='.$cadena.' marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=314pt height=252pt scrolling=no >';
                                                                    echo '</iframe>';
                                                               ?>     
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                     <table id="nota_ex_principal_sin_foto">
                                                        <!--      NOTA DERECHA 1 SIN FOTO  -->
                                                        <tr>
                                                            <td>
                                                                <?php $j = ($i*2); 
                                                                    $cadena="../../PHP/NotasViejas.php?llamada=".$j."&idtiponota=2";  
                                                                    echo '<iframe src='.$cadena.' marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=314pt height=252pt scrolling=no >';
                                                                    echo '</iframe>';
                                                               ?>     
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                    <?php }; ?>
                                        </table>
                                    </div>
                            </td>
                            <td>
                                <!-- tabla de Posiciones -->
                                <table  id="Tablas">
                                    <tr>
                                        <td>
                                            <table id="posiciones" border="0">
                                                <tr>
                                                    <td class="logo"></td>
                                                    <td><P>Posiciones</p></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>   
                                    <tr>
                                        <td>
                                            <iframe src="../../PHP/Posiciones.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=348pt height=350pt scrolling=no >
                                            </iframe>
                                        </td>
                                    </tr>
                                </table>
                                <!-- tabla de Fixture -->
                                <table id="Tablas">
                                    <tr>
                                        <td>
                                            <table id="posiciones">
                                                <tr>
                                                    <td class="logo"></td>
                                                    <td><P>Fixture</p></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>            
                                    <tr>
                                        <td>
                                            <iframe src="../../PHP/Fixture.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=348pt height=350pt scrolling=no >
                                            </iframe>
                                        </td>
                                    </tr>            
                                </table> 
                            </td>       
                        </tr>
                    </table>     
                </td>
            </tr>
        <!--*** CARRUSEL DE FOTOS FILA 8                   ***-->
            <tr>
                <td id="Carrousel">
                    <iframe src="../../PHP/Carrousel.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0  width="100%" height="100%" scrolling=no >
                    </iframe>
                </td>
            </tr>     
        <!--*** FILA DE TABLA DE RESULTADOS                ***-->
            <tr>
                <td align="Center">
                    <table> 
                        <tr valign="top" align="center">
                            <td>
                                <table id="Tablas" border="0">
                                    <tr>
                                        <td>
                                            <table id="posiciones">
                                                <tr>
                                                    <td class="logo"></td>
                                                    <td><P>Resultados</p></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <iframe src="../../PHP/Resultados.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=470pt height=315pt scrolling=no >
                                            </iframe>
                                        </td>
                                    </tr>            
                                </table>
                            </td>
                            <td>
                                <table id="Mapa" border="0">
                                    <tr>
                                        <td>
                                            <table id="posiciones">
                                                <tr>
                                                    <td class="logo"></td>
                                                    <td><P>Dónde estamos?</p></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11041.90569650667!2d-58.67237959338248!3d-34.63504482505669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcbf3e61f4c525%3A0xc3329b839324711!2sGral.+Fern%C3%A1ndez+de+la+Cruz+251%2C+Ituzaing%C3%B3%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1521128480119" width="470" height="315" frameborder="0" style="border:0" allowfullscreen>
                                            </iframe>
                                        </td>
                                    </tr>            
                                </table>
                            </td>
                        </tr> 
                    </table>    
                </td>
            </tr> 
            <tr>
                <td height="65px" >
                    <iframe src="../../HTML/MapaDelSitio.html" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=100% height=100% scrolling=no >
                    </iframe>
                </td>
            </tr>
        </table>
    </body>
</html>
