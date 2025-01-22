<?php
include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';

echo ' <body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de SBM</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">sbm</li>
                        </ol>

                        <p class="mb-0">
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSoftware"><i class="fa-solid fa-plus"></i> Agregar Inventario </button> 
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalprogramacion"><i class="fa-solid fa-plus"></i> Agregar  Programacion</button>
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalensamble"><i class="fa-solid fa-plus"></i> Agregar  Ensamble</button>     
                        </p>
                        </br>

                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Tabla General SBM
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Producto</th>
                                                    <th>Serial Medidor</th>
                                                    <th>Referencia Medidor</th>
                                                    <th>Operario</th>
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
<!-- inicio formulario inventarios-->
</div>
<div class="modal fade" id="modalSoftware" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                 <div class="modal-body">
                 <label for="" >Fecha Ingreso:</label>
                 <br>
                 <input type="date" id="fechaingreso" class="form-control input-sm" required>
                 <br>
                 <label for="" >Cantidad:</label>
                <br>
                <input type="text" id="cantidad" class="form-control input-sm" required>
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

<!--fin formulario inventarios -->


<!-- inicio formulario porgramacion-->

<div class="modal fade" id="modalprogramacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                <label for="" >Numero de Caja:</label>
                <br>
                <input type="number" id="numerocaja" class="form-control input-sm" required>
                <br>
                <label for="" >Serial Modem:</label>
                <br>
                <input type="text" id="serialmodem" class="form-control input-sm" required>
                <br>
                <label for="" >Imei Simcard:</label>
                <br>
                <input type="text" id="imeisimcard" class="form-control input-sm" required>
                <br>      
                <label for="" >Numero de Celular:</label>
                <br>
                <input type="text" id="numerocelular" class="form-control input-sm" required>
                <br>  
                <label for="" >Ip:</label>
                <br>
                <input type="text" id="ip" class="form-control input-sm" required>
                <input class="btn btn-primary" type="button" value="Buscar">
                <br>
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


<!--fin formulario programacion -->



<!-- inicio formulario ensamble-->


<div class="modal fade" id="modalensamble" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                <label for="">Perforacion:</label>
                <select class="form-select" id="ensambleperforacion" aria-label="Default select example" required>
                <option selected>Perforacion:</option>
                <option value="">SI</option>
                <option value="MAC">NO</option>
                </select>
                <br>
                <label for="">Pintura:</label>
                <select class="form-select" id="pintura" aria-label="Default select example" required>
                <option selected>Pintura:</option>
                <option value="">SI</option>
                <option value="">NO</option>
                </select>
                <br>
                <label for="">Montaje de Pacha:</label>
                <select class="form-select" id="montajepacha" aria-label="Default select example" required>
                <option selected>Pintura:</option>
                <option value="">SI</option>
                <option value="">NO</option>
                </select>
                <br>
                <label for="">Montaje de Tabla:</label>
                <select class="form-select" id="montajetabla" aria-label="Default select example" required>
                <option selected>Pintura:</option>
                <option value="">SI</option>
                <option value="">NO</option>
                </select>
                <br>
                <label for="">Montaje de Medidor:</label>
                <select class="form-select" id="montajemedidor" aria-label="Default select example" required>
                <option selected>Pintura:</option>
                <option value="">SI</option>
                <option value="">NO</option>
                </select>
                <br>  
                <label for="">Mon:</label>
                <select class="form-select" id="sistema" aria-label="Default select example" required>
                <option selected>Pintura:</option>
                <option value="">SI</option>
                <option value="">NO</option>
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

<!--fin formulario ensamble -->





      
';

include 'footer.php'; 

?>
