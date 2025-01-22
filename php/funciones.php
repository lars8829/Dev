<?php

function estaAutenticado() : bool{
    session_start();

    $auth = $_SESSION['email'];
    if($auth){
        return true;
    }
    return false;
}



?>


