

<?php

session_start();
$usuario = $_SESSION['usuario'];


include '../../php/config.php';
$conexion = retornarConexion();


include 'header-contabilidad.php';
include 'nav.php';
include 'menu.php';
?>
<body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de Nomina</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Nomina</li>
                        </ol>

                        <p class="mb-0">
                            <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNomina"><i class="fa-solid fa-plus"></i> Agregar Nomina</button> 
                                                           
                        </p>
                        
                        
            <br>

                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Reporte Nomina
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Cedula</th>
                                                    <th>Banco</th>
                                                    <th>Tipo Cuenta</th>
                                                    <th>Numero Cuenta</th>
                                                    <th>Nomina Mes</th>
                                                    <th>Valor Consignado</th>  <!-- VALOR EN PESOS -->
                                                    <th>Referencia pago</th>
                                                    <th>Obs</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                               
                                            </tbody>
                                        </table>
                                    </div>
                        </div>   
        </div>                           
<br>         
    
 
<br><br><br>

<!-- inicio Formularios nomina -->

<div class="modal fade" id="modalNomina" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
                <div class="modal-body">
                
                <label for="" >Nombre:</label>
                <br>
                <input type="text" id="nombreNomina" class="form-control input-sm" required>
                <br>      
                <label for="">Cedula:</label>
                <br>
                <input type="numb" id="documento" class="form-control input-sm" required>
               <br>
               <br>      
               <select class="form-select" id="banco" aria-label="Default select example" required>
                    <option selected>Banco:</option>
                    <option value="#">DAVIVIENDA</option>
                </select>
                <br>
              <select class="form-select" id="tipocuenta" aria-label="Default select example" required>
                    <option selected>Tipo de Cuenta:</option>
                    <option value="#">AHORROS</option>
                    <option value="#">CORRIENTE</option>
                </select>
                <br>
                <label for="" >Numero Cuenta:</label>
                <br>
                <input type="text" id="numerocuenta" class="form-control input-sm" required> 
                <br>
                <br>
                <label for="" >Nomina Mes:</label>
                <br>
                <input type="date" id="nominames" class="form-control input-sm" required> 
                <br>
                <label for="" >Valor Consignado:</label>
                <br>
                <input type="text" id="pagonomina" class="form-control input-sm" required> 
                <br>
                <label for="" >Referencia Pago:</label>
                <br>
                <input type="number" id="referencia" class="form-control input-sm" required> 
                <br>
                <label for="" >Obs:</label>
                <br>
                <input type="text" id="obs" class="form-control input-sm" required> 
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
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarNomina">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin formulario nomina -->



      


  

<?php

include 'footer.php'; 

?>






