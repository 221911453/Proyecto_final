const form = document.getElementById('form');
const inputs = document.querySelectorAll('#form input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
	app: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
	apm: /^[a-zA-ZÀ-ÿ\s]{4,40}$/, // Letras y espacios, pueden llevar acentos.
	direccion: /^[a-zA-ZÀ-ÿ\s]{4,200}$/, // Letras y espacios, pueden llevar acentos.
	telefono1: /^\d{10}$/, // 7 a 14 numeros.
	telefono2: /^\d{10}$/, // 7 a 14 numeros.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	pass: /^.{8,12}$/, // 4 a 12 digitos.
}

const campos = {
	nombre: false,
	app: false,
	apm: false,
	direccion: false,
	telefono1: false,
	telefono2: false,
	email: false,
	pass: false,
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "app":
			validarCampo(expresiones.app, e.target, 'app');
		break;
		case "apm":
			validarCampo(expresiones.apm, e.target, 'apm');
		break;
		
		case "direccion":
			validarCampo(expresiones.direccion, e.target, 'direccion');
		break;
		case "telefono1":
			validarCampo(expresiones.telefono1, e.target, 'telefono1');
		break;
		case "telefono2":
			validarCampo(expresiones.telefono2, e.target, 'telefono2');
		break;
		
		case "email":
			validarCampo(expresiones.email, e.target, 'email');
		break;
		case "pass":
			validarCampo(expresiones.pass, e.target, 'pass');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}
inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

form.addEventListener('submit', (e) => {

	const terminos = document.getElementById('terminos');
	if(campos.nombre && campos.app  && campos.apm && campos.direccion && campos.telefono1 && campos.telefono2 && campos.email  && campos.pass){
		form.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});