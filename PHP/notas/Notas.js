function Modif_Nota(datos)
{
// 
   Fpie      = datos['ipie'].value;
   Ftitulo   = datos['ititulo'].value;
   Fimagen   = datos['imagen'].value;
   Fdetcorto = datos['idetallecorto'].value;
   Ftiponota = datos['itiponota'].value;
//   
// reemplazo los acentos por &cute;
   Cadena1 = Fdetcorto; 
   Cadena1 = Cadena1.replace(/\n/g,"xn");
   Fdetcorto = Cadena1;
   alert(Fdetcorto);
// 
//     
//   
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "modificarNota.php?&Ipie="+Fpie+"&Ititulo="+Ftitulo+"&Iimagen="+Fimagen+"&Itiponota="+Ftiponota+"&Idetallecorto="+Fdetcorto, false);
//
// Indicamos que función vigila el cambio de estado
	ajax.onreadystatechange=function() 
        {
		if (ajax.readyState == 4) 
                {
                   if (ajax.status == 200) 
                   { 
                    // Mostramos resultado
	            alert ("Registro modificado");
                   } 
                   else
                   {
                    //Muestro el codigo de error
                    alert (ajax.status + "-" + ajax.statusText);
                   }    
		}
		else 
                {
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
//The browser doesn’t support Ajax. 
  alert("Your browser does not support Ajax!"); 
  } 
  return _ajaxobj;
} 

function rl(cadena)
{
    var NCacdena=cadena.replace('Á','&Aacute;');
    
	NCacdena=NCacdena.replace('Á','&Aacute;');
	NCacdena=NCacdena.replace('É','&Eacute;');
	NCacdena=NCacdena.replace('Í','&Iacute;');
	NCacdena=NCacdena.replace('Ó','&Oacute;');
        NCacdena=NCacdena.replace('á','&aacute;');
	NCacdena=NCacdena.replace('é','&eacute;');
	NCacdena=NCacdena.replace('í','&iacute;');
	NCacdena=NCacdena.replace('ó','&oacute;');
	NCacdena=NCacdena.replace('ú','&uacute;');
	NCacdena=NCacdena.replace('Ñ','&Nacute;');
        NCacdena=NCacdena.replace('. ','<br>');
        
	/*document.getElementById(caja).value=cadena;*/
        return NCacdena;
}
//