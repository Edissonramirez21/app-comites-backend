// Evento al cargar la ventana para hacer desaparecer la pantalla de carga
    $(window).on('load', function() {
        $(".cargando").fadeOut(1000);
    });
    
