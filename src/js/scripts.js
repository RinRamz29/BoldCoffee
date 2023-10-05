document.addEventListener('DOMContentLoaded', function(){
    iniciarApp();
});

function iniciarApp() {
    scrollNav();
}

function scrollNav() {
    const enlace = document.querySelector('.header__text a')

    enlace.addEventListener('click', function(e){
        e.preventDefault();

        const seccionScroll = e.target.attributes.href.value;
        const seccion = document.querySelector(seccionScroll);

        seccion.scrollIntoView({behavior: "smooth"});
    });
}

