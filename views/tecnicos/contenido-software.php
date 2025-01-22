<?php

session_start();
$usuario = $_SESSION['usuario'];


include '../../php/config.php';
$conexion = retornarConexion();

/* QUERY SELECT */
$sql_categorias =   "SELECT * FROM categorias_software";
$resultado_categorias = mysqli_query($conexion, $sql_categorias);

$sql_items =   "SELECT * FROM items";
$resultado_items = mysqli_query($conexion, $sql_items);

$sql_movimientos = "SELECT * FROM software";
$resultado_movimientos = mysqli_query($conexion, $sql_movimientos);

$sql_estados = "SELECT * FROM estados_Software";
$resultado_estados= mysqli_query($conexion, $sql_estados);

$sql_distribuidores = "SELECT * FROM distribuidores";
$resultado_distribuidores= mysqli_query($conexion, $sql_distribuidores);




include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';
?>
<body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de Software</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Software</li>
                        </ol>

                        <p class="mb-0">
                            <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSoftware"><i class="fa-solid fa-plus"></i> Agregar Software</button> 
                            <button type="" class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#modalCategorias"><i class="fa-solid fa-plus"></i> Agregar Categoria</button> 
                               
                        </p>
                        
                        
            <br>

                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Tabla General Software
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Categoria</th>
                                                    <th>Fecha adquisición</th>
                                                    <th>Arquitectura</th>
                                                    <th>Sistema Operativo</th>
                                                    <th>Licencias</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            /* Abrimos conection bd */
                                            /* include '../../php/config.php';
                                            $conexion = retornarConexion(); */

                                           /* Creamos query  */

                                        $sql = "SELECT s.id, s.nombreSoftware, c.nombreCategoria,
                                                         s.fecha_adquisicion, s.arquitectura, 
                                                         s.sistema, s.licencias
                                                        FROM software s
                                                        inner join categorias_software c on s.categoria_id = c.id
                                                        ORDER BY s.id";
                                            
                                            $result = mysqli_query($conexion,$sql);
                                            while ($ver = mysqli_fetch_row($result)) {
                                            $datos1 = $ver[0]."||".
                                                      $ver[1]."||".
                                                      $ver[2]."||".
                                                      $ver[3]."||".
                                                      $ver[4]."||".
                                                      $ver[5]."||".
                                                      $ver[6]/* ."||".
                                                      $ver[7] *//* ."||".
                                                      $ver[8] */;
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
                                                
                                               

                                                <td>
                                                     <button class="btn btn-primary fa-solid fa-eye"  data-bs-toggle="modal" data-bs-target="#modalMovimientoSoftware"  onclick="agregarDatosFormulario('<?php echo $datos1; ?>')"></button>
                                                     <!-- <button class="btn btn-secondary fa-solid fa-pen"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarNovedades"  onclick="agregarDatosFormulario('<?php echo $datos1; ?>')"></button> -->
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
                        <br><br>
                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Movimientos Software
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple2">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Software</th>
                                                    <th>Clave Activacion</th>
                                                    <th>Clave_phone01</th>
                                                    <th>Clave_phone02</th>
                                                    <th>Asignado:</th>
                                                    <th>Distribuidor</th>
                                                    <th>Estado Actual</th>
                                                    <th>Fecha M</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            /* Abrimos conection bd */
                                            /* include '../../php/config.php';
                                            $conexion = retornarConexion(); */

                                           /* Creamos query  */

                                        $sql = "SELECT ms.id, s.nombreSoftware, ms.clave, ms.clave_phone01, ms.clave_phone02, d.nombre, i.nombreItem, es.nombre, ms.fecha_log
                                                FROM movimientos_software ms
                                                inner join software s on ms.id_software = s.id
                                                inner join items i on ms.id_item  = i.id
                                                inner join estados_software es on ms.id_estados_software = es.id
                                                inner join distribuidores d on ms.id_distribuidor = d.id
                                                ORDER BY ms.id;";
                                            
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
                                                <td><?php echo $ver[6] ?></td>
                                                <td><?php echo $ver[5] ?></td>
                                                <td><?php echo $ver[7] ?></td>
                                                <td><?php echo $ver[8] ?></td>
                                                
                                               

                                               
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
<br><br><br>

<!-- inicio Formularios software -->

<div class="modal fade" id="modalSoftware" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
                <div class="modal-body">
                
                <label for="" >Nombre:</label>
                <br>
                <input type="text" id="nombreSoftware" class="form-control input-sm" required>
               
                <br>
                <select class="form-select" id="categoria_id" aria-label="Default select example" required>
                    <option value="">Selecione Tipo Categoria:</option>
                    <?php while($row = mysqli_fetch_assoc($resultado_categorias)): ?>
                        <option value="<?php echo $row['id'];?>"><?php echo $row['nombreCategoria']; ?></option>
                    <?php endwhile; ?>
                </select>
                <br>           
                <label for="">Fecha Adquisicion:</label>
                <br>
                <input type="date" id="fecha_adquisicion" class="form-control input-sm" required>
               <br>
              <select class="form-select" id="arquitectura" aria-label="Default select example" required>
                    <option selected>Selecione arquitectura:</option>
                    <option value="X32">X32</option>
                    <option value="X64">X64</option>
                </select>
                <br>     
                <select class="form-select" id="sistema" aria-label="Default select example" required>
                <option selected>Sistema Operativo:</option>
                <option value="WINDOWS SERVER/10/11">WINDOWS SERVER/10/11</option>
                <option value="MAC">MAC</option>
                </select>
                <br>
                <label for="" >Licencias:</label>
                <br>
                <input type="number" id="licencias" class="form-control input-sm" required> 
                <br>
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion:</label>
                <textarea class="form-control" id="descripcion" rows="3"></textarea>
                <br>
               <!--  <select class="form-select" id="items_id" aria-label="Default select example" required>
                <option selected>Asignar Item:</option> 
                    <?php //while($row = mysqli_fetch_assoc($resultado_items)): ?>
                        <option value="<?php // echo $row['id'];?>"><?php //echo $row['nombreItem']; ?></option>
                    <?php //endwhile; ?>
                </select> -->
                <br>
               <!--  <label for="" >Soporte Compra:</label>
                <br>
                <input type="file" id="soporte" name="soporte" class="form-control input-sm" required>
               <br> -->
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarSoftware">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin formulario software -->



<!-- inicio formulario categorias-->

<div class="modal fade" id="modalCategorias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <label for="" >Ingrese Categoria:</label>
                    <br>
                    <input type="text" id="nombreCategoria" class="form-control input-sm" required>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarCategorias">Agregar</button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- final formulario categorias-->

<!-- inicio formulario item -->


<div class="modal fade" id="modalMovimientoSoftware" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Movimientos Software</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <br>
                    <select class="form-select" id="id_software" aria-label="Default select example" required>
                        <option value="">Selecione Software:</option>
                        <?php while($row = mysqli_fetch_assoc($resultado_movimientos)): ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['nombreSoftware']; ?></option>
                        <?php endwhile; ?>
                    </select>
                    <br>
                        
                    <label for="" >Key Activacion:</label>
                    <br>
                    <input type="text" id="clave" class="form-control input-sm" required >
                    <br>
                    <label for="" >Key Phone Out:</label>
                    <br>
                    <input type="text" id="clave_phone01" class="form-control input-sm" required >
                    <br>
                    <label for="" >Key Phone Activacion:</label>
                    <br>
                    <input type="text" id="clave_phone02" class="form-control input-sm" required >
                    <br>
                    <select class="form-select" id="id_distribuidor" aria-label="Default select example" required>
                        <option value="">Distribuidor Software:</option>
                        <?php while($row = mysqli_fetch_assoc($resultado_distribuidores)): ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['nombre']; ?></option>
                        <?php endwhile; ?>
                    </select>
                    <br>
                    <select class="form-select" id="id_item" aria-label="Default select example" required>
                        <option value="">Asignado a:</option>
                        <?php while($row = mysqli_fetch_assoc($resultado_items)): ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['nombreItem']; ?></option>
                        <?php endwhile; ?>
                    </select>
                    <br>
                    <select class="form-select" id="id_estado_software" aria-label="Default select example" required>
                        <option value="">Estado:</option>
                        <?php while($row = mysqli_fetch_assoc($resultado_estados)): ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['nombre']; ?></option>
                        <?php endwhile; ?>
                    </select>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarMovimientoSoftware">Guardar Movimiento</button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- final formulario item-->
</div>
</div>

      
<?php

include 'footer.php'; 

?>

  





