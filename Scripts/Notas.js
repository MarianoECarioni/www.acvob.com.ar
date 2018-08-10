function Modif_Nota(datos)
{
// 
    Fidnota   = datos['idnota'].value;
    Fpie      = datos['ipie'].value;
    Ftitulo   = datos['ititulo'].value;
    Fimagen   = datos['imagen'].value;
    Fdetcorto = datos['idetallecorto'].value;
    Fdetlargo = datos['idetallelargo'].value;
    Ftiponota = 1;
     
    Fdetcorto = Fdetcorto.replace(/\r?\n/g,"<br>");
    Fdetlargo = Fdetlargo.replace(/\r?\n/g,"<br>");         
    
     
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "modificarNotaPrin.php?&Iidnota="+Fidnota+"&Ipie="+Fpie+"&Ititulo="+Ftitulo+"&Iimagen="+Fimagen+"&Itiponota="+Ftiponota+"&Idetallecorto="+Fdetcorto+"&Idetallelargo="+Fdetlargo, false);
// Indicamos que funci�n vigila el cambio de estado
	ajax.onreadystatechange=function() {
		if (ajax.readyState === 4) {
// Mostramos resultado
                     alert ("Nota modificada");
//                          alert(ajax.responseText);
		}
		else {
                    alert(ajax.responseText);
                }
	};
	ajax.send(null);
}
//
function ajaxobj() {
var ajaxobject; 
if (window.XMLHttpRequest) 
  { 
  // code for IE7+, Firefox, Chrome, Opera, Safari 
  _ajaxobj=new XMLHttpRequest(); 
  } 
else if (window.ActiveXObject) 
  { 
  // code for IE6, IE5 
  _ajaxobj=new ActiveXObject("Microsoft.XMLHTTP"); 
  } 
else 
  { 
//The browser doesn�t support Ajax. 
  alert("Your browser does not support Ajax!"); 
  } 
  return _ajaxobj;
} 

function Borrar_Imagen(idnota, idimagen)
{
//  
    //alert(idnota);
    //alert(idimagen);
    //alert("Entre");
    Fidnota     = idnota;
  //  alert("idnota: "+Fidnota);
    Fidimagen   = idimagen;
   // alert("idimagen: "+Fidimagen);
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "BorrarImagen.php?&Iidnota="+Fidnota+"&Iidimagen="+Fidimagen, false);
      //  alert("salio");
// Indicamos que función vigila el cambio de estado
	ajax.onreadystatechange=function() {
		if (ajax.readyState === 4) {
// Mostramos resultado
                     alert ("Imagen eliminada");
//                          alert(ajax.responseText);
		}
		else {
                    alert(ajax.responseText);
                }
	};
	ajax.send(null);
        location.reload();
}


function Insertar_Imagen(idnota, idimagen)
{
//  
  //  alert(datos);
   // alert("Entre");
    Fidnota     = idnota;
   // alert("idnota: "+Fidnota);
    Fidimagen   = idimagen;
    
   // alert("idimagen: "+Fidimagen);
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "InsertarImagen.php?&Iidnota="+Fidnota+"&Iidimagen="+Fidimagen, false);
     //   alert("salio");
// Indicamos que funci�n vigila el cambio de estado
	ajax.onreadystatechange=function() {
		if (ajax.readyState === 4) {
// Mostramos resultado
                    // alert ("Registro Insertado");
//                          alert(ajax.responseText);
		}
		else {
                    alert(ajax.responseText);
                }
	};
	ajax.send(null);
        location.reload();
}

function Subir_imagenes(idnota, cantidad)
{
//  
  //  alert(datos);
    alert("Entre");
    Fidnota     = idnota;
   // alert("idnota: "+Fidnota);
    FCantidad   = cantidad;
    
   // alert("idimagen: "+Fidimagen);
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
 //<form action="file.php?idnotaImg=<?php echo $Param; ?>&Cantidad=<?php echo $cantidad; ?>" method="post" enctype="multipart/form-data">
        ajax.open("POST", "file.php?&idnotaImg="+Fidnota+"&Cantidad="+FCantidad, false);
//	ajax.open("GET", "InsertarImagen.php?&Iidnota="+Fidnota+"&Iidimagen="+Fidimagen, false);
     //   alert("salio");
// Indicamos que funci�n vigila el cambio de estado
	ajax.onreadystatechange=function() {
		if (ajax.readyState === 4) {
// Mostramos resultado
                     alert ("Imagenes subidas correctamente");
//                          alert(ajax.responseText);
		}
		else {
                    alert(ajax.responseText);
                }
	};
	ajax.send(null);
        location.reload();
}

//