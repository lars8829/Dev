<?php

session_start();

$usuario = $_SESSION['usuario'];


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Allee</title>
        <link href="../../css/styles.css" rel="stylesheet" />
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../js/alertifyjs/css/alertify.css">
        <link rel="stylesheet" href="../../js/alertifyjs/css/themes/default.css">
        <!-- Recientes -->
        <link rel="stylesheet" href="../../DataTables/bootstrap.min.css">
        <link rel="stylesheet" href="../../DataTables/dataTables.bootstrap5.min.css">
         <!-- Recientes -->
        <script src="../../js/jquery-3.7.1.min.js"></script>
        <script src="../../js/funciones.js"></script>
        <script src="../../js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../css/estilos.css">
        <script src="../../js/alertifyjs/alertify.js"></script>
        <!-- Recientes -->
        <script src="../../DataTables/jquery.dataTables.min.js"></script>
        <script src="../../DataTables/dataTables.bootstrap5.min.js"></script>

       <!--  <script src="../../DataTables/Buttons/dataTables.buttons.min.js"></script> -->
        <!-- <script src="../../DataTables/Buttons/jszip.min.js"></script>
        <script src="../../DataTables/Buttons/pdfmake.min.js"></script>
        <script src="../../DataTables/Buttons/vfs_fonts.js"></script> -->
       <!--  <script src="../../DataTables/Buttons/buttons.html5.min.js"></script> -->
         <!-- Recientes -->
    </head>
    <body>

        <!-- INIT MENU NAVEGACION -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="admin.php">Allee</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                   <!--  <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?php echo $usuario ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#!">Configuraciones</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li> -->
                        <li><a class="dropdown-item" href="../../php/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>


        <!-- FINAL MENU NAVEGACION -->

        <!-- INIT LATERAL NAVEGACION -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-success" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Solicitudes</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tickets
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    
                                    <a class="nav-link" href="layout-sidenav-light.html">Historial</a>
                                </nav>
                            </div> 
                </nav>
            </div>

       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Panel de Novedades</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Solicitudes</li>
                        </ol>

                        <div class="row">
                            <div class="col-sm-12">

                            <div class="" id="tabla"></div>

                            </div>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                </p>
                               
                                <div class="container" id="tabla">

                                </div>
                                
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        -->
                    </div>  

                
                <!-- FORMULARIOS CREACION NOVEDAD -->

                <div class="modal fade" id="modalSolicitudes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content" id="caja">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <br>
                                   <!--  <input type="text" id="id_login_u">
                                    <br> -->
                                    <label for="" >Titulo:</label>
                                    <br>
                                    <input type="text" id="titulo" class="form-control input-sm" required>
                                    <br>
                                    <select class="form-select" id="id_peticiones" aria-label="Default select example" required>
                                        <option selected>Selecione Tipo Novedad:</option>
                                        <option value="1">Solicitud</option>
                                        <option value="2">Incidencia</option>
                                      
                                    </select>
                                    <br>
                                    <select class="form-select" id="id_categorias" aria-label="Default select example" required>
                                        <option selected>Selecione Categoria:</option>
                                        <option value="1">Falla Software</option>
                                        <option value="2">Falla Comunicaciones</option>
                                        <option value="3">Software Provision</option>
                                        <option value="4">Configuracion punto de red</option>
                                    </select>
                                    <br>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="descripcion" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Observaciones</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label" id="archivo">Adjuntar Info</label>
                                        <input class="form-control" type="file" id="formFile">
                                      </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarSolicitud">Agregar</button>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- FINAL FORMULARIO NOVEDADES -->

                 <!-- FORMULARIOS CREACION NOVEDAD -->

                 <div class="modal fade" id="modalNovedades" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content" id="caja">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for="" >Titulo:</label>
                                    <br>
                                    <input type="text" id="titulo" class="form-control input-sm" required>
                                    <br>
                                    <select class="form-select" id="id_peticiones" aria-label="Default select example" required>
                                        <option selected>Selecione Tipo Novedad:</option>
                                        <option value="1">Solicitud</option>
                                        <option value="2">Incidencia</option>
                                        <!-- <option value=""></option>
                                        <option value=""></option> -->
                                    </select>
                                    <br>
                                    <select class="form-select" id="id_categorias" aria-label="Default select example" required>
                                        <option selected>Selecione Categoria:</option>
                                        <option value="1">Falla Software</option>
                                        <option value="2">Falla Comunicaciones</option>
                                        <option value="3">Software Provision</option>
                                        <option value="4">Configuracion punto de red</option>
                                    </select>
                                    <br>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="descripcion" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Observaciones</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label" id="archivo">Adjuntar Info</label>
                                        <input class="form-control" type="file" id="formFile">
                                      </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarSolicitud">Agregar</button>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>

        <!-- FINAL FORMULARIO NOVEDADES -->


                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; josele88@misena.edu.co</div>
                           <!--  <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="../../js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../js/scripts.js"></script>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        /* alert("Cargando datos.."); */
        $('#tabla').load('../../componentes/tabla.solicitudes.Admin.php');
    });
</script>


<script>
$(document).ready(function(){
    $('#registrarSolicitud').click(function(){
        titulo = $('#titulo').val();
        id_peticiones = $('#id_peticiones').val();
        id_categorias = $('#id_categorias').val();
        descripcion = $('#descripcion').val();
      /*   archivo = $('#archivo').val(); */

        agregarNovedades(titulo,id_peticiones,id_categorias,descripcion);
    });

});
</script>