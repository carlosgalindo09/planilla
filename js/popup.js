//POPUP INCIAR SESION
var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
  popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(){
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

//POPUP NORMATIVIDAD
var abrirPopupNorma = document.getElementById('btn-abrir-popup-normatividad'),
	overlayNorma = document.getElementById('overlay-normatividad'),
	popupNorma = document.getElementById('popup-normatividad'),
	cerrarPoprpNorma = document.getElementById('btn-cerrar-popup-normatividad');

	abrirPopupNorma.addEventListener('click', function(){
	overlayNorma.classList.add('active');
 	popupNorma.classList.add('active');
});

	cerrarPoprpNorma.addEventListener('click', function(){
	overlayNorma.classList.remove('active');
	popupNorma.classList.remove('active');
});

//POPUP ESCALAFON
var abrirPopupEscala = document.getElementById('btn-abrir-popup-escalafon'),
	overlayEscala = document.getElementById('overlay-escalafon'),
	popupEscala = document.getElementById('popup-escalafon'),
	cerrarPoprpEscala = document.getElementById('btn-cerrar-popup-escalafon');

	abrirPopupEscala.addEventListener('click', function(){
	overlayEscala.classList.add('active');
 	popupEscala.classList.add('active');
});

	cerrarPoprpEscala.addEventListener('click', function(){
	overlayEscala.classList.remove('active');
	popupEscala.classList.remove('active');
});

//POPUP TABULADOR
var abrirPopupTabu = document.getElementById('btn-abrir-popup-tabulador'),
	overlayTabu= document.getElementById('overlay-tabulador'),
	popupTabu = document.getElementById('popup-tabulador'),
	cerrarPoprpTabu = document.getElementById('btn-cerrar-popup-tabulador');

	abrirPopupTabu.addEventListener('click', function(){
	overlayTabu.classList.add('active');
 	popupTabu.classList.add('active');
});

	cerrarPoprpTabu.addEventListener('click', function(){
	overlayTabu.classList.remove('active');
	popupTabu.classList.remove('active');
});