function ajaxobj() {

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

function Inserta_Fixture(datos)
{
   Ftorneo = datos['torneos'].value;	
   Fcategoria = datos['categorias'].value;	
   Fsemana = datos['semanas'].value;	   
   Fanio = datos['anios'].value;	      
   Fnumero = datos['numero-i'].value;	   
   Flocal = datos['Local-i'].value;	   
   Fvisita = datos['Visitante-i'].value;	       
   Fsede = datos['Sede-i'].value;	      
   Ffecha = datos['Fecha-i'].value;	   
   Fhora = datos['Hora-i'].value;	   
   
   if (isNaN(Fnumero)){
	   alert ("El numero de partido debe ser numerico");
   } 
   else {
	// Creo objeto AJAX y envio peticion al servidor
	   ajax = ajaxobj();
	//var ajax=nuevoAjax();
	   ajax.open("GET", "insertaFixture.php?Itorneo="+Ftorneo+"&Icategoria="+Fcategoria+"&Isemana="+Fsemana+"&Ianio="+Fanio+"&Inumero="+Fnumero+"&Ilocal="+Flocal+"&Ivisita="+Fvisita+"&Isede="+Fsede+"&Ifecha="+Ffecha+"&Ihora="+Fhora, false);
	// Indicamos que funci�n vigila el cambio de estado
	   ajax.onreadystatechange=function() {
	   if (ajax.readyState === 4) {
	// Mostramos resultado
                alert ("Registro Insertado"); 
                alert(ajax.responseText);
	    }
	};
	  ajax.send(null);
   }
}