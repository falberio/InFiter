let boton_faq = document.querySelector('#boton-faq');
let boton_plataformas = document.querySelector('#boton-plataformas');
let boton_instructivos = document.querySelector('#boton-instructivos');
let boton_busqueda = document.querySelector('#boton-busqueda');
let boton_login = document.querySelector('#boton-login');
let subheader_faq = document.querySelector('#subheader-faq');
let subheader_plataformas = document.querySelector('#subheader-plataformas');
let subheader_instructivos = document.querySelector('#subheader-instructivos');
let subheader_busqueda = document.querySelector('#subheader-busqueda');
let subheader_login = document.querySelector('#subheader-login');


boton_faq.addEventListener('mouseover',function(){
	subheader_faq.classList.add('active');
	subheader_plataformas.classList.remove('active');
	subheader_instructivos.classList.remove('active');
	subheader_busqueda.classList.remove('active');
	subheader_login.classList.remove('active');
});

subheader_faq.addEventListener('mouseover',function(){
	subheader_faq.classList.add('active');
	subheader_plataformas.classList.remove('active');
	subheader_instructivos.classList.remove('active');
	subheader_busqueda.classList.remove('active');
	subheader_login.classList.remove('active');
});

subheader_faq.addEventListener('mouseout',function(){
	subheader_faq.classList.remove('active');
});




boton_plataformas.addEventListener('mouseover',function(){
	subheader_plataformas.classList.add('active');
	subheader_faq.classList.remove('active');
	subheader_instructivos.classList.remove('active');
	subheader_busqueda.classList.remove('active');
	subheader_login.classList.remove('active');
});

subheader_plataformas.addEventListener('mouseover',function(){
	subheader_plataformas.classList.add('active');
	subheader_faq.classList.remove('active');
	subheader_instructivos.classList.remove('active');
	subheader_busqueda.classList.remove('active');
	subheader_login.classList.remove('active');
});

subheader_plataformas.addEventListener('mouseout',function(){
	subheader_plataformas.classList.remove('active');
});




boton_instructivos.addEventListener('mouseover',function(){
	subheader_instructivos.classList.add('active');
	subheader_faq.classList.remove('active');
	subheader_plataformas.classList.remove('active');
	subheader_busqueda.classList.remove('active');
	subheader_login.classList.remove('active');
});

subheader_instructivos.addEventListener('mouseover',function(){
	subheader_instructivos.classList.add('active');
	subheader_faq.classList.remove('active');
	subheader_plataformas.classList.remove('active');
	subheader_busqueda.classList.remove('active');
	subheader_login.classList.remove('active');
});

subheader_instructivos.addEventListener('mouseout',function(){
	subheader_instructivos.classList.remove('active');
});






boton_busqueda.addEventListener('mouseover',function(){
	subheader_busqueda.classList.add('active');
	subheader_faq.classList.remove('active');
	subheader_plataformas.classList.remove('active');
	subheader_instructivos.classList.remove('active');
	subheader_login.classList.remove('active');
});

subheader_busqueda.addEventListener('mouseover',function(){
	subheader_busqueda.classList.add('active');
	subheader_faq.classList.remove('active');
	subheader_plataformas.classList.remove('active');
	subheader_instructivos.classList.remove('active');
	subheader_login.classList.remove('active');
});

subheader_busqueda.addEventListener('mouseout',function(){
	subheader_busqueda.classList.remove('active');
});





boton_login.addEventListener('mouseover',function(){
	subheader_login.classList.add('active');
	subheader_faq.classList.remove('active');
	subheader_plataformas.classList.remove('active');
	subheader_instructivos.classList.remove('active');
	subheader_busqueda.classList.remove('active');
});

subheader_login.addEventListener('mouseover',function(){
	subheader_login.classList.add('active');
	subheader_faq.classList.remove('active');
	subheader_plataformas.classList.remove('active');
	subheader_instructivos.classList.remove('active');
	subheader_busqueda.classList.remove('active');
});

subheader_login.addEventListener('mouseout',function(){
	subheader_login.classList.remove('active');
});




let logo = document.querySelector('#logo-mega');
let boton_estilos_mega = document.querySelector('#boton-estilos-mega');
let body = document.querySelector('#body');

boton_estilos_mega.addEventListener('click',function(){
	if(body.classList.contains('body-mega')){
		body.classList.remove('body-mega');
		boton_estilos_mega.classList.remove('estilos-mega-on');
		logo.innerHTML = "<span>In<span id='logo-oculto'>side </span>Fi</span>ter";
	} else{
		body.classList.add('body-mega');
		boton_estilos_mega.classList.add('estilos-mega-on');
		logo.innerHTML = 'MEGATLON';
	};
});




// function refrescarSedes(){
// 	var sedes = document.getElementById("sedes").value;
// }

// function refrescarTurnos(){
// 	var turnos = document.getElementById("turnos").value;
// }


// $('#sedes').change(function(){
// 	var sedes = $(this).val();
// 	$.get('../staff.php', {})
// })
