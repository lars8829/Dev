<?php

session_start();


$usuario = $_SESSION['usuario'];
$estado =  $_SESSION['estado']; 
$id = $_SESSION['id'];


if ($_SESSION['usuario'] == '') {
    header('Location: /helpdesk_Desarrollo/?error=4');
}

if($_SESSION['estado'] == '2'){
    header('Location: /helpdesk_Desarrollo/?error=5');
}
else/* ($_SESSION['usuario'] == $usuario) */ {
    /* echo "<script>alert('$usuario');</script>"; */
    include 'header-admin.php';
    include 'nav.php';
    include 'menu.php';
    include 'contenido.php';
    include 'footer.php'; 
}
/* require '../../php/procesarDatos.php'; */


//echo "<script>alert('$usuario');</script>";

//if(isset($_SESSION['usuario']) == $usuario) {


    /* echo "<script> alert('Hola');</script>"; */

   /*  header('Location: /helpdesk?error=4'); */
    
    /*  include 'header-admin.php';
    include 'nav.php';
    include 'menu.php';
    include 'contenido.php';
    include 'footer.php';  */

//}else{

    //header('Location: /helpdesk?error=3');

    /* echo "<script> alert('Hola');</script>"; */

  /*include 'header-admin.php';
    include 'nav.php';
    include 'menu.php';
    include 'contenido.php';
    include 'footer.php';  */
 

//}

/* if (isset($usuario)) {
    echo "<script>alert('La variable \$nombre está configurada');</script> ";
} else {
    echo "<script> alert('La variable \$nombre no está configurada'); </script>";
} */



?>
            
