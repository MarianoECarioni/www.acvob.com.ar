function Inserta_Posiciones(datos)
{
    alert("entro al insert");
   Ftorneo    = datos['torneos'].value;	
   Fcategoria = datos['categorias'].value;	
   Fanio      = datos['anios'].value;	      
   Fequipo    = datos['equipoi'].value;
   FPJugadoi  = datos['PJugadoi'].value;
   FPGanadoi  = datos['PGanadoi'].value;
   FPPerdidoi = datos['PPerdidoi'].value;
   FGanaPi    = datos['GanaPi'].value;
   FPierdePi  = datos['PierdePi'].value;
   FSGanadoi  = datos['SGanadoi'].value;
   FSPerdidoi = datos['SPerdidoi'].value;
   FDSeti     = datos['DSeti'].value;
   Fpuntosi   = datos['puntosi'].value;
   FDTantosi  = datos['DTantosi'].value;
//   
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "insertaPosiciones.php?Itorneo="+Ftorneo+"&Icategoria="+Fcategoria+"&Ianio="+Fanio+"&Iequipo="+Fequipo+"&IPJugadoi="+FPJugadoi+"&IPGanadoi="+FPGanadoi+"&IPPerdidoi="+FPPerdidoi+"&IGanaPi="+FGanaPi+"&IPierdePi="+FPierdePi+"&ISGanadoi="+FSGanadoi+"&ISPerdidoi="+FSPerdidoi+"&IDSeti="+FDSeti+"&Ipuntosi="+Fpuntosi+"&IDTantosi="+FDTantosi, false);
//
// Indicamos que funci�n vigila el cambio de estado
	ajax.onreadystatechange=function() {
            if (ajax.readyState === 4) {
                // Mostramos resultado
                alert("Registro Insertados");
            };
	};
	ajax.send(null);
}
//
function Modificar_Posiciones(datos, reg)
{
//   
   var equipo   = "iequipo"+reg;
   var pjugado  = "iPJugado"+reg;
   var pganado  = "iPGanado"+reg;
   var pperdido = "iPPerdido"+reg;
   var ganapun  = "iGanaP"+reg;
   var pierdep  = "iPierdeP"+reg;
   var setgana  = "iSGanado"+reg;
   var setperd  = "iSPerdido"+reg;
   var difset   = "iDSet"+reg;
   var puntos   = "ipuntos"+reg;
   var diftan   = "iDTantos"+reg;
//    
   Ftorneo    = datos['torneos'].value;	
   Fcategoria = datos['categorias'].value;	
   Fanio      = datos['anios'].value;	  
   Fequipo    = datos[equipo].value;
   FPJugadoi  = datos[pjugado].value;
   FPGanadoi  = datos[pganado].value;
   FPPerdidoi = datos[pperdido].value;
   FGanaPi    = datos[ganapun].value;
   FPierdePi  = datos[pierdep].value;
   FSGanadoi  = datos[setgana].value;
   FSPerdidoi = datos[setperd].value;
   FDSeti     = datos[difset].value;
   Fpuntosi   = datos[puntos].value;
   FDTantosi  = datos[diftan].value;
//   
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "modificarPosiciones.php?Itorneo="+Ftorneo+"&Icategoria="+Fcategoria+"&Ianio="+Fanio+"&Iequipo="+Fequipo+"&IPJugadoi="+FPJugadoi+"&IPGanadoi="+FPGanadoi+"&IPPerdidoi="+FPPerdidoi+"&IGanaPi="+FGanaPi+"&IPierdePi="+FPierdePi+"&ISGanadoi="+FSGanadoi+"&ISPerdidoi="+FSPerdidoi+"&IDSeti="+FDSeti+"&Ipuntosi="+Fpuntosi+"&IDTantosi="+FDTantosi, false);
//
// Indicamos que funci�n vigila el cambio de estado
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4) {
// Mostramos resultado
	      alert ("Registro modificado");
//		    alert(ajax.responseText);
		}
	}
	ajax.send(null);
}
//
function Borra_Posiciones(datos, reg)
{
   var equipo   = "iequipo"+reg;
//  
   Ftorneo    = datos['torneos'].value;	
   Fcategoria = datos['categorias'].value;	
   Fanio      = datos['anios'].value;	  
   Fequipo    = datos[equipo].value;
//     
// Creo objeto AJAX y envio peticion al servidor
	ajax = ajaxobj();
//var ajax=nuevoAjax();
	ajax.open("GET", "borraPosiciones.php?Fanio="+Fanio+"&Ftorneo="+Ftorneo+"&Fcategoria="+Fcategoria+"&Fequipo="+Fequipo, false);
//	
// Indicamos que funci�n vigila el cambio de estado
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4) {
// Mostramos resultado
	     alert ("Registro borrado");
//     alert(ajax.responseText);
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
//The browser doesn�t support Ajax. 
  alert("Your browser does not support Ajax!"); 
  } 
  return _ajaxobj;
}  
//