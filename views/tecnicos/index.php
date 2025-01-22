<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Sitio web" />
        <meta name="author" content="Jose Luis Lopez A" />
        <!-- <meta http-equiv="refresh" content="120"> -->
        <title>Allee Web Services</title>
        <!-- CSS -->
        <link href="../../css/style.min.css" rel="stylesheet" />
        <link href="../../css/styles.css" rel="stylesheet" />
        <link href="../../css/estilos.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
        <!-- ALERTIFY -->
        <link rel="stylesheet" href="../../js/alertifyjs/css/alertify.css">
        <link rel="stylesheet" href="../../js/alertifyjs/css/themes/default.css">
       
        <!-- JS   agregar al final del body-->
        
        <script src="../../js/jquery-3.7.1.js"></script>
        <script src="../../js/time.js"></script>
        <script src="../../js/simple-datatables.min.js"></script>
        <script src="../../js/alertifyjs/alertify.js"></script>
        <script src="../../js/all.js"></script>
        
    </head>

    
    <!-- Inicio  Navbar-->
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="inicio.php">Allee </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" type="button"><i class="bi bi-activity"></i></button>
    <!-- Navbar Search-->
   
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?php echo $usuario; ?></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
               <!--  <li><a class="dropdown-item" href="#!">Configuraciones</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li> -->
                <li><a class="dropdown-item" href="../../php/logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!--Final Navbar-->



<!-- Inicio SideNav -->
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">   <!-- por revisar -->

        <nav class="sb-sidenav accordion sb-sidenav-success" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                                <div class="sb-sidenav-menu-heading">Modulos</div>
                                <a class="nav-link" href="inicio.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                                </a>
                    <div class="sb-sidenav-menu-heading">Solicitudes</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Tic
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="solicitudes.php">Crear Solicitud</a>
                                        <a class="nav-link" href="contenido-software.php">Software</a>
                                        <a class="nav-link" href="contenido-hardware.php">Stock Partes</a>
                                        <a class="nav-link" href="contenido-inventarios.php">Inventarios</a>
                                        <a class="nav-link" href="contenido-movimientos.php">Movimientos</a>
                                        <a class="nav-link" href="contenido-mantenimientos.php">Mantenimientos</a>
                                    </nav>
                        </div>
                </div>
            </div>
        </nav>


  <!--   </div> -->
</div>

<!-- Final SideNav -->

<?php
/* Abrimos conection bd */
include '../../php/config.php';
                                           
$conexion = retornarConexion();
/* Creamos query  */
?>


<body class="sb-nav-fixed">

    <div id="layoutSidenav_content">
        <main>


            <div class="container-fluid px-4">

                <h2 class="mt-4">Panel de Control Novedades</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Novedades</li>
                        </ol>
                    <p class="mb-0">
                        <!-- <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarIncidentes"><i class="fa-solid fa-plus"></i> Agregar Categoria</button> -->
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalControl"><i class="fa-solid fa-plus"></i> Agregar Categoria</button> 
                    </p>
                       <br>
                       <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Tabla General Novedades
                                    </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Ticket #</th>
                                                    <th>Cliente</th>
                                                    <th>Titulo</th>
                                                    <th>Fecha</th>
                                                    <th>Estado</th>
                                                    <th>Mostrar</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            <?php
                                            
                                            $sql = "SELECT n.id, u.email, n.titulo, n.descripcion_cliente, n.descripcion_tecnico, n.fecha_up, e.nombre 
                                            FROM novedades n
                                            inner join usuarios u on n.id_usuario = u.id
                                            inner join estado_novedades e on n.id_estado_novedad = e.id 
                                            WHERE id_estado_novedad='1'
                                            ORDER BY n.id";
                                            
                                            $result = mysqli_query($conexion,$sql);

                                           /*  if ($result) { */
                                                while ($ver = mysqli_fetch_row($result)) {
                                                    $datos1 = $ver[0]."||".
                                                              $ver[1]."||".
                                                              $ver[2]."||".
                                                              $ver[3]."||".
                                                              $ver[4]."||".
                                                              $ver[5]."||".
                                                              $ver[6];
                                                              //print "<br>".$datos1;
                                                             
                                            ?>
                                                        <tr>
                                                        <td><?php echo $ver[0] ?></td>
                                                        <td><?php echo $ver[1] ?></td>
                                                        <td><?php echo $ver[2] ?></td>
                                                        <td><?php echo $ver[5] ?></td>
                                                        <td><?php echo $ver[6] ?></td>
                                                        <td>
                                                        <button class="btn btn-primary bi bi-pencil"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarNovedades"  onclick="agregarDatosFormularioNovedades('<?php echo $datos1 ?>');"></button>
                                                        </td>
                                                        </tr>
                                                        <?php
                                                        }
                                                        /* mysqli_free_result($result);
                                                }else{
                                                    echo "Error en la consulta: " . mysqli_error($conexion);
                                                }
                                            
                                                mysqli_close($conexion); */
                                                        ?>
                                                
                                        </tbody>
                                    </table>
                                    
                                   <!--  </div> -->
                                </div><!-- fin cardBody -->
                        </div> <!-- FIN CARD mb-2 -->
                        <br>  
                        <div class="card mb-2">
                        
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabla De Solicitudes
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple2">
                                <thead>
                                    <tr>
                                        <th>Ticket #</th>
                                        <th>Cliente</th>
                                        <th>Titulo</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <!-- <th>Tipo</th> -->
                                        <th>Mostrar</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                    $sql = "SELECT n.id, u.email, n.titulo, n.fecha_up, e.nombre,n.descripcion_cliente, n.descripcion_tecnico, p.nombre 
                                    FROM novedades n
                                    inner join usuarios u on n.id_usuario = u.id
                                    inner join estado_novedades e on n.id_estado_novedad = e.id 
                                    inner join peticiones p on n.id_peticiones = p.id 
                                    WHERE id_peticiones='1' AND n.id_estado_novedad = 2
                                    ORDER BY n.id";

                                    $resultSolicitudes = mysqli_query($conexion,$sql);
                                    while ($ver = mysqli_fetch_row($resultSolicitudes)) {
                                    $solicitudes =   $ver[0]."||".
                                                $ver[1]."||".
                                                $ver[2]."||".
                                                $ver[3]."||".
                                                $ver[4]."||".
                                                $ver[5]."||".
                                                $ver[6]."||".
                                                $ver[7];
                                   /* echo "<script> alert('$datos');</script>"; */
                                   ?>
                                     <tr>
                                    <td><?php echo $ver[0] ?></td>
                                    <td><?php echo $ver[1] ?></td>
                                    <td><?php echo $ver[2] ?></td>
                                    <td><?php echo $ver[3] ?></td>
                                    <td><?php echo $ver[4] ?></td>

                                    <td>
                                         <button class="btn btn-primary bi bi-pencil"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarSolicitudes"  onclick="agregarDatosFormularioSolicitudes('<?php echo $solicitudes ?>')"></button>
                                         
                                    </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div><!-- fin cardBody -->       
            </div> <!-- FIN CARD mb-2 -->

            
            
<br><!-- INCIDENTES -->
<div class="card mb-2">

                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabla De Incidentes
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple3">
                                <thead>
                                    <tr>
                                    <th>Ticket #</th>
                                        <th>Cliente</th>
                                        <th>Titulo</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <!-- <th>Tipo</th> -->
                                        <th>Mostrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                    $sql = "SELECT n.id, u.email, n.titulo, n.fecha_up, e.nombre,n.descripcion_cliente, n.descripcion_tecnico, p.nombre
                                    FROM novedades n
                                    inner join usuarios u on n.id_usuario = u.id
                                    inner join estado_novedades e on n.id_estado_novedad = e.id 
                                    inner join peticiones p on n.id_peticiones = p.id 
                                    WHERE id_peticiones='2' AND e.nombre='en curso'
                                    ORDER BY n.id";

                                    $result = mysqli_query($conexion,$sql);
                                    while ($ver = mysqli_fetch_row($result)) {
                                    $datos3 = $ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5];
                                    ?>
                                    <tr>
                                    <td><?php echo $ver[0] ?></td>
                                    <td><?php echo $ver[1] ?></td>
                                    <td><?php echo $ver[2] ?></td>
                                    <td><?php echo $ver[3] ?></td>
                                    <td><?php echo $ver[4] ?></td>
                                   

                                    <td>
                                         <button class="btn btn-primary bi bi-pencil"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarIncidentes"  onclick="agregarDatosFormularioIncidentes('<?php echo $datos3; ?>')"></button>
                                         
                                    </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div><!-- fin cardBody -->

                        
            </div> <!-- FIN CARD mb-2 -->
            <br>
           
</main>


<!-- Modal Editar -->

<div class="modal fade" id="modalNovedadesEditarNovedades" tabindex="-1" aria-labelledby="exampleModalLabel" >
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-body">
                    <label for="">ID:</label>
                    <input type="text"  id="idu" disabled>
                    <br>
                    <label for="" >Titulo:</label>
                    <br>
                    <input type="text" id="titulou" class="form-control input-sm" required disabled>
                    <br>
                    <label for="" >Cliente:</label>
                    <br>
                    <input type="text" id="id_usuariou" class="form-control input-sm" required disabled>
                    <br>
                    <select class="form-select" id="id_peticiones" aria-label="Default select example" required>
                            <option selected>Selecione Tipo Novedad:</option>
                            <option value="1">Solicitud</option>
                            <option value="2">Incidencia</option>
                    </select>
                    <br>

                    <select class="form-select" id="id_categorias" aria-label="Default select example" required>
                    <option selected>Selecione Estado:</option>
                    <?php
                    $sql_categorias =   "SELECT * FROM categorias";
                    $resultado_categorias= mysqli_query($conexion, $sql_categorias);
                    
                    ?>
                    <?php  while($row = mysqli_fetch_assoc($resultado_categorias)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombreCategoria']; ?></option>
                    <?php endwhile; ?>
                    </select>
                    
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="" id="descripcionu" style="height: 100px" disabled></textarea>
                        <label for="floatingTextarea2">Observaciones</label>
                    </div>
                    <br>
                    <select class="form-select" id="id_estado_novedadu" aria-label="Default select example">
                        <option selected>Selecione Estado:</option>
                        <!-- <option value="1">En Proceso</option> -->
                        <option value="2">En Curso</option>
                        <option value="6">Cancelado</option>
                        <option value="7">Flujo de Tareas</option>
                    </select>
                    <br>
                    <label for="" >Fecha de Creacion:</label>
                    <br>
                    <input type="text" id="fecha_upu" class="form-control input-sm" required disabled>
                    <br>
                     
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="actualizaDatosNovedades">Gestionar</button>
                    </div>

                </div><!-- final modal-body -->




<!-- AGREGADO RECIENTE -->
    
</div> <!-- final modal-content -->

</div> <!-- final modal-dialog -->

</div><!-- Final modal fade -->
<!--  </div> -->

<!-- Modal Guardar Solicitudes -->



<div class="modal fade" id="modalNovedadesEditarSolicitudes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-body">
                     <label for="">ID:</label>
                    <input type="text"  id="ida" disabled>
                    <br>
                    <label for="" >Titulo:</label>
                    <br>
                    <input type="text" id="tituloa" class="form-control input-sm" required disabled>
                    <br>
                    <label for="" >Cliente:</label>
                    <br>
                    <input type="text" id="id_usuarioa" class="form-control input-sm" required disabled>
                    <br>
                   <!--  <select class="form-select" id="id_peticiones" aria-label="Default select example" required>
                            <option selected>Selecione Tipo Novedad:</option>
                            <option value="1">Solicitud</option>
                            <option value="2">Incidencia</option>
                    </select> -->

                    <!-- <select class="form-select" id="id_categorias" aria-label="Default select example" required>
                        <option value="1">Falla Software</option>
                        <option selected>Selecione Categoria:</option>
                        <option value="3">Software Provision</option>
                        <option value="2">Falla Comunicaciones</option>
                        <option value="4">Configuracion punto de red</option>
                    </select> -->
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="" id="descripcion_clientea" style="height: 100px" required disabled ></textarea>
                        <label for="floatingTextarea2">Observaciones Cliente</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="" id="descripcion_tecnico" style="height: 100px" required ></textarea>
                        <label for="floatingTextarea2">Observaciones Analista</label>
                    </div>
                    <br>
                    <select class="form-select" id="id_estado_novedad" aria-label="Default select example">
                        <option selected >Selecione Estado:</option>
                        <!-- <option value="1">En Proceso</option> -->
                        <!-- <option value="3">Pendiente</option> -->
                        <option value="5">Solucionado</option>
                        <option value="6">Cancelado</option>
                        <!-- <option value="7">Flujo de Tareas</option> -->
                    </select>
                    <br>
                    <label for="" >Fecha de Creacion:</label>
                    <br>
                    <input type="text" id="fecha_upa" class="form-control input-sm" required disabled>
                    <br>
                      <!--   <div class="mb-3">
                            <label for="formFile" class="form-label" id="archivo">Adjuntar Info</label>
                            <input class="form-control" type="file" id="formFile">
                          </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="actualizaDatosSolicitudes">Gestionar</button>
                    </div>

                </div><!-- final modal-body -->




<!-- AGREGADO RECIENTE -->
    
</div> <!-- final modal-content -->

</div> <!-- final modal-dialog -->

</div><!-- Final modal fade -->





<!-- Modal Guardar Incidentes -->



<div class="modal fade" id="modalNovedadesEditarIncidentes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-body">
                    <label for="">ID:</label>
                    <input type="text"  id="idb" disabled>
                    <br>
                    <label for="" >Titulo:</label>
                    <br>
                    <input type="text" id="titulob" class="form-control input-sm" required disabled>
                    <br>
                    <label for="" >Cliente:</label>
                    <br>
                    <input type="text" id="id_usuariob" class="form-control input-sm" required disabled>
                    <br>

                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="" id="descripcion_clienteb" style="height: 100px" disabled></textarea>
                        <label for="floatingTextarea2">Observaciones Cliente</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="" id="descripcion_tecnicob" style="height: 100px" required ></textarea>
                        <label for="floatingTextarea2">Observaciones Analista</label>
                    </div>
                    <br>
                    <select class="form-select" id="id_estado_novedadb" aria-label="Default select example">
                        <option selected>Selecione Estado:</option>
                        <!-- <option value="1">En Proceso</option> -->
                      <!--   <option value="2">En Curso</option> -->
                        <option value="5">Solucionado</option>
                        <option value="6">Cancelado</option>
                        <!-- <option value="6">Cancelado</option>
                        <option value="7">Flujo de Tareas</option> -->
                    </select>
                    <br>
                    <label for="" >Fecha de Creacion:</label>
                    <br>
                    <input type="text" id="fecha_upb" class="form-control input-sm" required disabled>
                    <br>
                      <!--   <div class="mb-3">
                            <label for="formFile" class="form-label" id="archivo">Adjuntar Info</label>
                            <input class="form-control" type="file" id="formFile">
                          </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="actualizaDatosIncidentes">Gestionar</button>
                    </div>

                </div><!-- final modal-body -->

<!-- AGREGADO RECIENTE -->
    
</div> <!-- final modal-content -->

</div> <!-- final modal-dialog -->

</div><!-- Final modal fade -->



<div class="modal fade" id="modalControl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <label for="" >Ingrese Categoria:</label>
            <br><br>
                <input type="text" id="nombreCategoria" class="form-control input-sm" required>
            <br>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarNuevaCategoria">Agregar</button>
            </div><!-- final modal-body -->

        </div>
        <!-- AGREGADO RECIENTE -->
    
    </div> <!-- final modal-content -->

</div> <!-- final modal-dialog -->

</div><!-- Final modal fade -->

        
            </div>
        </main>   
        </div>
    <div>
</body>


    <br>
<br>
            <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted" style="color:white;">Copyright &copy; j_tec s.a.s</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                        &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </footer>


        <script src="../../js/bootstrap.bundle.min.js"></script>
        <script src="../../js/scripts.js"></script>
        <!-- <script src="../../js/funciones.js"></script> -->
        
        <script src="../../js/funciones_registrarCategorias.js"></script>
        <script src="../../js/funciones_registrarSoftware.js"></script>
        <script src="../../js/funciones_registrarHardware.js"></script>
        <script src="../../js/funciones_registrarMarca.js"></script>
        <script src="../../js/funciones_registrarItem.js"></script>
        <script src="../../js/funciones_registrarElemento.js"></script>
        <script src="../../js/funciones_registrarCategoriasElemento.js"></script>
        <script src="../../js/funciones_registrarMantenimiento.js"></script>
        
        
        <script src="../../js/funciones_registrarMovimientoLicSoftware.js"></script>
        
        <!-- <script src="../../js/all.js" crossorigin="anonymous"></script>
        <script src="../../js/funciones.js"></script>
        <script src="../../js/jquery-3.7.1.js"></script> -->

       <!--  <script src="../../js/Chart.min.js"></script> -->
      <!--   <script src="../../assets/demo/chart-area-demo.js"></script>
        <script src="../../assets/demo/chart-bar-demo.js"></script> -->
        <script src="../../js/datatables-simple-demo.js"></script>
      <script src="../../js/simple-datatables.min.js"></script>
</html>


<script type="text/javascript">
        $(document).ready(function(){

                $('#actualizaDatosNovedades').click(function(){ 
                    /* alert("ejecucion boton Novedades"); */ 
                    actualizaDatosNovedades();  
                    
                });

                $('#actualizaDatosSolicitudes').click(function(){
                    /* alert("ejecucion boton Solicitudes"); */
                    actualizaDatosSolicitudes();
                    
                    
                });

                $('#actualizaDatosIncidentes').click(function(){
                    /* alert("ejecucion boton incidentes"); */
                    actualizaDatosIncidentes();
                });

                $('#registrarSoftware').click(function(){
                    /* alert('Probando boton de registro software'); */
                    nombreSoftware = $('#nombreSoftware').val();
                    categoria_id = $('#categoria_id').val();
                    fecha_adquisicion = $('#fecha_adquisicion').val();
                    arquitectura = $('#arquitectura').val();
                    sistema = $('#sistema').val();
                    licencias = $('#licencias').val();
                    descripcion = $('#descripcion').val();
                    /* soporte = $('#soporte').val(); */
                    if (nombreSoftware == "" || categoria_id == "" || fecha_adquisicion == "" || arquitectura == "" || sistema == "" || licencias == "" || descripcion == "" ) {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")

                    }else{
                        registrarSoftware(nombreSoftware, categoria_id, fecha_adquisicion, arquitectura, sistema, licencias, descripcion);

                    }
                    
                });

                $('#registrarMovimientoSoftware').click(function(){
                     /* alert('Probando boton de registro software'); */
                     id_software = $('#id_software').val();
                     clave = $('#clave').val();
                     clave_phone01 = $('#clave_phone01').val();
                     clave_phone02 = $('#clave_phone02').val();
                     id_distribuidor =  $('#id_distribuidor').val();
                     id_item = $('#id_item').val();
                     id_estados_software = $('#id_estado_software').val();
                    /* soporte = $('#soporte').val(); */
                    if (id_software == "" || clave == "" || clave_phone01 == "" || clave_phone02 == ""|| id_distribuidor == "" || id_item == "" || id_estados_software == "" ) {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                    }else{
                        
                        registrarMovimientoLicSoftware(id_software, clave, clave_phone01, clave_phone02, id_distribuidor, id_item, id_estados_software);
                    
                    }
                });

                $('#registrarCategorias').click(function(){
                    nombreCategoria = $('#nombreCategoria').val();
                    /* alert('Probando boton de registro categorias'); */
                    /* alert($("#nombreCategoria").val()); */
                    if (nombreCategoria == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                    } else {
                        registrarCategorias(nombreCategoria);
                    }
                    
                });

                $('#registrarHardware').click(function(){
                    nombreHardware = $('#nombreHardware').val();
                    id_marca = $('#id_marca').val();
                    serialHardware = $('#serialHardware').val();
                    capacidadHardware = $('#capacidadHardware').val();
                    id_estado = $('#id_estado').val();
                    id_asignatario = $('#id_asignatario').val();
                    descripcionHardware = $('#descripcionHardware').val();
                    if (nombreHardware == ""|| id_marca == "" || serialHardware == "" || capacidadHardware == "" || id_estado == "" || id_asignatario == "" || descripcionHardware == "" ) {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")

                    }else{ 
                        registrarHardware(nombreHardware,id_marca,serialHardware,capacidadHardware,id_estado,id_asignatario,descripcionHardware);
                    } 
                      
                });

                $('#registrarMarcas').click(function(){
                    alert("ejecutando boton");
                    nombremarca = $('#nombremarca').val();
                    if (nombremarca == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                        
                    }else{
                        alert('Probando boton de registro marcas');
                        registrarMarcas(nombremarca);
                    }
                    
                });
                
                $('#registrarItem').click(function(){
                    nombreItem = $('#nombreItem').val();
                    if (nombreItem == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                    }else{
                        alert('Probando boton de registro marcas');
                        registrarItem(nombreItem);
                    }
                    
                });

                $('#registrarElemento').click(function(){
                    serialElemento = $('#serialElemento').val();
                    id_categoriaElemento = $('#id_categoriaElemento').val();
                    id_marca = $('#id_marca').val();
                    modeloElemento = $('#modeloElemento').val();
                    fecha_adquisicion = $('#fecha_adquisicion').val();
                    id_asignatario = $('#id_asignatario').val();
                    id_estado = $('#id_estado').val();
                    id_sistemas_op = $('#id_sistemas_op').val();
                    descripcionElemento = $('#descripcionElemento').val();
                    if (serialElemento == "" || id_categoriaElemento == "" || id_marca == "" || modeloElemento == "" || fecha_adquisicion == "" || id_asignatario == "" || id_estado == "" || id_sistemas_op == "" || descripcionElemento == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                    }else {
                        registrarElemento(serialElemento, id_categoriaElemento, id_marca, modeloElemento, fecha_adquisicion, id_asignatario, id_estado,id_sistemas_op,  descripcionElemento);
                    }
                    
                });

                $('#registrarCategoriasElemento').click(function(){
                    elementoCategoria = $('#elementoCategoria').val();
                    if (elementoCategoria == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                    } else {
                        registrarCategoriasElemento(elementoCategoria);
                    }
                    /* alert('Probando boton de registro marcas'); */
                
                });

                $('#registrarNuevaCategoria').click(function(){
                    nombreCategoria = $('#nombreCategoria').val();
                    if (nombreCategoria == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS");
                        } else {    
                            registrarNuevaCategoria(nombreCategoria);
                        }
                });

                $('#registrarMovimientoElemento').click(function(){
                
                    id_elemento = $('#idz').val();
                    id_estado_hardware = $('#id_estado_hardware').val();
                    items_asignatario = $('#items_asignatario').val();
                    descripcionElemento = $('#descripcionElementoz').val();

                    registrarMovimiento(id_elemento,
                                        id_estado_hardware,
                                        items_asignatario,
                                        descripcionElemento);
                });

                $('#registrarMantenimientos').click(function(){
                ide = $('#ide').val();
                id_tipo_mtto = $('#id_tipo_mtto').val();
                id_tecnicos = $('#id_tecnicos').val();
                id_ciclo = $('#id_ciclo').val();
                revision = $('#revision').val();
                actividades = $('#actividades').val();
                resultado = $('#resultado').val();

                registrarMantenimiento(ide, id_tipo_mtto, id_tecnicos, id_ciclo, revision, actividades, resultado);

                });


                
        });

                
</script>

<script>
    function agregarDatosFormularioNovedades(datos1) {
                
                d = datos1.split("||");

                $("#idu").val(d[0]);
                
                $("#id_usuariou").val(d[1]);
                $("#titulou").val(d[2]);
                $("#descripcionu").val(d[3]);
                $("#fecha_upu").val(d[5]);
                $("#id_estado_novedadu").val(d[6]);
                /* $('#id_peticionesu').val(d[2]);
                        $('#id_categoriasu').val(d[3]); */
                //alert(datos1);
                /*funcion para Cargar datos de la base de datos al formulario  */
                }
</script>



