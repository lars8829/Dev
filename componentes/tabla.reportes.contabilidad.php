

<button type="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalSolicitudes">Agregar Movimiento <i class="fa-solid fa-plus"></i> </button>
                            

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
                                            <!-- <td>Crear OT</td> -->
                                            <td>Mostrar</td>
                                            
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
                                           $sql = "select n.id, n.titulo, p.nombre, c.nombreCategoria, u.email, e.nombre, n.fecha_up 
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
                                         
                                           $result = mysqli_query($conexion,$sql);
                                           while ($ver = mysqli_fetch_row($result)) {
                                            $datos = $ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6];
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
                                            <td><button class="btn btn-primary fa-solid fa-eye" onclick="abrirModalEm(<?php //echo $ver[0]; ?>)"></button>   
                                            </td>
                                            
                                            </tr>
                                          <?php
                                           }
                                        ?>
                                    </tbody>
                                </table>


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
    

