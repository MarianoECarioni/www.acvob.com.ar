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
        <?php  
            //Cargo las imágenes actuales, desde la base de datos. 
            $IDNota = $_GET['idnota'];   
            $Param = $IDNota;
                    
            //Incluyo la conexion a la base de datos.
            include ("../../PHP/conexion.php");                         
                        
            //Obtengo las imágenes correspondientes a la nota. 
            $query = "SELECT url_img, id_imagen FROM img_notas WHERE id_nota =".$IDNota." order by id_imagen asc;";
            $resultado=mysql_query($query, $conexion) or die( "Error en $query: " . mysql_error() );
            $cantidad=mysql_affected_rows();
            $NuevaImagen = $cantidad + 1; 
                        
            //Genero dos arrays, uno para la URL de la imagen y otro para los Id de las mismas.
            $Imagenes = array();
            $Idimagen = array();
                        
            $i = 0;
                        
            //Asigno los valores de los ID e Imágen a los arrays.
            while ($fila = mysql_fetch_assoc($resultado)){
                              
                $Imagenes[$i] = '../'.$fila['url_img'];
                $Idimagen[$i] = $fila['id_imagen'];
                $Param = $Param.'-'.$Idimagen[$i];
                //    echo "<p>".$Imagenes[$i]."</p>";
                              
                $i++;
            }      
                        
        ?>        
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
                    <!-- Formulario de carga de imágenes                                        -->
                    <form action="file.php?idnotaImg=<?php echo $Param; ?>&Cantidad=<?php echo $cantidad; ?>" method="post" enctype="multipart/form-data">
                       
                        <table border="0">
                            <script type="text/javascript">
                              var cant = 0;
                              cant = <?php echo $cantidad; ?>;
                              var IDNota = <?php echo $IDNota; ?>;
                              var imagenes =  <?php echo json_encode($Imagenes);?>;
                              var IDImagenes =  <?php echo json_encode($Idimagen);?>;
                              //document.write("<h1>" + cant + "</h1>");
                              for (var i=0; i < cant; i++){

                                var idImg = '"Imagen'+ i + '"';
                                var idImgEd = "'Imagen" + i +"'";
                                var name = "name='archivo" + i + "'";
                                var id = '"file' + i +'"';             
                                var idEd = "'file"+i+"'";
                                var selecc = '<input id='+ id + ' type="file" ' + name + ' class="BotnInput" onchange="previewFiles('+ id + ', ' + idImg + ')" /> ';
                                var formu = '<form id="form' + i + '" ' + 'name="form' + i + '" ' + 'method="GET" ' + 'action="LoadFiles.php?idnota="' + IDNota + '"> ';
                                var Idimagen = IDImagenes[i];        
                document.write('<tr valign="center"> ' +   
                                    '<td> ' +    
                                        '<img id='+ idImg + ' src="'+imagenes[i]+'" $name width="100px" height="80px" /> '  +
                                    '</td> ' +
                                    '<td> ' +
                                        '<div><div> ' +
                                            '<ul>' +
                                                '<input id='+ id + ' type="file" ' + name + ' class="BotnInput" onchange="previewFiles('+ idEd + ', ' + idImgEd + ')" /> </ul></div>' +
                                                   '<div><ul> <input name="Borrar" type="button" value="" class="BotonBorrar"  onclick="javascript:Borrar_Imagen(' + IDNota + ',' +Idimagen + ')" /> ' +
                                            '</ul> '+
                                        '</div> </div>'+
                                    '</td> ' +
                                '</tr>');
                              };

                            </script>
                        </table>
                        <input name="Agregar" type="button" value="Agregar"  onclick="javascript:Insertar_Imagen('<?php echo $IDNota; ?>', '<?php echo $NuevaImagen; ?>' )" />
                        <input type="submit" value="Grabar" ></input>
                    </form>
                     
                </td>
            </tr>
                
        </table>
    </body>    
</html>    