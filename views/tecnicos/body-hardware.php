 <body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de Stock Partes</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Stock Partes</li>
                        </ol>

                        <p class="mb-0">
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalHardware"><i class="fa-solid fa-plus"></i> Agregar Hardware</button>
                        <button type="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalMarcas"><i class="fa-solid fa-plus"></i> Agregar Marca</button>
                        <button type="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalItem"><i class="fa-solid fa-plus"></i> Agregar Item</button>    
                        </p>
                        </br>

                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Tabla General Stock Partes
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Marca</th>
                                                    <th>Serial</th>
                                                    <th>Capacidad</th>
                                                    <th>Asignatario</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            /* Abrimos conection bd */
                                            /* include '../../php/config.php';
                                            $conexion = retornarConexion(); */

                                           /* Creamos query  */

                                        $sql = "SELECT h.id, 
                                                       h.nombreHardware,
                                                       m.nombremarca,
                                                       h.serialHardware, 
                                                       h.capacidadHardware,
                                                       i.nombreItem,
                                                       e.estado_Hardware
                                                       FROM hardware h 
                                                       inner join marcas m on h.id_marca = m.id 
                                                       inner join items i on h.id_asignatario = i.id 
                                                       inner join estados_hardware e on h.id_estado = e.id 
                                                       ORDER BY h.id";
                                            
                                            $result = mysqli_query($conexion,$sql);
                                            while ($ver = mysqli_fetch_row($result)) {
                                            $datos1 = $ver[0] ."||".
                                                      $ver[1]."||".
                                                      $ver[2]."||".
                                                      $ver[3]."||".
                                                      $ver[4]."||".
                                                      $ver[5]."||".
                                                      $ver[6] /* ."||".
                                                      $ver[7] *//* ."||".
                                                      $ver[8] */;
                                                     // print "<br>".$datos1;
                                                ?>
                                                <tr>
                                                <td><?php  echo $ver[0] ?></td>
                                                <td><?php  echo $ver[1] ?></td>
                                                <td><?php  echo $ver[2] ?></td>
                                                <td><?php  echo $ver[3] ?></td>
                                                <td><?php  echo $ver[4] ?></td>
                                                <td><?php  echo $ver[5] ?></td>
                                                <td><?php  echo $ver[6] ?></td>
                                                
                                               

                                                <td>
                                                     <button class="btn btn-primary fa-solid fa-eye"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarNovedades"  onclick="agregarDatosFormulario('<?php // echo $datos1; ?>')"></button>
                                                     <button class="btn btn-secondary fa-solid fa-pen"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarNovedades"  onclick="agregarDatosFormulario('<?php // echo $datos1; ?>')"></button>
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
</div> 
</div> 
</div>
<!-- inicio formulario Stock Partes-->
<br>
<br>
<div class="modal fade" id="modalHardware" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="" >Nombre:</label>
                <br>
                <input type="text" id="nombreHardware" class="form-control input-sm" required>
                <br>
                <select class="form-select" id="id_marca" aria-label="Default select example" required>
                <option selected>Selecione Marca:</option>
                <?php while($row = mysqli_fetch_assoc($resultado_marcas)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombremarca']; ?></option>
                <?php endwhile; ?>
                </select>
                
                <br>
                <label for="" >Serial:</label>
                <br>
                <input type="text" id="serialHardware" class="form-control input-sm" required>
                <br>
                <label for="" >Capacidad:</label>
                <br>
                <input type="text" id="capacidadHardware" class="form-control input-sm" required>
                <br>
                <select class="form-select" id="id_asignatario" aria-label="Default select example" required>
                <option selected>Selecione Asignatario:</option>
                <?php while($row = mysqli_fetch_assoc($resultado_items)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombreItem']; ?></option>
                <?php endwhile; ?>
                </select>
                <br>

                <select class="form-select" id="id_estado" aria-label="Default select example" required>
                <option selected>Selecione Estado:</option>
                <?php while($row = mysqli_fetch_assoc($resultado_estados_hardware)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['estado_Hardware']; ?></option>
                <?php endwhile; ?>
                </select>
                <br>
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion:</label>
                <textarea class="form-control" type="text"  id="descripcionHardware" rows="3"></textarea>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarHardware">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- final formulario Stock Partes-->

<!-- inicio formulario marca-->

<div class="modal fade" id="modalMarcas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <label for="" >Ingrese Marca:</label>
                    <br>
                    <input type="text" id="nombremarca" class="form-control input-sm" required>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarMarcas">Agregar</button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- final formulario marca-->

<!-- inicio formulario Item-->

<div class="modal fade" id="modalItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <label for="" >Ingrese Item:</label>
                    <br>
                    <input type="text" id="nombreItem" class="form-control input-sm" required>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarItem">Agregar</button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- final formulario item-->

