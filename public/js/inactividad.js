(function() {
    console.log('inactividad.js cargado');
    console.log('maxInactividad:', window.maxInactividad);
    console.log('tiempoAdvertencia:', window.tiempoAdvertencia);

    if (typeof window.maxInactividad === 'undefined' || typeof window.tiempoAdvertencia === 'undefined') {
        console.error('Las variables maxInactividad o tiempoAdvertencia no están definidas.');
        return;
    }

    const maxInactividad = window.maxInactividad;
    const tiempoAdvertencia = window.tiempoAdvertencia;

    let tiempoInactivo = 0;
    let intervaloInactividad;
    let intervaloAdvertencia;

    const modalElement = document.getElementById('modal-expiracion');
    const modal = new bootstrap.Modal(modalElement, { backdrop: 'static', keyboard: false });

    function iniciarTemporizador() {
        console.log('Iniciando temporizador de inactividad');
        clearInterval(intervaloInactividad);
        intervaloInactividad = setInterval(function() {
            tiempoInactivo++;
            console.log('Tiempo inactivo:', tiempoInactivo);
            if (tiempoInactivo >= maxInactividad) {
                clearInterval(intervaloInactividad);
                mostrarAdvertencia();
            }
        }, 1000);
    }

    function resetearTiempo() {
        tiempoInactivo = 0;
    }

    function mostrarAdvertencia() {
        let tiempoRestante = tiempoAdvertencia;
        document.getElementById('contador-expiracion').textContent = tiempoRestante;
        modal.show();

        intervaloAdvertencia = setInterval(function() {
            tiempoRestante--;
            document.getElementById('contador-expiracion').textContent = tiempoRestante;
            if (tiempoRestante <= 0) {
                clearInterval(intervaloAdvertencia);
                document.getElementById('logout-expired').value = 'true';
                document.getElementById('logout-form').submit();
            }
        }, 1000);
    }

    function eventosActividad() {
        const eventos = ['load', 'mousemove', 'mousedown', 'click', 'scroll', 'keypress'];
        eventos.forEach(function(evento) {
            window.addEventListener(evento, resetearTiempo);
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const botonContinuar = document.getElementById('continuar-sesion');
        if (botonContinuar) {
            botonContinuar.addEventListener('click', function() {
                modal.hide();
                clearInterval(intervaloAdvertencia);
                tiempoInactivo = 0;
                iniciarTemporizador();
            });
        }

        const botonCerrar = document.getElementById('cerrar-sesion-modal');
        if (botonCerrar) {
            botonCerrar.addEventListener('click', function() {
                document.getElementById('logout-expired').value = 'false';
                document.getElementById('logout-form').submit();
            });
        }
    });

    iniciarTemporizador();
    eventosActividad();
})();
