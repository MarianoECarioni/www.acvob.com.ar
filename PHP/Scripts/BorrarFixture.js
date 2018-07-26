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
//The browser doesn’t support Ajax. 
  alert("Your browser does not support Ajax!"); 
  } 
  return _ajaxobj;
}  
//
function Borra_Fixture(idFix)
{
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "borraFixture.php?actualizar="+idFix, false);
//
// Indicamos que funcion vigila el cambio de estado
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4) {
// Mostramos resultado
//		  alert(ajax.responseText);
         	  alert("Registro borrado");
		}
	}
	ajax.send(null);
}