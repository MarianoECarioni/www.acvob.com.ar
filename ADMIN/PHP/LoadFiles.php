<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title></title>
        <link rel='stylesheet' type='text/css' href='../../Estilos/NotasCarga.css'    />
        <link rel='stylesheet' type='text/css' href='../../Estilos/estilos3.css'    />
        <script type="text/javascript" language="javascript" src="../../Scripts/funciones.js"></script>
        <script type="text/javascript" language="javascript" src="../../Scripts/Notas.js"></script>
        <script type="text/javascript" language="javascript" src="../../Scripts/jquery.js"></script>
    </head>
    <body class="body1" >
        <table class="TPrincipal"  border="0" >
            <tr class="LinEncab"  >
                <td class="ColEncab" >
                    <img src="../../Imagenes/cabecera.png" width="95%" onclick="abrir('../index.php')" >
                </td>
            </tr>    
            <tr>
                <td>
                    <h1>Carga de Archivos</h1>
                </td>
            </tr>
            <tr>
                <td> 
                    <?php  
                        $IDNota = $_GET['idnota'];   
                        
                        $Param = $IDNota;
                        
                        include ("../../PHP/conexion.php");                         
                        $query = "SELECT url_img, id_imagen FROM img_notas WHERE id_nota =".$IDNota." order by id_imagen asc;";
                        $resultado=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );
                        $cantidad=mysql_affected_rows();
                        $NuevaImagen = $cantidad + 1; 
                            
                        $Imagenes = array();
                        $Idimagen = array();
                        
                        $i = 0;
                        
                        while ($fila = mysql_fetch_assoc($resultado)){
                              
                              $Imagenes[$i] = '../'.$fila['url_img'];
                              $Idimagen[$i] = $fila['id_imagen'];
                              $Param = $Param.'-'.$Idimagen[$i];
                          //    echo "<p>".$Imagenes[$i]."</p>";
                              
                              $i++;
                        }      
                        
                     ?>       
                    <form action="file.php?idnotaImg=<?php echo $Param; ?>&Cantidad=<?php echo $cantidad; ?>" method="post" enctype="multipart/form-data">
                        <table>
                        <?php 
                            for ($i = 0; $i < $cantidad; $i++)
                            {
                                echo '<tr valign="center">';  
                                    echo '<td>';
                                        $Nimagen = "name='Imagen".$i."'";
                                        echo '<img src="'.$Imagenes[$i].'" $name width="100px" height="80px" >';
                                    echo '</td>';
                               
                                    echo '<td>';  
                                    
                                        $archivo = "id='archivo".$i."'";
                                        $archivoOculto = "id='archivo_oculto".$i."'";
                                        $name = "name='archivo".$i."'";
                                        //$idImg = "id="
                                                                               
                                        echo "<div> ";
                                           echo "<ul>";
                                         //  echo "<input type='file' $name class='BotnInput' />";
                                           
                                                echo '<script>';
                                                      echo  '$(window).load(function(){';
                                                      echo      ' $(function() {';
                                                      echo              "$('#file-input').change(function(e) {";
                                                      echo                  'addImage(e);'; 
                                                      echo                '})';
                                                      echo       'function addImage(e){';
                                                      echo       'var file = e.target.files[0],';
                                                      echo       '  imageType = /image.*/;';
                                                      echo      'if (!file.type.match(imageType))';
                                                      echo       'return;';
  
                                                      echo   'var reader = new FileReader();';
                                                      echo   'reader.onload = fileOnload;';
                                                      echo   'reader.readAsDataURL(file);';
                                                      echo    '}';
  
                                                      echo 'function fileOnload(e) {';
                                                      echo 'var result=e.target.result;';
                                                      echo "$('#imgSalida').attr('src',result);";
                                                      echo '}';
                                                      echo '});';
                                                      echo '});';

                                            echo '</script>';
?>                                                
                            
                                          <input name="file-input" id="file-input" type="file" />
                                                <br />
                                          <img id="imgSalida" width="50%" height="50%" src="" />
<?php                                                
                                           echo "</ul>";
                                           echo "<ul>";
                                                echo '<form id="form'.$i.'" name="form'.$i.'" method="GET" action="LoadFiles.php?idnota='.$IDNota.'" >';
                                                echo "<input style='display:none;' id='idnota' name='idnota' value='$IDNota' />";
                                                echo "<input style='display:none;' id='idimagen' name='idimagen' value='$Idimagen[$i]' />"; 
                                                echo "<input name='Borrar' type='submit' value='' class='BotonBorrar'  onclick='javascript:Borrar_Imagen(form$i)' />";
                                                echo  "</form>";
                                           echo "</ul>";     
                                        echo "</div>";
                                echo '</tr>';
                            }    
                        ?>
                        </table>     
                        <form id="frmAgregar" name="frmAgregar" method="GET" action="LoadFiles.php?idnota='<?php echo $IDNota; ?>'" >
                            <input style='display:none;' id='idnota' name='idnota' value='<?php echo $IDNota; ?>' />
                            <input style='display:none;' id='idimagen' name='idimagen' value='<?php echo $NuevaImagen; ?>' />
                            <input name='Agregar' type='submit' value='Agregar'  onclick='javascript:Insertar_Imagen(frmAgregar)' />
                        </form>    
                        <input type="submit" value="Subir"></input>
                    </form>
                </td>
            </tr>
                
        </table>
    </body>    
</html>    