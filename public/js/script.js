let page = 1; // Página inicial
let cargando = false; // Bandera para evitar cargas múltiples simultáneas

$(window).scroll(function() {
    // Verifica si ya se está cargando contenido y si hay más páginas para cargar
    if (cargando || page >= totalPaginas) {
        return;
    }

    // Comprueba si el usuario se ha desplazado hasta cerca del final del contenido actual
    if ($(window).scrollTop() + $(window).height() > $('#contenedor-zonas').offset().top + $('#contenedor-zonas').outerHeight() - 100) {
        cargando = true; // Marca que se está cargando contenido
        page++;
        cargarMasZonas(page);
    }
});

function cargarMasZonas(page) {
    $.ajax({
        url: '/ruta-cargar-mas?page=' + page,
        type: 'get',
        beforeSend: function() {
            $('#loader').show();
        },
        success: function(response) {
            setTimeout(function() {
                $('#contenedor-zonas').append(response);
                $('#loader').hide();
                cargando = false; // Marca que la carga ha finalizado
            }, 2000);
        },
        error: function() {
            $('#loader').hide();
            cargando = false; // Marca que ha finalizado incluso en caso de error
        }
    });
}
