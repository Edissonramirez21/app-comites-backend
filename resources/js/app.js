import './bootstrap';


function debounce(func, delay) {
    let debounceTimer;
    return function() {
        const context = this;
        const args = arguments;
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => func.apply(context, args), delay);
    };
}

function resetearTiempo() {
    // Implementa la lógica para resetear el tiempo de inactividad
    console.log('Tiempo de inactividad reseteado');
}

function eventosActividad() {
    const eventos = ['load', 'mousemove', 'mousedown', 'click', 'scroll', 'keypress'];
    eventos.forEach(function(evento) {
        window.addEventListener(evento, debounce(resetearTiempo, 500));
    });
}

