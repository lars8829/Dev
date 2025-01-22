<body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de Inventarios</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Inventarios</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Portatiles 
                                        <?php 
                                              $sql = "SELECT COUNT(*) FROM `elementos` WHERE id_categoriaElemento=1; ";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Escritorios
                                        <?php 
                                              $sql = "SELECT COUNT(*) FROM `elementos` WHERE id_categoriaElemento=2";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Monitores
                                        <?php 
                                              $sql = "SELECT COUNT(*) FROM `elementos` WHERE id_categoriaElemento=8";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Camaras
                                        <?php 
                                              $sql = "SELECT COUNT(*) FROM `elementos` WHERE id_categoriaElemento=5";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Routers <?php 
                                              $sql = "SELECT COUNT(*) FROM `elementos` WHERE id_categoriaElemento=6";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Switchs <?php 
                                              $sql = "SELECT COUNT(*) FROM `elementos` WHERE id_categoriaElemento=7";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="viewsInventarios.php">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Televisores <?php 
                                              $sql = "SELECT COUNT(*) FROM `elementos` WHERE id_categoriaElemento=3";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Alexa <?php 
                                              $sql = "SELECT COUNT(*) FROM `elementos` WHERE id_categoriaElemento=10";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-0">
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInventario"><i class="fa-solid fa-plus"></i> Agregar Inventario</button> 
                        <button type="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalCategoriaElemento"><i class="fa-solid fa-plus"></i> Agregar Categoria</button>     
                        </p>
                        </br>

                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Tabla General Inventarios
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Serial</th>
                                                    <th>Tipo Dispositivo</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Fecha Adquisicion</th>
                                                    <th>Asignatario</th>
                                                    <th>Estado</th>
                                                    <th>Sistema Operativo</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            /* Abrimos conection bd */
                                            /* include '../../php/config.php';
                                            $conexion = retornarConexion(); */

                                           /* Creamos query  */

                                        $sql = "SELECT e.id, e.serialElemento, ce.nombreCategoria, m.nombremarca, e.modeloElemento, e.fecha_adquisicion, i.nombreItem, eh.estado_Hardware, s.nombre_sistema 
                                                FROM elementos e 
                                                inner join categoriaelementos ce on e.id_categoriaElemento = ce.id 
                                                inner join marcas m on e.id_marca = m.id 
                                                inner join items i on e.id_asignatario = i.id 
                                                inner join estados_hardware eh on e.id_estado = eh.id 
                                                inner join sistemas_op s on e.id_sistemas_op = s.id 
                                                ORDER BY e.id";
                                            
                                            $result = mysqli_query($conexion,$sql);
                                            while ($ver = mysqli_fetch_row($result)) {
                                            $datos1 = $ver[0]."||".
                                                      $ver[1]."||".
                                                      $ver[2]."||".
                                                      $ver[3]."||".
                                                      $ver[4]."||".
                                                      $ver[5]."||".
                                                      $ver[6]."||".
                                                      $ver[7]."||".
                                                      $ver[8];
                                                     // print "<br>".$datos1;
                                                ?>
                                                <tr>
                                                <td><?php echo $ver[0] ?></td>
                                                <td><?php echo $ver[1] ?></td>
                                                <td><?php echo $ver[2] ?></td>
                                                <td><?php echo $ver[3] ?></td>
                                                <td><?php echo $ver[4] ?></td>
                                                <td><?php echo $ver[5] ?></td>
                                                <td><?php echo $ver[6] ?></td>
                                                <td><?php echo $ver[7] ?></td>
                                                <td><?php echo $ver[8] ?></td>
                                                <td>
                                                     <button class="btn btn-primary fa-solid fa-eye"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarNovedades"  onclick="agregarDatosFormulario('<?php //echo $datos1; ?>')"></button>
                                                     <button class="btn btn-secondary fa-solid fa-pen"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarNovedades"  onclick="agregarDatosFormulario('<?php //echo $datos1; ?>')"></button>
                                                     <!--<button class="btn btn-primary fa-solid fa-eye"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditar" onclick="alert(<?php # echo $ver[0].'*'.$ver[2].'||'.$ver[2].'||'.$ver[3].'||'.$ver[4].'||'.$ver[5]; ?>)"></button>-->
                                                </td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                
                <br>
            <br>
   <br>       
</div> 
</div> 
</div>
<!-- inicio formulario inventarios-->

<div class="modal fade" id="modalInventario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="" >Serial:</label>
                <br>
                <input type="text" id="serialElemento" class="form-control input-sm" required>
                
                <br>
                <label for="" >Seleccione Tipo Elemento:</label>
                <br>
                <select class="form-select" id="id_categoriaElemento" aria-label="Default select example" required>
                <option selected>Elemento:</option>
                <?php while($row = mysqli_fetch_assoc($resultado_elementos)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombreCategoria']; ?></option>
                <?php endwhile; ?>
                </select>
                <br>
                <label for="" >Seleccione Marca:</label>
                <br>
                <select class="form-select" id="id_marca" aria-label="Default select example" required>
                    <option selected>Marca:</option>
                    <?php while($row = mysqli_fetch_assoc($resultado_marcas)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombremarca']; ?></option>
                <?php endwhile; ?>
                </select>
                <br>
                <label for="" >Modelo:</label>
                <br>
                <input type="text" id="modeloElemento" class="form-control input-sm" required>
                <br>
                <select class="form-select" id="id_sistemas_op" aria-label="Default select example" required>
                  <option selected>Sistema Operativo:</option>
                  <?php while($row = mysqli_fetch_assoc($resultado_software)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre_sistema']; ?></option>
                <?php endwhile; ?>
                </select>
                <br>
                <label for="" >Fecha Adquisicion:</label>
                <br>
                <input type="date" id="fecha_adquisicion" class="form-control input-sm" required>
                <br>
                <label for="" >Asignatario:</label>
                <br>
                <select class="form-select" id="id_asignatario" aria-label="Default select example" required>
                    <option selected>Selecione Responsable:</option>
                    <?php while($row = mysqli_fetch_assoc($resultado_items)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombreItem']; ?></option>
                <?php endwhile; ?>
                </select>
                <br>
                <label for="" >Seleccione Estado:</label>
                <br>
                <select class="form-select" id="id_estado" aria-label="Default select example" required>
                <option selected>Buscar estado:</option>
                    <?php while($row = mysqli_fetch_assoc($resultado_estados_hardware)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['estado_Hardware']; ?></option>
                <?php endwhile; ?>
                </select>
                
                <br>
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion:</label>
                <textarea class="form-control" type="text"  id="descripcionElemento" rows="3"></textarea>
                <br>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarElemento">Agregar</button>
                </div>


            </div>
        </div>

    </div>

</div>
</div>
<!-- final formulario inventarios-->

<!-- inicio formulario categorias-->

<div class="modal fade" id="modalCategoriaElemento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <label for="" >Ingrese Categoria:</label>
                    <br>
                    <input type="text" id="elementoCategoria" class="form-control input-sm" required>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarCategoriasElemento">Agregar</button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- final formulario categorias-->