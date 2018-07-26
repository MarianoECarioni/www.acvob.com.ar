function Inserta_Resultado(datos)
{
   Ftorneo    = datos['torneos'].value;	
   Fcategoria = datos['categorias'].value;	
   Fanio      = datos['anios'].value;	 
   Fsemana    = datos['semanas'].value;     
   Fnumero    = datos['numero-i'].value;
   Flocal     = datos['Local-i'].value;
   Fvisita    = datos['Visitante-i'].value;
   Ffecha     = datos['Fecha-i'].value;
   FS1L       = datos['S1L-i'].value;
   FS1V       = datos['S1V-i'].value;
   FS2L       = datos['S2L-i'].value;
   FS2V       = datos['S2V-i'].value;
   FS3L       = datos['S3L-i'].value;
   FS3V       = datos['S3V-i'].value;   
   FS4L       = datos['S4L-i'].value;
   FS4V       = datos['S4V-i'].value;
   FS5L       = datos['S5L-i'].value;
   FS5V       = datos['S5V-i'].value;
//
//Calculo los puntos de cada equipo.
   FPTL = 0;
   FPTV = 0;
//Puntos del primer set
  if (FS1L > FS1V) FPTL = FPTL + 1; 
  else { if(FS1V > FS1L) FPTV = FPTV + 1;}
//  
//Puntos del segundo set
  if (FS2L > FS2V) FPTL = FPTL + 1; 
  else { if(FS2V > FS2L) FPTV = FPTV + 1;}
//  
//Puntos del tercer set
  if (FS3L > FS3V) FPTL = FPTL + 1; 
  else { if(FS3V > FS3L) FPTV = FPTV + 1;}
//  
//Puntos del cuarto set
  if (FS4L > FS4V) FPTL = FPTL + 1; 
  else { if(FS4V > FS4L) FPTV = FPTV + 1;}
//  
//Puntos del quinto set
  if (FS5L > FS5V) FPTL = FPTL + 1; 
  else { if(FS5V > FS5L) FPTV = FPTV + 1;}
//      
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "insertaResultados.php?Ianio="+Fanio+"&Itorneo="+Ftorneo+"&Icategoria="+Fcategoria+"&Inumero="+Fnumero+"&Isemana="+Fsemana+"&Ifecha="+Ffecha+"&Ilocal="+Flocal+"&Ivisitante="+Fvisita+"&IPTL="+FPTL+"&IPTV="+FPTV+"&IS1L="+FS1L+"&IS1V="+FS1V+"&IS2L="+FS2L+"&IS2V="+FS2V+"&IS3L="+FS3L+"&IS3V="+FS3V+"&IS4L="+FS4L+"&IS4V="+FS4V+"&IS5L="+FS5L+"&IS5V="+FS5V, false);
//
// Indicamos que función vigila el cambio de estado
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4) {
// Mostramos resultado
    alert("Registro Insertado");
		}
	}
	ajax.send(null);
}
//
function Borra_Resultado(datos, reg)
{
   var numero   = "numero"+reg;
//  
   Ftorneo    = datos['torneos'].value;	
   Fcategoria = datos['categorias'].value;	
   Fanio      = datos['anios'].value;	  
   Fnumero    = datos[numero].value;
   Fsemana    = datos['semanas'].value;   
//     
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "borraResultados.php?Ianio="+Fanio+"&Itorneo="+Ftorneo+"&Icategoria="+Fcategoria+"&Inumero="+Fnumero+"&Isemana="+Fsemana, false);
//	
// Indicamos que función vigila el cambio de estado
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4) {
// Mostramos resultado
	     alert ("Registro borrado");
//         alert(ajax.responseText);
		}
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
//The browser doesn’t support Ajax. 
  alert("Your browser does not support Ajax!"); 
  } 
  return _ajaxobj;
}  
//