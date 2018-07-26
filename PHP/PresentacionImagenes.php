<?php
    $IDNota = $_GET['idnota'];   
    include ("conexion.php");
    $query="SELECT url_img FROM img_notas WHERE id_nota = $IDNota";
    $fila=mysql_query($query, $conexion) or die(mysql_error());
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../Estilos/slide.css" />
        <script type="text/javascript" language="javascript" src="../Scripts/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="../Scripts/jquery.carouFredSel-4.4.3-packed.js"></script>
        <script type="text/javascript" language="javascript" src="../Scripts/funciones.js"></script>
	<meta property="fb:admins" content="1456789350558"/>
    </head>
    <body class="body">
        <table class="TCarrousel" border="0"> 
            <tr>
                <td>
                    <a id="prev2" class="prev" href="#" border="0"></a>
                </td>
                <td> 
                    <div class="list_carousel">
                        <ul id="foo2">
                            <?php
                                while ($row=mysql_fetch_array($fila)){
					$url_img = $row['url_img'];	
                                        echo '<li>'; 
                                            echo '<img src="'.$url_img.'"'.'  class="Slide" ></img>';
                                        echo '</li>';
                                }
                                mysql_close($conexion);
                            ?>

                        </ul> 
                    </div>
                </td>
                <td>
                    <a id="next2" class="next" href="#"></a>
                </td>
            </tr>
        </table>   
    </body>
</html>