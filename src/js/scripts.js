document.addEventListener('DOMContentLoaded', function(){
    iniciarApp();
});


const formulario = document.querySelector('.formulario');
const nombreInput = document.querySelector('#nombre');
const emailInput = document.querySelector('#email');
const mensajeInput = document.querySelector('#mensaje');

const datos = {
    nombre: '',
    email: '',
    mensaje: ''
}

formulario.addEventListener('submit', function(evento){
    evento.preventDefault();

    const {nombre, email, mensaje} = datos;
  
    if(nombre === '' || email === '' || mensaje === ''){
        mostrarMensaje('Por favor llena todos los campos', true);

        return;
    }

    mostrarMensaje('El mensaje se envió correctamente');

});


nombreInput.addEventListener('input', escucharInput);
emailInput.addEventListener('input', escucharInput);
mensajeInput.addEventListener('input', escucharInput);

function iniciarApp() {
    scrollNav();
}


function escucharInput(evento) {
    datos[evento.target.id] = evento.target.value;
}

function mostrarMensaje(mensaje, error = null) {

    const existingAlerta = formulario.querySelector('p.error, p.correcto');
    if (existingAlerta) {
        existingAlerta.remove();
    }

    const alerta = document.createElement('P');
    alerta.textContent = mensaje;

    if(error){
        alerta.classList.add('error')
    }else{
        alerta.classList.add('correcto')
    }

    formulario.appendChild(alerta);
    
    
    setTimeout(() => {
        alerta.remove();
    }, 3000);

}

function scrollNav() {
    const enlace = document.querySelector('#enlace-contacto')
    enlace.addEventListener('click', function(e){
        e.preventDefault();

        const seccionScroll = e.target.attributes.href.value;
        const seccion = document.querySelector(seccionScroll);

        seccion.scrollIntoView({behavior: "smooth"});
    });
}