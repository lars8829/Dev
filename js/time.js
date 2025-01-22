
let timeout;

function resetTimer() {
    // Resetea el temporizador de inactividad
    clearTimeout(timeout);
    timeout = setTimeout(function() {
        window.location.href = "../../php/logout.php"; // Redirigir a la página de cierre de sesión
    }, 210000); // 5 minutos (300000 ms)
    // 1 minutos (70000 ms)
    // 5 minutos (300000 ms)
}

// Detectar actividad (movimiento del ratón o pulsación de tecla)
document.onmousemove = resetTimer;
document.onkeypress = resetTimer;

// Iniciar el temporizador cuando la página carga
resetTimer();
