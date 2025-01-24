<?php
/* Abrimos conection bd */
include '../../php/config.php';
                                           
$conexion = retornarConexion();
/* Creamos query  */
?>

<body class="sb-nav-fixed" id="overlay">

    <div id="layoutSidenav_content">
        <main>
            <div  id="tablaNovedades"></div>
        <!-- </main> -->

            </div>
        </main>   
        </div>
    <div>

    
<!-- </body> -->
          

<!-- Modal Editar -->

<div class="modal fade" id="modalNovedadesEditarNovedades2" tabindex="-1" aria-labelledby="exampleModalLabel" >
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
                            <textarea class="form-control" placeholder="" id="descripcionu" style="height: 100px"  disabled></textarea>
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
    
        </div> 

    </div> 

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
        
        </div>

    </div> 

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


