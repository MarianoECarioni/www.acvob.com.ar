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
// Indicamos que funci�n vigila el cambio de estado
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
//The browser doesn�t support Ajax. 
  alert("Your browser does not support Ajax!"); 
  } 
  return _ajaxobj;
} 

function rl(cadena)
{
    var NCacdena=cadena.replace('�','&Aacute;');
    
	NCacdena=NCacdena.replace('�','&Aacute;');
	NCacdena=NCacdena.replace('�','&Eacute;');
	NCacdena=NCacdena.replace('�','&Iacute;');
	NCacdena=NCacdena.replace('�','&Oacute;');
        NCacdena=NCacdena.replace('�','&aacute;');
	NCacdena=NCacdena.replace('�','&eacute;');
	NCacdena=NCacdena.replace('�','&iacute;');
	NCacdena=NCacdena.replace('�','&oacute;');
	NCacdena=NCacdena.replace('�','&uacute;');
	NCacdena=NCacdena.replace('�','&Nacute;');
        NCacdena=NCacdena.replace('. ','<br>');
        
	/*document.getElementById(caja).value=cadena;*/
        return NCacdena;
}
//