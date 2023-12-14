document.addEventListener('DOMContentLoaded', function() {
    darkMode();
});

function darkMode() {
    const pagina = document.querySelector('.principal');
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    const oscuro = document.querySelector('.header__modo--oscuro');
    const claro = document.querySelector('.header__modo--claro');

    if(prefiereDarkMode.matches) {
        pagina.classList.add('dark-mode');
        claro.classList.add('ocultar');
    } else {
        pagina.classList.remove('dark-mode');
        oscuro.classList.add('ocultar');
    }

    prefiereDarkMode.addEventListener('change', function() {
        if(prefiereDarkMode.matches) {
            pagina.classList.add('dark-mode');
            oscuro.classList.toggle('ocultar');
            claro.classList.toggle('ocultar');
        } else {
            pagina.classList.remove('dark-mode');
            oscuro.classList.toggle('ocultar');
            claro.classList.toggle('ocultar');
        }
    });

    const botonDarkMode = document.querySelector('.header__modo');
    botonDarkMode.addEventListener('click', function() {
        pagina.classList.toggle('dark-mode');
        oscuro.classList.toggle('ocultar');
        claro.classList.toggle('ocultar');
    });
}