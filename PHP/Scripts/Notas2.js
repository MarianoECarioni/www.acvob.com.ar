function Modif_Nota(datos)
{
// 
   alert("entre");
   Fpie      = datos['ipie'].value;
   Ftitulo   = datos['ititulo'].value;
   Fimagen   = datos['imagen'].value;
   Fdetcorto = datos['idetallecorto'].value;
   Ftiponota = 1;
   
   Cadena1 = Fdetcorto; 
   Cadena1 = Cadena1.replace(/\r?\n/g,"<br>");
   Fdetcorto = Cadena1;
   alert(Fdetcorto);

//   
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "modificarNotaPrin.php?&Ipie="+Fpie+"&Ititulo="+Ftitulo+"&Iimagen="+Fimagen+"&Itiponota="+Ftiponota+"&Idetallecorto="+Fdetcorto, false);
//
// Indicamos que funci�n vigila el cambio de estado
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4) {
// Mostramos resultado
	      alert ("Registro modificado.");
//		    alert(ajax.responseText);
		}
		else {alert(ajax.responseText);}
	}
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
//