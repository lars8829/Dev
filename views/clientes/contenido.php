
    <body>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Panel de Novedades </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="inicio.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Novedades</li>
                        </ol>

                        <div class="row">
                            <div class="col-sm-12">

                            <div class="" id="tabla"></div>

                            </div>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                </p>
                               
                                <div class="container" id="tabla">

                                </div>
                                
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        -->
                    </div>  


                    

                

                <?php
               # echo $id; 
                ?>

        <!-- FINAL FORMULARIO NOVEDADES -->


                </main>
                
            </div>
        </div>

        <script src="../../js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
        <script src="../../js/scripts.js"></script>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
         /* alert("Cargando datos.."); */
        $('#tabla').load('../../componentes/tabla.solicitudes.clientes.php');
    });
</script>

<!-- <script>
$(document).ready(function(){
    $('#registrarSolicitudClientes').click(function(){
        alert("prueba boton")
        titulo = $('#titulo').val();
        descripcion_cliente = $('#descripcion_cliente').val();
        console.log(titulo, descripcion_cliente)
      /*   archivo = $('#archivo').val(); */
     /*  if (titulo === '' && descripcion === '') {
        alertify.alert("Favor Ingresar informacion en los campos requeridos");
      }else{
        agregarNovedadesClientes(titulo,descripcion);
      } */
     agregarNovedadesClientes(titulo,descripcion_cliente);
    });

});
</script>
 -->