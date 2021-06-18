var overlayerror = document.getElementById('overlay-alert_error'),
popuperror = document.getElementById('popup-alert_error'),
btnCerrarPopuperror = document.getElementById('btn-cerrar-alert_error'),
btnCancelar = document.getElementById('btn-error'),
overlay2 = document.getElementById('overlay-inicio'),
popup2 = document.getElementById('popup-inicio');

btnCancelar.addEventListener('click', function(){
	overlayerror.classList.add('disable');
	popuperror.classList.add('disable');
});
btnCerrarPopuperror.addEventListener('click', function(){
	overlayerror.classList.add('disable');
	popuperror.classList.add('disable');
});