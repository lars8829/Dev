

<button type="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalSolicitudes">Reportar Novedad <i class="fa-solid fa-plus"></i> </button>
                            

    <table class="table table-hover table-condensed table-bordered" id="CargaDatosNovedadesClientes">
                                    <caption>
                                        
                                    
                                    </caption>
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Descripcion Caso:</td>
                                            <td>Tipo Novedad</td>
                                            <td>Categoria</td>
                                            <td>Creado por:</td>
                                            <td>Estado</td>
                                            <td>Fecha Creacion</td>
                                            
                                           <!--  <td>Fecha Cierre</td> -->
                                            <!-- <td>Crear OT</td> -->
                                            <td>Mostrar</td>
                                            <td>Reabrir Caso</td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                            include '../php/config.php';
                                            $conexion = retornarConexion();


                                            /* $sql = "select n.id, 
                                            from novedades n
                                            inner join  " */
                                            session_start();

                                            /* if ($_SESSION['id'] == 4 ) {
                                                $filtro= " where id_usuario='".$_SESSION['id' ]."'";
                                            }else{
                                                $filtro="";
                                            } */



                                           /* $sql = "SELECT * FROM novedades"; */
                                           $sql_novedades = "select n.id, n.titulo, p.nombre, c.nombreCategoria, u.email, e.nombre, n.fecha_up, n.descripcion_cliente, n.descripcion_tecnico
                                           from novedades n 
                                           LEFT join peticiones p on n.id_peticiones = p.id 
                                           LEFT join categorias c on n.id_categorias = c.id 
                                           inner join usuarios u on n.id_usuario = u.id 
                                           inner join estado_novedades e on n.id_estado_novedad = e.id 
                                           where u.id='$_SESSION[id]'
                                           order by n.id"; 
                                          /*  $sql .= $filtro; */

                                       /*    where u.id='4' order by n.id"; */
                                           
                                          /*  $sql .=" order by n.id  ";
                                           print $sql; */
                                           /* print $sql; */
                                         
                                           $result_novedades = mysqli_query($conexion,$sql_novedades);
                                           while ($ver = mysqli_fetch_row($result_novedades)) {
                                            $datos = $ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7]."||".$ver[8];
                                            ?>
                                            <tr>
                                            <td><?php echo $ver[0] ?></td>
                                            <td><?php echo $ver[1] ?></td>
                                            <td><?php echo $ver[2] ?></td>
                                            <td><?php echo $ver[3] ?></td>
                                            <td><?php echo $ver[4] ?></td>
                                            <td><?php echo $ver[5] ?></td>
                                            <td><?php echo $ver[6] ?></td>
                



                                            <!-- <td><button class="btn btn-warning fa-solid fa-list-check" onclick="abrirModalEm(<?php //echo $ver[0]; ?>)"></button>   
                                            </td> -->
                                            <td><button class="btn btn-primary bi bi-pencil"  data-bs-toggle="modal" data-bs-target="#HistorialCliente" onclick="agregarDatosNovedadesCliente('<?php  echo $datos; ?>')"></button>   
                                            </td>
                                            <td><button class="btn btn-warning bi bi-pencil"  data-bs-toggle="modal" data-bs-target="#HistorialCliente2" onclick="abrirModalEm(<?php echo $datos; ?>)"></button>   
                                            </td>


                                            
                                            
                                            </tr>
                                          <?php
                                           }
                                        ?>
                                    </tbody>
                                </table>

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

                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="descripcion_cliente" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Observaciones</label>
                                    </div>
                                   <!--  <div class="mb-3">
                                        <label for="formFile" class="form-label" id="archivo">Adjuntar Info</label>
                                        <input class="form-control" type="file" id="formFile">
                                      </div> -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarSolicitudClientes">Agregar</button>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- FINAL FORMULARIO NOVEDADES -->

                 <!-- FORMULARIO REVISAR SOLUCION -->

                 <div class="modal fade" id="HistorialCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content" id="caja">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for="" >Ticket:</label>
                                    <input type="text"  id="idx" disabled >
                                    <br>
                                 
                                    <br>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="descripcion_usuariox" style="height: 100px" required disabled ></textarea>
                                        <label for="floatingTextarea2">Observaciones Usuario</label>
                                    </div>
                                    <br>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="descripcion_analistax" style="height: 100px" required disabled ></textarea>
                                        <label for="floatingTextarea2">Observaciones Analista</label>
                                    </div>
                                  
                                     <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                 <!-- FINAL REVISAR SOLUCION -->                          
                                        


                                          
                 <!-- FORMULARIOS REABRIR  -->

                 <div class="modal fade" id="HistorialCliente2" tabindex="-1" data-bs-toggle="modal" aria-labelledby="exampleModalLabel" aria-hidden="">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content" id="caja">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for="" >Ticket:</label>
                                    <br>
                                   <!--  <input type="text" id="titulor" class="form-control input-sm" required> -->
                                    <br>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label" id="archivo">Adjuntar Info</label>
                                        <input class="form-control" type="file" id="formFile">
                                      </div>
                                      <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="descripcion_reapertura" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Observaciones</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarSolicitudClientes2">Guardar</button>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>







<script type="text/javascript">
    $(document).ready(function(){
        $('#CargaDatosNovedadesClientes').DataTable({
            dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
            language:{
    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla =(",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }
}
        });
    });
</script>

<script>
$(document).ready(function(){
    $('#registrarSolicitudClientes').click(function(){
       
        titulo = $('#titulo').val();
        descripcion_cliente = $('#descripcion_cliente').val();

        if (titulo == "" || descripcion_cliente == "") {
            alert("POR FAVOR LLENAR TODOS LOS ESPACIOS")
        } else {
            agregarNovedadesClientes(titulo,descripcion_cliente);
        }
   
     
    });

   /*  $('#agregarDatosNovedadesCliente').click(function(){
       alert("pruebaS");
        agregarDatosNovedadesCliente();
    
   }); */
   

  
});
</script>




<!-- <script>
$(document).ready(function(){
    $('#registrarSolicitudClientes2').click(function(){
       
        titulo = $('#titulo').val();
        descripcion_cliente = $('#descripcion_cliente').val();

        if (titulo == "" || descripcion_cliente == "") {
            alert("POR FAVOR LLENAR TODOS LOS ESPACIOS")
        } else {
            agregarNovedadesClientes(titulo,descripcion_cliente);
        }
   
     
    });



 -->









<script>
    /* function agregarDatosNovedadesCliente(datos) {
    console.log(datos);
  } */
</script> 



