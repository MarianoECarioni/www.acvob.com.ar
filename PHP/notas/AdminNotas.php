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
?>
<html>
<head>
  <Title>uco_voley</Title>
  <link rel="stylesheet" type="text/css" href="estilos3.css" />
  <link rel="stylesheet" type="text/css" href="carrusel.css" />
  <link rel="stylesheet" type="text/css" href="menuh.css"    />
  <link rel="stylesheet" type="text/css" href="Notas.css"    />  
	<script type="text/javascript" language="javascript" src="jquery.js"></script>
	<script type="text/javascript" language="javascript" src="jquery.carouFredSel-4.4.3-packed.js"></script>
	<script type="text/javascript" language="javascript" src="funciones.js"></script>
	<meta property="fb:admins" content="1456789350558"/>
</head>
<body class="body1">
<table class="TPrincipal"  border="0" >
<!--******************************************  BANNER ******************************************-->
    <tr class="LinEncab" >
       <td class="ColEncab">
          <img src="cabecera.png" width="95%">
       </td>
    </tr>
<!--******************************************  MERNU *******************************************-->
    <tr class="FilMenuH">
      <td>
       <table id="menu" border="0">
         <tr>
            <td class="boton"><a href="Planillas.html"></a></td>
            <td class="boton"><a href="Instituciones-2014.doc"></a></td>            
            <td class="boton"><a href="http://picasaweb.google.es/ucovoley"></a></td>            
            <td class="boton"><a href="Resena.html"></a></td>
            <td class="boton"><a href="mailto:ucovoley@yahoo.com.ar"></a></td> -->
         </tr>
        </table>   
      </td>
 </tr>
    <tr><td><br></td></tr>
 <!--****************************************** NOTAS 1 *** *************************************-->
    <tr>
      <td>
         <table id="notas">
           <tr>
                <td>
                    <iframe name="NotaPrin"  src="frmCargaNotaPrincipal.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 frameborder=0 scrolling=no  width="448px" height="360px"> 
                    </iframe>	
                </td>
                <td>
                    <iframe src="frmCargaNotaSecun.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=448pt height=360pt scrolling=no >
                   </iframe>
                </td>
           <td class="publi">
                <table id="publicidad" >
                   <tr ><td colspan="2"><h1>BOLETINES</h1></td></tr>
                   <tr><td ><img src="word.png" width=30pt></td>
                       <td ><a href="Boletin-01-2015.docx" >Boletin-01-2015.docx</a></td></tr>
                   <tr><td ><img src="word.png" width=30pt></td>
                       <td ><a href="Boletin-01-2014.doc" >Boletin-01-2014.doc</a></td></tr>
                   <tr>
                       <td ><img src="word.png" width=30pt></td>
                       <td ><a href="Boletin-02-2014.doc" >Boletin-02-2014.doc</a></td></tr>
                  <tr ><td colspan="2"><h1>DOCUMENTOS</h1></td></tr>
                   <tr><td ><img src="word.png" width=30pt></td>
                       <td ><a href="Posiciciones-Finales-Clausura-2011.doc" >Posiciciones-Finales-Clausura-2011.doc</a></td></tr>
                   <tr>
                       <td ><img src="word.png" width=30pt></td>
                       <td ><a href="Posiciones-Clausura-2011.doc" >Posiciones-Clausura-2011.doc</a></td></tr>                  
                   <tr>
                       <td ><img src="word.png" width=30pt></td>
                       <td ><a href="ComunicadoOficial.docx" >ComunicadoOficial.docx</a></td></tr>                       
                                                          
                </table>                
           </td>    
         </table><br>
      </td>
     </tr>
<!--**************************************  TABLA DE LOGOS  *******************************************-->
  <tr>
      <td>
         <table id="TEscudos" border="0"> 
              <tr>
                  <td></td>
              </tr>
         </table><br>                   
      </td>
  </tr>
 <!-- <tr>
    <td>
        <h1>NOTICAS</h1>
    </td>
  </tr> -->
  <!--<tr><td>
       <table BGCOLOR="#8888FF" align="center"><tr><td><img src="protocolo.png" >
	    </table>
	  </td>	
  </tr>  -->
    
   </td>  
  </tr>
  <tr><td><!--<h2>En este primer torneo contamos con 78 equipos entre todas las categor&iacute;as superiores y muchos m&aacute;s que participar&aacute;n
               en los torneos de categor&iacute;as inferiores</h2>
          <h1>¡¡¡ GRACIAS A TODOS POR SU PARTICIPACION EN LOS TORNEOS DE UCO !!!</h1> --><br>
  </td></tr> 
<!--************************************ NOTAS SECUNDARIAS Y TABLAS  ***********************************-->    
  <tr>
     <td>
       <table>
       <tr><td>
           <table id="nota_secundaria_2">
           <tr><td colspan="2">
                 <table id="notas_antiguas">
                  <tr><td class="logo"></td>
                      <td><P>Notas</p></td>
                  </tr>
                 </table>                             
           </td></tr>
           <!-- ------------------------------- -->
           <!--      NOTA IZQUIERDA 1 CON FOTO  -->
           <tr><td class="colIzq">
            <!--   <table id="nota_ex_principal" style="background-image: url(https://lh3.googleusercontent.com/-QIOACtIG0ag/UND7JNp-mpI/AAAAAAAABSY/2-ebLZDz4Tk/s288/DSC00483.JPG)" >
                    <tr  class="foto" <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-QIOACtIG0ag/UND7JNp-mpI/AAAAAAAABSY/2-ebLZDz4Tk/s640/DSC00483.JPG',' ');return false">
                       <td></td>
                    </tr>
                    <tr  class="piefoto">
                       <td><p>Final Mayores</p></td>                            
                    </tr>
                    <tr  class="pie">
                       <td>
                           <h1>Campe&oacute;n Mayores 2ra.</h1>
                           <p>Campe&oacute;n Los Indios de Moreno tras ganarle a Santos, pero ascenso para ambos. M&aacute;s fotos <a href="https://picasaweb.google.com/ucovoley/Clausura2012#5823430453893175954"> ac&aacute;</p>
                       </td> 
                    </tr>
               </table> -->
	   <iframe src="NotaUno.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=314pt height=252pt scrolling=no >
           </iframe>
           </td>
           <!--      NOTA DERECHA 1 CON FOTO  -->           
           <td>    
               <table id="nota_ex_principal" style="background-image: url(https://lh4.googleusercontent.com/-GXGjLnodzfw/UM_AfzDNgkI/AAAAAAAABMY/T_6Xg4siyPE/s288/DSC00576.JPG )">
                    <tr  class="foto" <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-GXGjLnodzfw/UM_AfzDNgkI/AAAAAAAABMY/T_6Xg4siyPE/s640/DSC00576.JPG',' ');return false">
                       <td></td>
                    </tr>
                    <tr  class="piefoto">
                       <td><p>David</p></td>                            
                    </tr>
                    <tr  class="pie">
                       <td>
                           <h1>Entrenador Destacado.</h1>
                           <p>David, entrenador de Policial recibi&oacute; una distinci&oacute;n al entrenador destacado de la temporada por su tarea 
                              con los equipos de Policial.</p>
                       </td> 
                    </tr>
               </table>           
            </td></tr>
           <!--      NOTA IZQUIERDA 1 SIN FOTO  -->
            <tr><td class="colIzq">
               <table id="nota_ex_principal_sin_foto" >
                    <tr>              
                       <td>
                           <h2>Posiciones Clausura 2012 Maxi 1ra.</h2>
                           <table class="TPosFinales"><tr><td>
                           <p class="posFinales">
                              1-LIM             <br>					
                              2-PADUA				   <br>
                              3-IRUPE				   <br>
                              4-POLICIAL			   <br> 
                              5-CAFA					   <br>
                              6-SANTOS				   <br>
                              7-HSJ					   </p></td>
                            <td><p class="posFinales"> 
                              8-DH			         <br>			
                              9-FRENCH				   <br>
                              10-LOMAS				   <br>
                              11-CAVA				   <br>
                              12-EL TRIUNFO     <br>
                              13-SAPA <img src="flecha-abajo.jpg"> 			   <br>
                              14-ICM <img src="flecha-abajo.jpg"> </p></td></tr></table>
                        </td> 
                    </tr>
               </table>
           </td>
           <!--      NOTA DERECHA 1 SIN FOTO  -->           
           <td>    
               <table id="nota_ex_principal_sin_foto">
                    <tr>
                       <td>
                          <h2>Posiciones Clausura 2012 Maxi 2da.</h2>
                           <table class="TPosFinales"><tr><td>                          
                           <p class="posFinales">
                              1-SFA	<img src="flecha-arriba.jpg">           <br>					
                              2-POL. A <img src="flecha-arriba.jpg">   <br>
                              3-CAFA				       <br> 
                              4-POL. B		   <br> 
                              5-DH				         <br>
                              6-CAVA				       </td>
                            <td><p class="posFinales"> 
                              7-EL RETIRO			     <br>
                              8-CCBP				       <br>			
                              9-LA LOMITA			     <br>
                              10-SAPA              <br>
                              11-SANTOS			       <br>
                              12-RIVADAVIA         </p></td></tr></table>                       
                       </td>  
                    </tr>     
               </table>       
            </td></tr>           
           <!-- ------------------------------- -->
           <!--      NOTA IZQUIERDA 1 CON FOTO  -->
           <tr><td class="colIzq">
               <table id="nota_ex_principal" style="background-image: url(https://lh4.googleusercontent.com/-EzXFQaeRrys/UM_AhsK-eeI/AAAAAAAABMg/hK8BiCn6Vlk/s288/DSC00577.JPG)" >
                    <tr  class="foto" <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-EzXFQaeRrys/UM_AhsK-eeI/AAAAAAAABMg/hK8BiCn6Vlk/s640/DSC00577.JPG',' ');return false">
                       <td></td>
                    </tr>     
                    <tr  class="piefoto">
                       <td><p>Marta Vazquez</p></td>                            
                    </tr>
                    <tr  class="pie">
                       <td>
                           <h1>Entrenadora Destacada</h1>
                           <p>Marta recibi&oacute; el premio a la entrenadora destacada de la temporada por su gran trabajo con Los Pinos.</p>
                       </td> 
                    </tr>
               </table>
           </td>
           <!--      NOTA DERECHA 1 CON FOTO  -->           
           <td>    
               <table id="nota_ex_principal" style="background-image: url(https://lh3.googleusercontent.com/-_RdjkuIigsM/UM_BqCxnRqI/AAAAAAAABOI/BF_RiJ2HsFs/s288/DSC00593.JPG)">
                    <tr  class="foto" <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-_RdjkuIigsM/UM_BqCxnRqI/AAAAAAAABOI/BF_RiJ2HsFs/s640/DSC00593.JPG',' ');return false">
                       <td></td>
                    </tr>
                    <tr  class="piefoto">
                       <td><p>Hurac&aacute;n de San Justo</p></td>                            
                    </tr>
                    <tr  class="pie">
                       <td>
                           <h1>Campe&oacute;n Mayores 1ra.</h1>
                           <p>Las chicas de Hurac&aacute;n de San Justo se consagraron campeonas del torneo Apertura 2012.</p>
                       </td> 
                    </tr>
               </table>           
            </td></tr>
           <!--      NOTA IZQUIERDA 1 SIN FOTO  -->
            <tr><td class="colIzq">
               <table id="nota_ex_principal_sin_foto" >
                    <tr>              
                       <td>
                           <h2>Posiciones Clausura 2012 Mayores Damas 1ra.</h2>
                           <table class="TPosFinales"><tr><td>
                           <p class="posFinales">
                             1-LOS PINOS         <br>
                             2-PARQUE SARMIENTO  <br>
                             3-FRENCH            <br>
                             4-SANTOS            <br>
                             5-LOMAS             <br>
                             6-CIME              <br>
                             7-PONTEVEDRA        </p></td>
                            <td><p class="posFinales">
                             8-PADUA             <br>
                             9-LIM               <br> 
                             10-PARQUE SM        <br>  
                             11-CCSD             <br> 
                             12-EL TRIUNFO       <br> 
                             13-HSJ <img src="flecha-abajo.jpg">            <br> 
                             14-ALMAFUERTE. <img src="flecha-abajo.jpg">      
                      </p></td></tr></table>
                        </td> 
                    </tr>
               </table>
           </td>
           <!--      NOTA DERECHA 1 SIN FOTO  -->           
           <td>    
               <table id="nota_ex_principal_sin_foto">
                    <tr>
                       <td>
                          <h2>Posiciones Clausura 2012 Mayores Damas 2da.</h2>
                           <table class="TPosFinales"><tr><td>                          
                           <p class="posFinales">
                              1° HSJ <img src="flecha-arriba.jpg"> <br>					
                              2° CAVA <img src="flecha-arriba.jpg"> <br>
                              3° POLICIAL		   <br> 
                              4° LOS PINOS	   <br> 
                              5° CIME				   <br>
                              6° ICM				   </p></td>
                            <td><p class="posFinales">
                              7° EL TRIUNFO     <br> 
                              8° LA LOMITA	    <br>
                              9° CSLM				    <br>			
                              10° CEPA			    <br>
                              11° RIVADAVIA	    </p></td></tr></table>
                       </td>  
                    </tr>     
               </table>       
            </td></tr>                           
           </table>
       <!-- ------------------------------- -->           
       </td>
       <td>
            <table id="Tablas" border="0">
            <tr><td>
                  <table id="posiciones" border="0">
                     <tr><td class="logo"></td>
                        <td><P>Posiciones</p></td>
                     </tr>
                 </table>
            </td></tr>   
            <tr><td>
                   <iframe src="PHP/Posiciones.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=348pt height=350pt scrolling=no >
                   </iframe>
            </td></tr>
            </table>
            <table id="Tablas">
            <tr><td>
                  <table id="posiciones">
                     <tr><td class="logo"></td>
                        <td><P>Fixture</p></td>
                     </tr>
                 </table>
            </td></tr>            
            <tr><td>
                   <iframe src="PHP/Fixture.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=348pt height=350pt scrolling=no >
                   </iframe>
            </td></tr>            
            </table> 
       </td>       
       </tr>
       </table>            
  </td>
  </tr>
<!--**************************************  CARRUSEL DE FOTOS  ****************************************-->
  <tr>
      <td>
         <table class="TCarrousel" border="0" bgcolor="#CCCCCC"> 
         <tr>
             <td >
                <a id="prev2" class="prev" href="#"></a>
             </td>
             <td> 
                <div class="list_carousel">
                  <ul id="foo2">
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-C9Fllde8qsQ/UceidktHffI/AAAAAAAABUM/JLUTfATFxWo/s640/DSC01251.JPG',' ');return false"> 
                          <img src="https://lh5.googleusercontent.com/-C9Fllde8qsQ/UceidktHffI/AAAAAAAABUM/JLUTfATFxWo/s288/DSC01251.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-zKY0Er2VEZw/Uce8BwP9J4I/AAAAAAAABU4/c64zvT994YQ/s640/DSC01242.JPG',' ');return false"> 
                          <img src="https://lh4.googleusercontent.com/-zKY0Er2VEZw/Uce8BwP9J4I/AAAAAAAABU4/c64zvT994YQ/s288/DSC01242.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-ujsZNDjkjQM/Uce8C5vgeMI/AAAAAAAABU4/YFpc4Ulbjyk/s640/DSC01243.JPG',' ');return false"> 
                          <img src="https://lh3.googleusercontent.com/-ujsZNDjkjQM/Uce8C5vgeMI/AAAAAAAABU4/YFpc4Ulbjyk/s288/DSC01243.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-ZUqmDMtyiLM/UM-7Y5uVvGI/AAAAAAAABFQ/TfqtHvKmROI/s640/DSC00503.JPG',' ');return false"> 
                          <img src="https://lh4.googleusercontent.com/-ZUqmDMtyiLM/UM-7Y5uVvGI/AAAAAAAABFQ/TfqtHvKmROI/s288/DSC00503.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-8xJn6S5LjaI/UM-7aA_rZrI/AAAAAAAABFY/j3LN7RVOFEk/s640/DSC00505.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-8xJn6S5LjaI/UM-7aA_rZrI/AAAAAAAABFY/j3LN7RVOFEk/s288/DSC00505.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-F14RRyDSKCs/UM-7re2AtFI/AAAAAAAABF4/pnURjwcDUpg/s640/DSC00509.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-F14RRyDSKCs/UM-7re2AtFI/AAAAAAAABF4/pnURjwcDUpg/s288/DSC00509.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-N3xlp7z9cT4/UM-7qKzZj7I/AAAAAAAABFw/bxe4PnbzmTY/s640/DSC00510.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-N3xlp7z9cT4/UM-7qKzZj7I/AAAAAAAABFw/bxe4PnbzmTY/s288/DSC00510.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-PwHoiqPq3wo/UM-78Jr0aoI/AAAAAAAABGQ/xIHMFPbt7sg/s640/DSC00514.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-PwHoiqPq3wo/UM-78Jr0aoI/AAAAAAAABGQ/xIHMFPbt7sg/s288/DSC00514.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-a3-_rQ4MQg4/UM-8KhukJpI/AAAAAAAABGY/9W6wz1jkzmw/s640/DSC00515.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-a3-_rQ4MQg4/UM-8KhukJpI/AAAAAAAABGY/9W6wz1jkzmw/s288/DSC00515.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-QRHODYuCnnE/UM-8K3MJv4I/AAAAAAAABGc/y3jnI-kfif0/s640/DSC00516.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-QRHODYuCnnE/UM-8K3MJv4I/AAAAAAAABGc/y3jnI-kfif0/s288/DSC00516.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-xyJX_lRotz4/UM-8LzUgI5I/AAAAAAAABGo/Jaa4UayKGSo/s640/DSC00517.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-xyJX_lRotz4/UM-8LzUgI5I/AAAAAAAABGo/Jaa4UayKGSo/s288/DSC00517.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-vilkxx7whKs/UM-8cKo572I/AAAAAAAABG4/2x_sQEhvywE/s640/DSC00518.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-vilkxx7whKs/UM-8cKo572I/AAAAAAAABG4/2x_sQEhvywE/s288/DSC00518.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-fM-ZV6He5Cw/UM-8aaJoVhI/AAAAAAAABGw/5cu5O90tvY8/s640/DSC00519.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-fM-ZV6He5Cw/UM-8aaJoVhI/AAAAAAAABGw/5cu5O90tvY8/s288/DSC00519.JPG "  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-y_iZMHicKSc/UM-8cq0AQdI/AAAAAAAABHA/GemEVXhnWQY/s640/DSC00520.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-y_iZMHicKSc/UM-8cq0AQdI/AAAAAAAABHA/GemEVXhnWQY/s288/DSC00520.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-48ms20venU8/UM-8rD_4s1I/AAAAAAAABHI/tcq-RIOCVuc/s640/DSC00521.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-48ms20venU8/UM-8rD_4s1I/AAAAAAAABHI/tcq-RIOCVuc/s288/DSC00521.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-Jm4aj62yFOY/UM-8tJxgWTI/AAAAAAAABHQ/SKKrIqy9nNs/s640/DSC00522.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-Jm4aj62yFOY/UM-8tJxgWTI/AAAAAAAABHQ/SKKrIqy9nNs/s288/DSC00522.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-mN3ocjPEBho/UM-8tp21R1I/AAAAAAAABHU/MAjSyqtQxmU/s640/DSC00523.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-mN3ocjPEBho/UM-8tp21R1I/AAAAAAAABHU/MAjSyqtQxmU/s288/DSC00523.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-F7LCZhwusNQ/UM-883LkhWI/AAAAAAAABHk/aMyN8_9nCN0/s640/DSC00524.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-F7LCZhwusNQ/UM-883LkhWI/AAAAAAAABHk/aMyN8_9nCN0/s288/DSC00524.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-EiwYcG0PfmY/UM-89ooyi2I/AAAAAAAABHg/_1fSxn00MM0/s640/DSC00525.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-EiwYcG0PfmY/UM-89ooyi2I/AAAAAAAABHg/_1fSxn00MM0/s288/DSC00525.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-ge0xEo0SuPM/UM-8_LhoR8I/AAAAAAAABHw/YNV7QHYUmsA/s640/DSC00526.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-ge0xEo0SuPM/UM-8_LhoR8I/AAAAAAAABHw/YNV7QHYUmsA/s288/DSC00526.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-M5ZilKCDTjA/UM-9PzIyW4I/AAAAAAAABH4/mBRzOrQHVUc/s640/DSC00527.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-M5ZilKCDTjA/UM-9PzIyW4I/AAAAAAAABH4/mBRzOrQHVUc/s288/DSC00527.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-dwVlApNczzw/UM-9P_9ltXI/AAAAAAAABIA/MJ_gjk5KMVk/s640/DSC00528.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-dwVlApNczzw/UM-9P_9ltXI/AAAAAAAABIA/MJ_gjk5KMVk/s288/DSC00528.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-fLf8pPw1q5s/UM-9Rd9CRuI/AAAAAAAABIE/qIWTpNQLTsM/s640/DSC00530.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-fLf8pPw1q5s/UM-9Rd9CRuI/AAAAAAAABIE/qIWTpNQLTsM/s288/DSC00530.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-nXNI6v-RPnU/UM-9gsP95sI/AAAAAAAABIQ/xeRZfI7w-XQ/s640/DSC00531.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-nXNI6v-RPnU/UM-9gsP95sI/AAAAAAAABIQ/xeRZfI7w-XQ/s288/DSC00531.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-3cnAGnt6Yr8/UM-9iZ0knJI/AAAAAAAABIg/XnCsHwcApUU/s640/DSC00532.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-3cnAGnt6Yr8/UM-9iZ0knJI/AAAAAAAABIg/XnCsHwcApUU/s288/DSC00532.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-LDDrSPmboH8/UM-9jPq4v5I/AAAAAAAABIY/cjfaNd2gayU/s640/DSC00533.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-LDDrSPmboH8/UM-9jPq4v5I/AAAAAAAABIY/cjfaNd2gayU/s288/DSC00533.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-RbpS_xa2tjk/UM-9xW0d7FI/AAAAAAAABIo/ilrfsuELJy0/s640/DSC00534.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-RbpS_xa2tjk/UM-9xW0d7FI/AAAAAAAABIo/ilrfsuELJy0/s288/DSC00534.JPG" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-kQShuXLHiDM/UM-92eguuxI/AAAAAAAABI4/41Eak4RKdGE/s640/DSC00536.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-kQShuXLHiDM/UM-92eguuxI/AAAAAAAABI4/41Eak4RKdGE/s288/DSC00536.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-F71k8G-9elI/UM--Cya5KnI/AAAAAAAABJA/IFHipS9-YfM/s640/DSC00537.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-F71k8G-9elI/UM--Cya5KnI/AAAAAAAABJA/IFHipS9-YfM/s288/DSC00537.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-YOkEoaybQkI/UM--FoV6LlI/AAAAAAAABJI/UYlHAY_hrwg/s640/DSC00538.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-YOkEoaybQkI/UM--FoV6LlI/AAAAAAAABJI/UYlHAY_hrwg/s288/DSC00538.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-wVr0tGm9FSc/UM--GyG-pyI/AAAAAAAABJQ/hINWuqfbjTU/s640/DSC00539.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-wVr0tGm9FSc/UM--GyG-pyI/AAAAAAAABJQ/hINWuqfbjTU/s288/DSC00539.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-QcXzDSP_FRo/UM--WDgrk8I/AAAAAAAABJY/bj2ikq9xHj4/s640/DSC00540.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-QcXzDSP_FRo/UM--WDgrk8I/AAAAAAAABJY/bj2ikq9xHj4/s288/DSC00540.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-wMftwpnlbP4/UM--YW6ULDI/AAAAAAAABJg/OO8HytqyehU/s640/DSC00541.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-wMftwpnlbP4/UM--YW6ULDI/AAAAAAAABJg/OO8HytqyehU/s288/DSC00541.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-7FEd8YwVutg/UM--Zh6mDvI/AAAAAAAABJo/jJIY9BqIFTM/s640/DSC00542.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-7FEd8YwVutg/UM--Zh6mDvI/AAAAAAAABJo/jJIY9BqIFTM/s288/DSC00542.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-qasNmNFSShA/UM--oED9AuI/AAAAAAAABJ4/qUU-aypmzr4/s640/DSC00543.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-qasNmNFSShA/UM--oED9AuI/AAAAAAAABJ4/qUU-aypmzr4/s288/DSC00543.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-FzaBnGeP3kM/UM--nySyPmI/AAAAAAAABJw/_b3STi0iQvo/s640/DSC00544.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-FzaBnGeP3kM/UM--nySyPmI/AAAAAAAABJw/_b3STi0iQvo/s288/DSC00544.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-fYZM7TNYBmQ/UM--5ASeiTI/AAAAAAAABKI/RTEO9GIWauI/s640/DSC00546.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-fYZM7TNYBmQ/UM--5ASeiTI/AAAAAAAABKI/RTEO9GIWauI/s288/DSC00546.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-iwuhNMQf88A/UM--6-hmguI/AAAAAAAABKQ/gPLLasyEPVQ/s640/DSC00547.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-iwuhNMQf88A/UM--6-hmguI/AAAAAAAABKQ/gPLLasyEPVQ/s288/DSC00547.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-HKQHVGQRoeI/UM--7uDYkRI/AAAAAAAABKY/0dTu-MgWVvo/s640/DSC00552.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-HKQHVGQRoeI/UM--7uDYkRI/AAAAAAAABKY/0dTu-MgWVvo/s288/DSC00552.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-noH-zVEsYa8/UM-_JR1jjlI/AAAAAAAABKg/IYZ_2UyOOG4/s640/DSC00561.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-noH-zVEsYa8/UM-_JR1jjlI/AAAAAAAABKg/IYZ_2UyOOG4/s288/DSC00561.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-BMlsv7eb1Vo/UM-_LFXP2eI/AAAAAAAABKo/iOR99uOVpX8/s640/DSC00562.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-BMlsv7eb1Vo/UM-_LFXP2eI/AAAAAAAABKo/iOR99uOVpX8/s288/DSC00562.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-S7A6a3Xsp8Q/UM-_ONDBfQI/AAAAAAAABKw/qzE7_kZlWqg/s640/DSC00563.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-S7A6a3Xsp8Q/UM-_ONDBfQI/AAAAAAAABKw/qzE7_kZlWqg/s288/DSC00563.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-jp_si0co_UM/UM-_a1L9zaI/AAAAAAAABK4/vOfPHfG_CX8/s640/DSC00564.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-jp_si0co_UM/UM-_a1L9zaI/AAAAAAAABK4/vOfPHfG_CX8/s288/DSC00564.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-gapr1xWddXc/UM-_cQFybnI/AAAAAAAABLA/UXFDsizJxaA/s640/DSC00565.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-gapr1xWddXc/UM-_cQFybnI/AAAAAAAABLA/UXFDsizJxaA/s288/DSC00565.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-UbjVkrubFlE/UM-_gMvApHI/AAAAAAAABLI/JhRc542_5Qo/s640/DSC00566.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-UbjVkrubFlE/UM-_gMvApHI/AAAAAAAABLI/JhRc542_5Qo/s288/DSC00566.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-IiSEljBSjIM/UM-_sm1WknI/AAAAAAAABLQ/FLVgokMhk20/s640/DSC00567.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-IiSEljBSjIM/UM-_sm1WknI/AAAAAAAABLQ/FLVgokMhk20/s288/DSC00567.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-otEFMNewy94/UM-_usk53FI/AAAAAAAABLY/-Drv8CS4K08/s640/DSC00568.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-otEFMNewy94/UM-_usk53FI/AAAAAAAABLY/-Drv8CS4K08/s288/DSC00568.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-E8r0bYVmvDQ/UM-_wk_REnI/AAAAAAAABLg/7d53gmVlwck/s640/DSC00569.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-E8r0bYVmvDQ/UM-_wk_REnI/AAAAAAAABLg/7d53gmVlwck/s288/DSC00569.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-6DHvxO5QiFg/UM-_-cd_u5I/AAAAAAAABLo/CpQTL9c9bY8/s640/DSC00570.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-6DHvxO5QiFg/UM-_-cd_u5I/AAAAAAAABLo/CpQTL9c9bY8/s288/DSC00570.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-TdL1xeTe-88/UM_ABNEVMBI/AAAAAAAABLw/t1rvCWmebBc/s640/DSC00571.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-TdL1xeTe-88/UM_ABNEVMBI/AAAAAAAABLw/t1rvCWmebBc/s288/DSC00571.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-3CbC1VooZ3s/UM_ADDPEkOI/AAAAAAAABL4/IMyO21o-q78/s640/DSC00572.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-3CbC1VooZ3s/UM_ADDPEkOI/AAAAAAAABL4/IMyO21o-q78/s288/DSC00572.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-proPfhX1Zxk/UM_APRGkt-I/AAAAAAAABMA/JqqOf0wcEJQ/s640/DSC00573.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-proPfhX1Zxk/UM_APRGkt-I/AAAAAAAABMA/JqqOf0wcEJQ/s288/DSC00573.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-mqTfPMbkhH8/UM_AQDAdHiI/AAAAAAAABME/om2-GmQq5NY/s640/DSC00574.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-mqTfPMbkhH8/UM_AQDAdHiI/AAAAAAAABME/om2-GmQq5NY/s288/DSC00574.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-EzXFQaeRrys/UM_AhsK-eeI/AAAAAAAABMg/hK8BiCn6Vlk/s640/DSC00577.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-EzXFQaeRrys/UM_AhsK-eeI/AAAAAAAABMg/hK8BiCn6Vlk/s288/DSC00577.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-XFcm5i96uTE/UM_Alzyqo0I/AAAAAAAABMo/U_Mctn4x1SM/s640/DSC00578.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-XFcm5i96uTE/UM_Alzyqo0I/AAAAAAAABMo/U_Mctn4x1SM/s288/DSC00578.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-6vnurnJ8sQY/UM_Aw2eR9NI/AAAAAAAABMw/Q2IAen1wU5w/s640/DSC00579.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-6vnurnJ8sQY/UM_Aw2eR9NI/AAAAAAAABMw/Q2IAen1wU5w/s288/DSC00579.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-j8JcGysAk9s/UM_Az8FcBbI/AAAAAAAABM4/Vy_VNeycS00/s640/DSC00580.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-j8JcGysAk9s/UM_Az8FcBbI/AAAAAAAABM4/Vy_VNeycS00/s288/DSC00580.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-kWTuuTVHGJw/UM_A2m1rovI/AAAAAAAABNA/WUErJQDx-V4/s640/DSC00581.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-kWTuuTVHGJw/UM_A2m1rovI/AAAAAAAABNA/WUErJQDx-V4/s288/DSC00581.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-n3XeWDWuF9o/UM_BEff-82I/AAAAAAAABNI/UO9VVATE9pk/s640/DSC00582.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-n3XeWDWuF9o/UM_BEff-82I/AAAAAAAABNI/UO9VVATE9pk/s288/DSC00582.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-ctTgBKrxqIM/UM_BFhSyW3I/AAAAAAAABNM/PeIwOQGQfaU/s640/DSC00584.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-ctTgBKrxqIM/UM_BFhSyW3I/AAAAAAAABNM/PeIwOQGQfaU/s288/DSC00584.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-dI6ASq_m_zU/UM_BIZwZWEI/AAAAAAAABNY/_AYQNUs_37E/s640/DSC00586.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-dI6ASq_m_zU/UM_BIZwZWEI/AAAAAAAABNY/_AYQNUs_37E/s288/DSC00586.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-saoJnUE06cM/UM_BV72KP7I/AAAAAAAABNk/ybfxvnDvkUI/s640/DSC00588.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-saoJnUE06cM/UM_BV72KP7I/AAAAAAAABNk/ybfxvnDvkUI/s288/DSC00588.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-eKgb7PYqkOc/UM_BZnKLeGI/AAAAAAAABNw/NrJyqMfPE4I/s640/DSC00589.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-eKgb7PYqkOc/UM_BZnKLeGI/AAAAAAAABNw/NrJyqMfPE4I/s288/DSC00589.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-sJj8dxhV3IQ/UM_Bnvm4Y5I/AAAAAAAABN8/psc6fE0IoXY/s640/DSC00590.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-sJj8dxhV3IQ/UM_Bnvm4Y5I/AAAAAAAABN8/psc6fE0IoXY/s288/DSC00590.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-gQFZd1DycRE/UM_BnePfltI/AAAAAAAABN4/U5uRYxXqdPs/s640/DSC00591.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-gQFZd1DycRE/UM_BnePfltI/AAAAAAAABN4/U5uRYxXqdPs/s288/DSC00591.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-_RdjkuIigsM/UM_BqCxnRqI/AAAAAAAABOI/BF_RiJ2HsFs/s640/DSC00593.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-_RdjkuIigsM/UM_BqCxnRqI/AAAAAAAABOI/BF_RiJ2HsFs/s288/DSC00593.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-7JZU3jGJzwk/UM_B4UGXdvI/AAAAAAAABOU/-2T4GyxWHSo/s640/DSC00594.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-7JZU3jGJzwk/UM_B4UGXdvI/AAAAAAAABOU/-2T4GyxWHSo/s288/DSC00594.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-gcv1J2lBI00/UM_B4XtZHZI/AAAAAAAABOQ/AqXA9487-hM/s640/DSC00595.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-gcv1J2lBI00/UM_B4XtZHZI/AAAAAAAABOQ/AqXA9487-hM/s288/DSC00595.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-KkDFdn9oqHo/UM_B6HwHDMI/AAAAAAAABOg/sMyEnvKXRlE/s640/DSC00596.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-KkDFdn9oqHo/UM_B6HwHDMI/AAAAAAAABOg/sMyEnvKXRlE/s288/DSC00596.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-GCW-lIWM0rQ/UM_CI-Z-VMI/AAAAAAAABOs/JdxdNi0UAUw/s640/DSC00598.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-GCW-lIWM0rQ/UM_CI-Z-VMI/AAAAAAAABOs/JdxdNi0UAUw/s288/DSC00598.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-sZmUTzRIQqo/UM_CJ5w9ktI/AAAAAAAABO4/tCyd280rxRs/s640/DSC00599.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-sZmUTzRIQqo/UM_CJ5w9ktI/AAAAAAAABO4/tCyd280rxRs/s288/DSC00599.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-FFrx6CQ-CaE/UM_CYZkvYWI/AAAAAAAABPA/Kta1U3pO13U/s640/DSC00600.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-FFrx6CQ-CaE/UM_CYZkvYWI/AAAAAAAABPA/Kta1U3pO13U/s288/DSC00600.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-B5z9KgumCjo/UM_CY2Crd4I/AAAAAAAABPI/xYIS1mETEP8/s640/DSC00601.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-B5z9KgumCjo/UM_CY2Crd4I/AAAAAAAABPI/xYIS1mETEP8/s288/DSC00601.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-eoHGNn6Xeds/UM_Cajf84cI/AAAAAAAABPQ/OJBAmX03ZYs/s640/DSC00602.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-eoHGNn6Xeds/UM_Cajf84cI/AAAAAAAABPQ/OJBAmX03ZYs/s288/DSC00602.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-_ydM3dLOazA/UM_CoGuNZ2I/AAAAAAAABPY/OxLA0eFTowI/s640/DSC00603.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-_ydM3dLOazA/UM_CoGuNZ2I/AAAAAAAABPY/OxLA0eFTowI/s288/DSC00603.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-J3IiACr6148/UM_CpPbIvLI/AAAAAAAABPg/Iap7pcTnc1Y/s640/DSC00604.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-J3IiACr6148/UM_CpPbIvLI/AAAAAAAABPg/Iap7pcTnc1Y/s288/DSC00604.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-k1YlKFfIVcw/UM_C4K6cKqI/AAAAAAAABPw/LWX2Asxop9I/s640/DSC00606.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-k1YlKFfIVcw/UM_C4K6cKqI/AAAAAAAABPw/LWX2Asxop9I/s288/DSC00606.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh5.googleusercontent.com/-OuoNE8dUjXY/UM_C4_-2TeI/AAAAAAAABP4/qg-9C3HsB1M/s640/DSC00609.JPG',' ');return false">
                          <img src="https://lh5.googleusercontent.com/-OuoNE8dUjXY/UM_C4_-2TeI/AAAAAAAABP4/qg-9C3HsB1M/s288/DSC00609.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh3.googleusercontent.com/-B_hoBWnU4kU/UM_C-pOpspI/AAAAAAAABQA/mzOK1u5fSx4/s640/DSC00610.JPG',' ');return false">
                          <img src="https://lh3.googleusercontent.com/-B_hoBWnU4kU/UM_C-pOpspI/AAAAAAAABQA/mzOK1u5fSx4/s288/DSC00610.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh6.googleusercontent.com/-yml766OvqdM/UM_DKFmi0QI/AAAAAAAABQQ/gh-SWj46MaY/s640/DSC00612.JPG',' ');return false">
                          <img src="https://lh6.googleusercontent.com/-yml766OvqdM/UM_DKFmi0QI/AAAAAAAABQQ/gh-SWj46MaY/s288/DSC00612.JPG"  width="288" height="216" ></a>
                     </li>
                     <li> <a href="#" onclick="afoto('https://lh4.googleusercontent.com/-sPCClDov2kk/UM_DMxKtRmI/AAAAAAAABQY/StkMCRLNyQM/s640/DSC00614.JPG',' ');return false">
                          <img src="https://lh4.googleusercontent.com/-sPCClDov2kk/UM_DMxKtRmI/AAAAAAAABQY/StkMCRLNyQM/s288/DSC00614.JPG"  width="288" height="216" ></a>
                     </li>
                  </ul> 
  	            </div>
             </td>
             <td>
	              <a id="next2" class="next" href="#"></a>
             </td>
          </tr>
          </table>   
      </td>
  </tr>     
<!--************************************** FIN CARRUSEL DE FOTOS  ****************************************--> 
    
<!--****************************************** NOTAS 2 *** *************************************-->
   <tr>
     <!-- <td>
          <table border="0" class="tabla_blanca"><tr><td>
           <table id="notas">
           <tr>
              <td>
                <table id="video_principal" border= "0"> 
                       <tr><td class="titulo">
                         <h1>El video de la semana.</h1>
                       </td></tr>                       
                       <tr  class="foto">
                           <td>
                             <iframe width="420" height="315" src="http://www.youtube.com/embed/SEWeDrYtMAc" frameborder="0" allowfullscreen></iframe>  
                             <iframe width="420" height="315" src="http://www.youtube.com/embed/KZ0LfmxBDHY?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                           </td>
                       </tr>
                       <tr  class="pie">
                           <td>
                             <p>Partido de ida en la final de Sub-16, disputado entre San Clemente y Acquerellas. En este primer partido se impuso 
                                Acqarellas por 2 sets a 0.</p>
                           </td> 
                       </tr>
                       <tr class="facebook"><td>
                          comentarios de Facebook 
                             <div id="fb-root"></div>
                          <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                           if (d.getElementById(id)) {return;}
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-comments" data-href="http://www.youtube.com/embed/KZ0LfmxBDHY?feature=player_detailpage" data-num-posts="10" data-width="420"></div>
                   comentarios de Facebook 
                       </td></tr>  
                </table>       
              </td>
              <td>
              </td>
            </tr>
           </table><br>  
         </td> -->
         <td width="550pt">
           <table id="Tablas" border="0">
           <tr><td>
                  <table id="posiciones">
                     <tr><td class="logo"></td>
                        <td><P>Resultados</p></td>
                     </tr>
                 </table>
           </td></tr>   -->         
           <tr><td>
                   <iframe src="PHP/Resultados.php" marginWidth=0 marginHeight=0 frameBorder=0 frameSpacing=0 width=470pt height=315pt scrolling=no >
                   </iframe>
           </td></tr>            
           </table>
         </td></tr> 
         </table>
       </td>       
  </tr>     
</table>              
<table class="TCreditos">
     <tr>
       <td><p>Diseño y código por Mariano Ezequiel Carioni - 2011</p></td>
     </tr>
</table>   
</BODY>
</HTML>							