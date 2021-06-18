
var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');
   

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
var btnAbrirPopup2 = document.getElementById('btn-abrir-popup2'),
	overlay2 = document.getElementById('overlay-inicio'),
	popup2 = document.getElementById('popup-inicio'),
	cerrarPopupInicio = document.getElementById('enviarsesion'),
	btnCerrarPopup2 = document.getElementById('btn-cerrar-popup2');
   
btnAbrirPopup2.addEventListener('click', function(){
	overlay2.classList.add('active');
	popup2.classList.add('active');
});

btnCerrarPopup2.addEventListener('click', function(e){
	e.preventDefault();
	overlay2.classList.remove('active');
	popup2.classList.remove('active');
});
cerrarPopupInicio.addEventListener('click', function(e){
	e.preventDefault();
	overlay2.classList.remove('active');
	popup2.classList.remove('active');
});


var registro = document.getElementById('registro'),
	overlay3 = document.getElementById('overlay-alert_registro'),
	popup3 = document.getElementById('popup-alert_registro'),
	btnCerrarPopup3 = document.getElementById('btn-cerrar-alert_registro'),
	btnAbrirSesion = document.getElementById('btn-submit3'),
	btnCancel = document.getElementById('btn-submit4'),
	overlay2 = document.getElementById('overlay-inicio'),
	popup2 = document.getElementById('popup-inicio');

btnCancel.addEventListener('click', function(){
		overlay3.classList.add('disable');
		popup3.classList.add('disable');
});
btnCerrarPopup3.addEventListener('click', function(e){
	e.preventDefault();
	overlay3.classList.add('disable');
	popup3.classList.add('disable');
	
});
btnAbrirSesion.addEventListener('click', function(){
	overlay2.classList.add('active');
	popup2.classList.add('active');
	overlay3.classList.add('disable');
	popup3.classList.add('disable');

});
var overlay4 = document.getElementById('overlay-alert_fallo'),
	popup4 = document.getElementById('popup-alert_fallo'),
	btnCerrarPopup4 = document.getElementById('btn-cerrar-alert_registro'),
	btnCancel = document.getElementById('btn-submit5');
	btnCancel.addEventListener('click', function(){
		overlay4.classList.add('disable');
		popup4.classList.add('disable');
});
btnCerrarPopup4.addEventListener('click', function(e){
	e.preventDefault();
	overlay4.classList.add('disable');
	popup4.classList.add('disable');
});