(function() {
    var maxInactividad = 1740; // 29 minutos en segundos
    var tiempoAdvertencia = 60; // 60 segundos para la advertencia
    var tiempoInactivo = 0;
    var intervaloInactividad;
    var intervaloAdvertencia;

    // Iniciar el temporizador de inactividad
    function iniciarTemporizador() {
        intervaloInactividad = setInterval(function() {
            tiempoInactivo++;
            if (tiempoInactivo >= maxInactividad) {
                clearInterval(intervaloInactividad);
                mostrarAdvertencia();
            }
        }, 1000);
    }

    // Resetear el temporizador de inactividad
    function resetearTiempo() {
        tiempoInactivo = 0;
    }

    // Mostrar el modal de advertencia
    function mostrarAdvertencia() {
        var tiempoRestante = tiempoAdvertencia;
        $('#contador-expiracion').text(tiempoRestante);
        $('#modal-expiracion').modal('show');

        intervaloAdvertencia = setInterval(function() {
            tiempoRestante--;
            $('#contador-expiracion').text(tiempoRestante);

            if (tiempoRestante <= 0) {
                clearInterval(intervaloAdvertencia);
                window.location.href = "{{ route('logout') }}";
            }
        }, 1000);
    }

    // Eventos para detectar actividad del usuario
    function eventosActividad() {
        ['load', 'mousemove', 'mousedown', 'click', 'scroll', 'keypress'].forEach(function(event) {
            window.addEventListener(event, function() {
                resetearTiempo();
            });
        });
    }

    // Evento para continuar la sesión
    $('#continuar-sesion').click(function() {
        $('#modal-expiracion').modal('hide');
        clearInterval(intervaloAdvertencia);
        tiempoInactivo = 0;
        iniciarTemporizador();
    });

    // Inicializar
    iniciarTemporizador();
    eventosActividad();
})();