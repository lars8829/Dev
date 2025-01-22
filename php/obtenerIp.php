<?php

function obtenerIP() {
    // Verificar si la IP proviene de un proxy o un balanceador de carga
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Tomamos la primera IP de la lista (en caso de que haya múltiples)
        $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

?>