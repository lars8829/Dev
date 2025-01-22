
<script>
     function retencion(){
           /*  alert("ingresa"); */
            let checkbox = document.getElementById("pasa");
            let formulario = document.getElementById("formulario");

            if (checkbox.checked) {
                formulario.style.display = "block";
            }else{
                formulario.style.display = "none";
            }
        }
</script>

<body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">Panel de Trabajo</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Caja Menor</li>
                        </ol>

                        <p class="mb-0">
                            <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarMovimientoCaja"><i class="fa-solid fa-plus"></i> Agregar Movimiento</button> 
                            <button type="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registrarUsuario"><i class="fa-solid fa-plus"></i> Agregar Usuario</button>
                            <button type="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#registrarBancos"><i class="fa-solid fa-plus"></i> Agregar Bancos</button>
                           
                        </p> 
                       <!--  <br>
                        <p class="mb-0">
                            <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCaja"><i class="fa-solid fa-plus"></i> Agregar Usuario</button> 
                        </p>  -->    
                        <br>
                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Historico Caja Menor
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Quien Solicita</th>  <!--CREAR UN SELECT  -->
                                                    <th>Numero Factura</th>
                                                    <th>Fecha</th>
                                                    <th>Valor Pagado</th>
                                                    <th>Descripcion</th>
                                                    <th>Mostrar</th>
                                                </tr>
                                            </thead>
                                            <tbody>   
                                                <?php
                                                
                                                $sql ="SELECT m.id, m.descripcion, mu.nombres, m.nfactura, m.fecha_Movimiento, FORMAT(m.valor, 2)
                                                        FROM movimientos_caja_menor m
                                                        INNER JOIN movimientos_usuarios  mu on mu.id = m.solicitud_usuario
                                                        ORDER BY m.id;";

                                                       $result = mysqli_query($conexion,$sql);
                                                       while ($ver = mysqli_fetch_row($result)){
                                                       $datosM = $ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5];
                                                ?>
                                                <tr>
                                                <td><?php echo $ver[0] ?></td>
                                                <td><?php echo $ver[2] ?></td>
                                                <td><?php echo $ver[3] ?></td>
                                                <td><?php echo $ver[4] ?></td>
                                                <td><?php echo $ver[5] ?></td>
                                                <td><?php echo $ver[1] ?></td>
                                                
                                                <td>
                                                     <button class="btn btn-primary fa-solid fa-eye"  data-bs-toggle="modal" data-bs-target="#modalNovedadesEditarNovedades"  onclick="agregarDatosFormulario('<?php // echo $datos1; ?>')"></button>
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

<br><br><br>

</div></div></div></div>

<!-- inicio Formularios caja menor -->

<div class="modal fade" id="modalAgregarMovimientoCaja" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario Registro de Movimientos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
            
                <div class="card">
                    <div class="card-header">Datos Origen</div>
        <div class="card-body">
            <select class="form-select" id="solicitud_usuario" aria-label="Default select example" required>
                            <option select>Selecione Usuario:</option>
                            <?php              
                            $sql_musuarios = "SELECT DISTINCT id, nombres FROM movimientos_usuarios LIMIT 1";
                            $resultado_musuarios = mysqli_query($conexion, $sql_musuarios);
                            ?>
                            <?php while($row = mysqli_fetch_assoc($resultado_musuarios)): ?>
                                <option value="<?php  echo $row['id']; ?>"><?php echo $row['nombres']; ?></option>
                            <?php endwhile; ?>
                            </select>
                            <br>
                            <select class="form-select" id="solicitud_usuario" aria-label="Default select example" required>
                            <option select>Selecione Banco Origen:</option>
                            <?php              
                            $sql_musuarios = "SELECT * FROM movimientos_bancos";
                            $resultado_musuarios = mysqli_query($conexion, $sql_musuarios);
                            ?>
                            <?php while($row = mysqli_fetch_assoc($resultado_musuarios)): ?>
                                <option value="<?php  echo $row['id']; ?>"><?php echo $row['nombreBanco']; ?></option>
                            <?php endwhile; ?>
                            </select>
                            <br>

                            <select class="form-select" id="id_area" aria-label="Default select example" required>
                            <option select>Selecione Area:</option>
                            <?php              
                            $sql_musuarios = "SELECT * FROM areas";
                            $resultado_musuarios = mysqli_query($conexion, $sql_musuarios);
                            ?>
                            <?php while($row = mysqli_fetch_assoc($resultado_musuarios)): ?>
                                <option value="<?php  echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php endwhile; ?>
                            </select>
                            <br>
            </div>
    </div>
<br>
<div class="card">
  <div class="card-header">
    Datos Movimiento:
  </div>
  <div class="card-body">

                <label for="" >Numero factura:</label>
                <br>
                <input type="text" id="nfactura" class="form-control input-sm" required> 
                <br>
                <label for="">Valor a Pagar:</label>
                <br>
                <input type="number" id="valor" class="form-control input-sm" required>
               <br>
               <label for="">
               <input type="checkbox" id="pasa" onclick="retencion()"> Aplica Retension</label>
               <br>
               <label for="">
               <input type="checkbox" id="pasa" onclick="retencion()"> Aplica Anticipo</label>

  </div>
</div>
<br>
<div class="card" id="formulario" style="display: none;">
  <div class="card-header">
    Aplica Retencion
  </div>
  <div class="card-body">
            <br>
               <label for="">Ingrese Iva:</label>
                <br>
                <input type="number" id="valor1" class="form-control input-sm" required>
            <br>
               <label for="">Valor retension:</label>
                <br>
                <input type="number" id="valor2" class="form-control input-sm" required>
            <br>
            
    
  </div>
</div>
                
                <?php while($row = mysqli_fetch_assoc($resultado_musuarios)): ?>
                    <option value="<?php  echo $row['id']; ?>"><?php echo $row['ncuenta']; ?></option>
                <?php endwhile; ?>
                </select>
                <br>
                <select class="form-select" id="solicitud_usuario" aria-label="Default select example" required>
                <option select>Selecione Banco Destino:</option>
                <?php              
                $sql_musuarios = "SELECT * FROM movimientos_bancos";
                $resultado_musuarios = mysqli_query($conexion, $sql_musuarios);
                ?>
                <?php while($row = mysqli_fetch_assoc($resultado_musuarios)): ?>
                    <option value="<?php  echo $row['id']; ?>"><?php echo $row['nombreBanco']; ?></option>
                <?php endwhile; ?>
                </select>
            
                <label for="" >Numero factura:</label>
                <br>
                <input type="text" id="nfactura" class="form-control input-sm" required> 
                <br>
                <br >     
                <select class="form-select" id="id_area" aria-label="Default select example" required>
                <option select>Selecione Area:</option>
                <?php              
                $sql_musuarios = "SELECT * FROM areas";
                $resultado_musuarios = mysqli_query($conexion, $sql_musuarios);
                ?>
                <?php while($row = mysqli_fetch_assoc($resultado_musuarios)): ?>
                    <option value="<?php  echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                <?php endwhile; ?>
                </select>
                <br>
                <label for="" >Descripcion:</label>
                <br><br>
                <textarea type="text" id="descripcion" class="form-control input-sm" oninput="convertirMayusculas(this)" required></textarea>
                <br>
                <br>
                <label for="">Fecha:</label>
                <br>
                <input type="date" id="fecha_Movimiento" class="form-control input-sm" required>
               <br>
               <label for="">Valor Pagado:</label>
                <br>
                <input type="number" id="valor" class="form-control input-sm" required>
               <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarMovimientoCaja">Agregar Movimiento</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        $('#registrarMovimientoCaja').click(function(){
            borrarFormulario();
            descripcion = $('#descripcion').val();
            solicitud_usuario = $('#solicitud_usuario').val();
            nfactura = $('#nfactura').val();
            fecha_Movimiento = $('#fecha_Movimiento').val();
            valor =  $('#valor').val();
                    /* soporte = $('#soporte').val(); */
            if (descripcion == "" || solicitud_usuario == "" || nfactura == "" || fecha_Movimiento == ""|| valor == "") {
                    alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                }else{  
                    registrarMovimientoCaja(descripcion, solicitud_usuario, nfactura, fecha_Movimiento, valor);
                }      
        });
        $('#registrarM_Usuarios').click(function(){
            /* borrarFormulario(); */
            nombres = $('#nombres').val();
            ncuenta = $('#ncuenta').val();
            id_banco = $('#id_banco').val();
                    /* soporte = $('#soporte').val(); */
            if (nombres == "" || ncuenta =="" || id_banco =="") {
                    alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                }else{  
                    registrarM_Usuarios(nombres, ncuenta, id_banco);
                }      
        });
       
        $('#registrarM_Bancos').click(function(){
            /* borrarFormulario(); */
            nombreBanco  = $('#nombreBanco').val();

            if (nombreBanco == "") {
                    alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                }
            else{  
                    registrarM_Bancos(nombreBanco);
            } 
        });

        

        $('#registrarM_Cuentas').click(function(){
            borrarFormulario();
            ncuenta   = $('#ncuenta').val();
                    /* soporte = $('#soporte').val(); */
            if (ncuenta == "") {
                    alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                }else{  
                    registrarM_Cuentas(ncuenta);
                }      
        });

        function borrarFormulario(){
            alert("ingresa");
           /*  $('#nombreBanco').val("");
            $('#ncuenta').val("");
            $('#nombres').val("");
            $('#descripcion').val("");
            $('#solicitud_usuario').val("");
            $('#nfactura').val("");
            $('#fecha_Movimiento').val(""); */
            
        }

        /* function retension(){
            alert("ingresa");
            let checkbox = document.getElementById("pasa");
            let formulario = document.getElementById("formulario");

            if (checkbox.checked) {
                formulario.style.display = "block";
            }else{
                formulario.style.display = "none";
            }
        } */
  
    });
</script>



<!--fin formulario caja menor -->



<!-- inicio Formularios caja menor -->

<div class="modal fade" id="registrarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario creacion de Usuarios</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
                <div class="modal-body">
                
                <label for="" >Nombres Usuario:</label>
                <br>
                <input type="text" id="nombres" class="form-control input-sm" oninput="convertirMayusculas(this)" required>
                <br>
                <label for="" >Ingrese Cuenta:</label>
                <br>
                <input type="text" id="ncuenta" class="form-control input-sm" oninput="convertirMayusculas(this)" required>
                <br>
                <select class="form-select" id="id_banco" aria-label="Default select example" required>
                <option select>Selecione Banco Origen:</option>
                <?php              
                $sql_musuarios = "SELECT * FROM movimientos_bancos";
                $resultado_musuarios = mysqli_query($conexion, $sql_musuarios);
                ?>
                <?php while($row = mysqli_fetch_assoc($resultado_musuarios)): ?>
                    <option value="<?php  echo $row['id']; ?>"><?php echo $row['nombreBanco']; ?></option>
                <?php endwhile; ?>
                </select>
               <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarM_Usuarios">Agregar Usuario</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="registrarBancos" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
                <div class="modal-body">
                
                <label for="" >Ingrese Nombre Banco:</label>
                <br>
                <input type="text" id="nombreBanco" class="form-control input-sm" oninput="convertirMayusculas(this)" required>
               <!--  <span id="bancoError" style="color:red; display:none;">Este Banco ya está registrado.</span> -->
               <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarM_Bancos">Agregar Banco</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registrarCuentas" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
                <div class="modal-body">
                
                <label for="" >Ingrese Numero Cuenta:</label>
                <br>
                <input type="text" id="ncuenta" class="form-control input-sm" oninput="convertirMayusculas(this)" required>
                
               <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarM_Cuentas">Agregar Cuenta</button>
                </div>
            </div>
        </div>
    </div>
</div>





<br>
<br>