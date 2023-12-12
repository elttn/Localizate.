document.addEventListener('DOMContentLoaded', function () {
    var hash = window.location.hash;

    switch (hash) {
        case '#usuario':
            Usuario();
            break;
        case '#negocio':
            Negocio();
            break;
    }
});

function Registro() {
    ocultarTodasLasSecciones();
    document.getElementById('inicio-sesion').classList.add('d-none');
    document.getElementById('registro-cuenta').classList.remove('d-none');
}


function InicioSesion() {
    ocultarTodasLasSecciones();
    document.getElementById('registro-cuenta').classList.add('d-none');
    document.getElementById('inicio-sesion').classList.remove('d-none');
}

function Usuario() {
    ocultarTodasLasSecciones();
    document.getElementById('formato-usuario').classList.remove('d-none');
}

function Negocio() {
    ocultarTodasLasSecciones();
    document.getElementById('formato-negocio').classList.remove('d-none');
}

function ocultarTodasLasSecciones() {
    document.getElementById('registro-cuenta').classList.add('d-none');
    document.getElementById('inicio-sesion').classList.add('d-none');
    document.getElementById('formato-usuario').classList.add('d-none');
    document.getElementById('formato-negocio').classList.add('d-none');
}