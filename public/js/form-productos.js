const form = document.getElementById('form');
const inputs = document.querySelectorAll('#form input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
	descripcion: /^[a-zA-ZÀ-ÿ\s]{20,75}$/, // Letras y espacios, pueden llevar acentos.
	costo: /([?1234567890][.][1234567890][1234567890])+$/, // 7 a 14 numeros.
	color: /^[a-zA-ZÀ-ÿ\s]{4,50}$/,// Costo ingresar con decimales 
	medida: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
	material: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
}

const campos = {
	nombre: false,
	descripcion: false,
	costo: false,
	
	color: false,
	medida: false,
	material: false,
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "descripcion":
			validarCampo(expresiones.descripcion, e.target, 'descripcion');
		break;
		case "costo":
			validarCampo(expresiones.costo, e.target, 'costo');
		break;
		
		case "color":
			validarCampo(expresiones.color, e.target, 'color');
		break;
		case "medida":
			validarCampo(expresiones.medida, e.target, 'medida');
		break;
		case "material":
			validarCampo(expresiones.material, e.target, 'material');
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
	if(campos.nombre && campos.descripcion  && campos.costo && campos.color && campos.medida && campos.material){
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