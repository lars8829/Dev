<!-- Inicio  Navbar-->
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="inicio.php" style="color:#aaedfa;">Allee </a>
            <!-- Sidebar Toggle-->
            
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="">
  <i class="bi bi-activity" style="color:rgb(241, 243, 242);"></i>
</button>

<style>
  /* Efecto de pulso */
  #sidebarToggle i {
    display: block;
    animation: pulseAnimation 1.5s infinite ease-in-out;
  }

  /* Animación de pulso: expansión y contracción */
  @keyframes pulseAnimation {
    0% {
      transform: scale(1); /* Tamaño original */
      color: rgb(241, 243, 242); /* Color inicial */
    }
    50% {
      transform: scale(1.1); /* Expande ligeramente el icono */
      color: #0eb04f; /* Color del pulso */
    }
    100% {
      transform: scale(1); /* Vuelve al tamaño original */
      color: rgb(241, 243, 242); /* Regresa al color original */
    }
  }
</style>



            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw" style="color:#aaedfa;"></i> <?php echo $usuario; ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../../php/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
</nav>
<!--Final Navbar-->