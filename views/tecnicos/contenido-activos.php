<?php
include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';

echo ' <body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de Activos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Activos</li>
                        </ol>

                        <p class="mb-0">
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalActivos"><i class="fa-solid fa-plus"></i> Asignar Activo </button>   
                        </p>
                        </br>

                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Tabla General Activos
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre Activo</th>
                                                    <th>Fecha Entrega</th>
                                                    <th>Fecha Recibido</th>
                                                    <th>Firma</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                               
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                
<br>

                
</div> 

</div> 
<!-- inicio formulario inventarios-->
</div>
<div class="modal fade" id="modalActivos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                 <div class="modal-body">
                 <select class="form-select" id="nombreactivo" aria-label="Default select example" required>
                    <option selected>Nombre Activo:</option>
                    <option value="">PORTATIL</option>
                    <option value="">ESCRITORIO</option>
                    <option value="">MONITOR</option>
                    <option value="">COMBO TECLADO Y MOUSE</option>
                    <option value="">BATERIAS AA</option>
                    <option value="">BATERIAS AAA</option>
                    <option value="">PAD MOUSE Y TECLADO</option>
                    <!-- <option value=""></option>
                    <option value=""></option> -->
                </select>
                <br>
                 <label for="" >Fecha Entrega:</label>
                 <br>
                 <input type="date" id="activoentrega" class="form-control input-sm" required>
                 <br>
                 <label for="" >Fecha Recibido:</label>
                 <br>
                 <input type="date" id="activorecibido" class="form-control input-sm" required>
                 <br>
                 <label for="" >Cantidad:</label>
                <br>
                <input type="text" id="activocantidad" class="form-control input-sm" required>
                <br>
                <div class="mb-3">
                <label for="formFile" class="form-label">Subir Formato</label>
                <input class="form-control" type="file" id="formFile">
                </div>                          
                <label for="exampleFormControlTextarea1" class="form-label">Observaciones:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <br>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarSolicitud">Agregar</button>
                </div>

            </div>
        </div>

    </div>

</div>
</div>

';

include 'footer.php'; 

?>