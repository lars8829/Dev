<?php
/* Abrimos conection bd */
include '../php/config.php';
                                           
$conexion = retornarConexion();
/* Creamos query  */
?>


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

                        
                       <div class="card mb-4" >
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
                </div>