
    <body>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">Panel de Reportes</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="inicio.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Reportes</li>
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
                                    <label for="" >Titulo:</label>
                                    <br>
                                    <input type="text" id="titulo" class="form-control input-sm" required>
                                    <br>
                                    <!-- <select class="form-select" id="id_peticiones" aria-label="Default select example" required>
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
                                    <br> -->
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="descripcion" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Observaciones</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label" id="archivo">Adjuntar Info</label>
                                        <input class="form-control" type="file" id="formFile">
                                      </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarSolicitudClientes">Agregar</button>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- FINAL FORMULARIO NOVEDADES -->

                 <!-- FORMULARIOS CREACION NOVEDAD -->

                 <div class="modal fade" id="#" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
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
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarSolicitudClientes">Agregar</button>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <?php
               # echo $id; 
                ?>

        <!-- FINAL FORMULARIO NOVEDADES -->


                </main>
                
            </div>
        </div>
       <!--  <script src="../../js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../js/scripts.js"></script> -->
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        /* alert("Cargando datos.."); */
        $('#tabla').load('../../componentes/tabla.reportes.contabilidad.php');
    });
</script>


<script>
$(document).ready(function(){
    $('#registrarSolicitudClientes').click(function(){
        titulo = $('#titulo').val();
        descripcion = $('#descripcion').val();
      /*   archivo = $('#archivo').val(); */
      if (titulo === '' && descripcion === '') {
        alertify.alert("Favor Ingresar informacion en los campos requeridos");
      }else{
        agregarNovedadesClientes(titulo,descripcion);
      }
    });
});
</script>