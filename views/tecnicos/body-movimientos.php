<body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de Movimientos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Movimientos </li>
                        </ol>
                       <!-- <button type="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalMovimiento"><i class="fa-solid fa-plus"></i> Movimientos </button>   -->
                        </p>
                        <div class="row">
                        <div class="col-xl-2 col-md-2">
                                <div class="card bg-secondary text-white mb-2">
                                    <div class="card-body"> # Movimientos <?php 
                                              $sql = "SELECT count(*) FROM movimientos_elementos";
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
                            <br>
                            <div class="col-xl-2 col-md-2">
                                <div class="card bg-primary text-white mb-2">
                                    <div class="card-body">Elementos Asignados <?php 
                                              $sql = "SELECT count(*) FROM movimientos_elementos WHERE id_estado_hardware = 2";
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
                            <div class="col-xl-2 col-md-2">
                                <div class="card bg-success text-white mb-2">
                                    <div class="card-body">Elementos en Stock <?php 
                                              $sql = "SELECT COUNT(DISTINCT id_elemento) FROM `movimientos_elementos` WHERE id_estado = 2 ORDER BY fecha_Movimiento ASC;";
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
                        </div>
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
                                                    <th>Asignatario</th>
                                                    <th>Elemento</th>
                                                    <th>Serial</th>
                                                    <th>Estado</th>
                                                    <th>Fecha</th>
                                                    <th>Descripcion</th>
                                                    <th>Estado Bodega:</th>
                                                    <!-- <th>Acciones</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                               $sql =" SELECT me.id, it.nombreItem, ce.nombreCategoria, e.serialElemento, eh.estado_Hardware, me.fecha_Movimiento, me.descripcionElemento, es.nombre
                                                       FROM movimientos_elementos me
	                                                    INNER JOIN elementos e on e.id = me.id_elemento
                                                        INNER JOIN items it  on it.id = me.items_Asignatario
                                                        INNER JOIN estados_hardware eh on eh.id = me.id_estado_hardware
                                                        INNER JOIN categoriaelementos ce on ce.id = e.id_categoriaElemento 
                                                        INNER JOIN estados es on es.id = me.id_estado
                                                        ORDER BY me.id;";
                                            
                                            $result = mysqli_query($conexion,$sql);
                                            while ($ver = mysqli_fetch_row($result)) {
                                            $datos1 = $ver[0]."||".
                                                      $ver[1]."||".
                                                      $ver[2]."||".
                                                      $ver[3]."||".
                                                      $ver[4]."||".
                                                      $ver[5]."||".
                                                      $ver[6]."||".
                                                      $ver[7];

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
                                               
                                                <!-- <td> -->
                                                     <!-- <button class="btn btn-primary fa-solid fa-eye"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarNovedades"  onclick="agregarDatosFormulario('<?php //echo $datos1; ?>')"></button> -->
                                                     <!-- <button class="btn btn-secondary fa-solid fa-pen"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarNovedades"  onclick="agregarDatosFormulario('<?php //echo $datos1; ?>')"></button> -->
                                                     <!--<button class="btn btn-primary fa-solid fa-eye"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditar" onclick="alert(<?php # echo $ver[0].'*'.$ver[2].'||'.$ver[2].'||'.$ver[3].'||'.$ver[4].'||'.$ver[5]; ?>)"></button>-->
                                                    <!--  <button class="btn btn-success bi bi-book"  data-bs-toggle="modal" data-bs-target="#modalAsignarElemento"  onclick="asignarElemento('<?php //echo $datos1; ?>')"></button> -->
                                                    <!-- </td> -->
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





<!-- inicio formulario movimiento elemento-->

<div class="modal fade" id="modalAsignarElemento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Movimientos</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <label for=""># Elemento</label>
                <br>
                <input type="text" id="idz" class="form-control input-sm" disabled>
                <br>
                <label for="" >Serial:</label>
                <br>
                <input type="text" id="serialElementoz" class="form-control input-sm" required disabled>
                <br>
                <label for="" >Modelo:</label>
                <br>
                <input type="text" id="modeloElementoz" class="form-control input-sm" required disabled> 
                <br>
                <label for="" >Tipo Dispositivo:</label>
                <br>
                <input type="text" id="tipoDispositivoz" class="form-control input-sm" required disabled>
                <br>
                <label for="" >Seleccione Estado:</label>
                <br>
                <?php  
                $sql_items =   "SELECT * FROM items";
                $resultado_items = mysqli_query($conexion, $sql_items);

                $sql_estados_hardware =   "SELECT * FROM estados_hardware";
                $resultado_estados_hardware = mysqli_query($conexion, $sql_estados_hardware);
                ?>
                <select class="form-select" id="id_estado_hardware" aria-label="Default select example" required >
                <option selected>Buscar estado:</option>
                    <?php while($row = mysqli_fetch_assoc($resultado_estados_hardware)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['estado_Hardware']; ?></option>
                <?php endwhile; ?>
                </select>
                <label for="" >Seleccione Asignatario:</label>
                <br>
                
                <select class="form-select" id="items_asignatario" aria-label="Default select example" required>
                <option selected>Buscar estado:</option>
                    <?php while($row = mysqli_fetch_assoc($resultado_items)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombreItem']; ?></option>
                <?php endwhile; ?>
                </select>
                <br>
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion:</label>
                <textarea class="form-control" type="text"  id="descripcionElementoz" rows="3"></textarea>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarMovimientoElemento">Agregar</button>
                </div>


            </div>
        </div>

    </div>

</div>
</div>
<!-- final formulario movimiento elemento ->