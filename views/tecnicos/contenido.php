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

                                                              $data = "pasa mensaje";
                                                             
                                            ?>
                                                        <tr>
                                                        <td><?php echo $ver[0] ?></td>
                                                        <td><?php echo $ver[1] ?></td>
                                                        <td><?php echo $ver[2] ?></td>
                                                        <td><?php echo $ver[5] ?></td>
                                                        <td><?php echo $ver[6] ?></td>
                                                        <td>
                                                        <button class="btn btn-primary bi bi-pencil"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarNovedades2"  onclick="agregarDatosFormularioNovedades('<?php echo $datos1; ?>')"></button>
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
            

           
</main>


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

    
<!-- </body> -->
          

   


