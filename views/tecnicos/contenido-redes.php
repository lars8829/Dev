<?php
include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';

echo ' <body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de Redes</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Redes</li>
                        </ol>

                        <p class="mb-0">
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSoftware"><i class="fa-solid fa-plus"></i> Agregar Red</button>      
                        <button type="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalSegmento"><i class="fa-solid fa-plus"></i> Agregar Segmento</button>
                        </p>
                        </br>

                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Tabla General Redes
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre Dispositivo</th>
                                                    <th>Tipo Dispositivo</th>
                                                    <th>Direccion IP</th>
                                                    <th>Segmento</th>
                                                    <th>Area</th>
                                                    <th>Fecha Asignacion</th>
                                                    <th>Estado</th>
                                                    <th>Obervaciones</th>
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

</div>


<div class="modal fade" id="modalSoftware" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="" >Nombre Dispositivo:</label>
                <br>
                <input type="text" id="nombredispositivo" class="form-control input-sm" required>
                <br>
                <label for="" >Tipo Dispositivo:</label>
                <br>
                <input type="text" id="tipodispositivo" class="form-control input-sm" required>
                <br>
                <label for="" >Direccion IP:</label>
                <br>
                <input type="text" id="direccionip" class="form-control input-sm" required>
                <br>
                <select class="form-select" id="segmentored" aria-label="Default select example" required>
                    <option selected>Segmento:</option>
                    <!-- <option value=""></option>
                </select>
                <br>
                <select class="form-select" id="area" aria-label="Default select example" required>
                    <option selected>Area:</option>
                    <option value="">CGM</option>
                    <option value="">ADMINISTRATIVA</option>
                    <option value="">OPERACIONES</option>
                    <option value="">TI</option>
                    <option value="">DATACENTER</option>
                    <!-- <option value=""></option>
                    <option value=""></option> -->
                </select>
                <br>
                

                <select class="form-select" id="estado" aria-label="Default select example" required>
                    <option selected>Estado:</option>
                    <option value="">Stock</option>
                </select>
                <br>
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


<!-- inicio formulario segmento-->

<div class="modal fade" id="modalSegmento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <label for="" >Ingrese Segmento:</label>
                    <br>
                    <input type="text" id="nombreSegmento" class="form-control input-sm" required>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarCategorias">Agregar</button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- final formulario segmento-->

      
';

include 'footer.php'; 

?>
