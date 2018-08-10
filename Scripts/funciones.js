$(function() {
        //	Scrolled by user interaction
        $('#foo2').carouFredSel({
                prev: '#prev2',
                next: '#next2',
                pagination: "#pager2",
                auto: false
        });

        $(window).resize(function() {
            var newWidth = $(window).width();

            $('#fooF0').width( newWidth * $('#fooF0').children().length ); // set width of carousel, to ensure the items fit next to eachother
            $('#fooF0').parent().width( newWidth ); // set width of carousel-wrapper
            $('#fooF0').children().width( newWidth - 22 ); // set width of items, -22px for border and margin

            $('#fooF1').carouFredSel({
                    width: newWidth,
                    scroll: 2
            });
        }).resize();
});

var titulopordefecto = "Perico de los palotes"; //Si no se especifica un t�tulo al llamar a la funci�n colocar� el que se especifique aqu�
var ventana;
var cont=0;

function afoto(cual,titulo){
	if(cont==1){ventana.close();ventana=null}
	if(titulo==null){titulo=titulopordefecto}
	ventana=window.open('','ventana','resizable=yes,scrollbars=no')
	ventana.document.write('<html><head><title>' + titulo + '</title></head><body style="overflow:hidden" marginwidth="0" marginheight="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" scroll="no" onUnload="opener.cont=0"><img src="' + cual + '" onLoad="opener.redimensionar(this.width, this.height)">');
	ventana.document.close();
	cont++;
}
function redimensionar(ancho, alto){
	ventana.resizeTo(ancho+12,alto+28);
	ventana.moveTo((screen.width-ancho)/2,(screen.height-alto)/2); //centra la ventana. Eliminar si no se quiere centrar el popup
}

function Resena(){ 
    frames['Central'].location="Resena.html"; 
} 
function abrir(url) {
        window.open(url);
}
var on_color = "#FF0000";
var off_color = "#FFFFFF";

var blink_onoff = 1;
var blinkspeed= 500;
function blink()
{
	if( blink_onoff == 1) {
           document.all.blink.style.color = on_color;
	   blink_onoff = 0;
	}
	else {
	   document.all.blink.style.color = off_color;
	   blink_onoff = 1;
	}
}

function ComboBox(combo)
{
 var x = combo.selectedIndex;
 var direccion = combo.options[x].value;
 if (direccion != "#")
      location.href=direccion;
}

//   nuevapagina = window.open(direccion,"NuevaPgn");


function mostrarInputFileModificado(numeroInput) {
  $("#archivo_oculto"+numeroInput).change( function() {$("#archivo"+numeroInput).val($("#archivo_oculto"+numeroInput).val()); } );
}


function previewFiles(Archivo, Imagen) {
    
  //alert("Entre");  
  var preview = document.getElementById(Imagen);  
  var file = document.getElementById(Archivo).files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  };
  
  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "imagen";
  }
}
