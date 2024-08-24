$(document).off('.data-api')

document.addEventListener('DOMContentLoaded', function() {
    const infoButton = document.getElementById('infoButton');
    const infoContent = document.getElementById('infoContent');

    infoButton.addEventListener('click', function() {
        if (infoContent.style.display === 'none') {
            infoContent.style.display = 'block';
            infoButton.textContent = 'Ocultar informações';
        } else {
            infoContent.style.display = 'none';
            infoButton.textContent = 'Mostrar mais informações';
        }
    });
});
function abrirPagina(pageUrl) {
    window.location.href = pageUrl; 
}

document.addEventListener('DOMContentLoaded', function() {
    const inicioButton = document.getElementById('inicioButton');
    const galeriaButton = document.getElementById('galeriaButton');
    const infoButton = document.getElementById('infoButton');

    inicioButton.addEventListener('click', function() {
        abrirPagina('index.html'); 
    });

    galeriaButton.addEventListener('click', function() {
        abrirPagina('galeria.html');
    });

    infoButton.addEventListener('click', function() {
        abrirPagina('info.html');
    });
});