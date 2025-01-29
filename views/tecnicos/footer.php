
<br>
<footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted ">Copyright &copy; <b>Dev:</b> Jose Luis Lopez A</div>
                   <!--  <div>
                        <a href="#">Privacy Policy</a>
                            &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div> -->
                </div>
            </div>
        </div>
</footer>
<!-- Antes estaba aca   -->

         <!-- JS-->
        <script src="../../js/time.js"></script>
        
        <script src="../../js/simple-datatables.min.js"></script>
        <script src="../../js/datatables-simple-demo.js"></script>
        <script src="../../js/alertifyjs/alertify.js"></script>
        <script src="../../js/all.js"></script>

        <script src="../../js/bootstrap.bundle.min.js"></script>
        <script src="../../js/scripts.js"></script>
        <!-- <script src="../../js/funciones.js"></script> -->
        <!-- <script src="../../js/funciones_EditarNovedadesTecnicos.js"></script> -->
        <script src="../../js/funciones_registrarCategorias.js"></script>
        <script src="../../js/funciones_registrarSoftware.js"></script>
        <script src="../../js/funciones_registrarHardware.js"></script>
        <script src="../../js/funciones_registrarMarca.js"></script>
        <script src="../../js/funciones_registrarItem.js"></script>
        <script src="../../js/funciones_registrarElemento.js"></script>
        <script src="../../js/funciones_registrarCategoriasElemento.js"></script>
        <script src="../../js/funciones_registrarMantenimiento.js"></script>
        <script src="../../js/funciones_registrarMovimientoLicSoftware.js"></script>

    </body>
</html>

<script type="text/javascript">
        $(document).ready(function(){

                $('#actualizaDatosNovedades').click(function(){ 
                    /* alert("ejecucion boton Novedades"); */ 
                    actualizaDatosNovedades();  
                    
                });

                $('#actualizaDatosSolicitudes').click(function(){
                    /* alert("ejecucion boton Solicitudes"); */
                    actualizaDatosSolicitudes();
                    
                    
                });

                $('#actualizaDatosIncidentes').click(function(){
                    /* alert("ejecucion boton incidentes"); */
                    actualizaDatosIncidentes();
                });

                $('#registrarSoftware').click(function(){
                    /* alert('Probando boton de registro software'); */
                    nombreSoftware = $('#nombreSoftware').val();
                    categoria_id = $('#categoria_id').val();
                    fecha_adquisicion = $('#fecha_adquisicion').val();
                    arquitectura = $('#arquitectura').val();
                    sistema = $('#sistema').val();
                    licencias = $('#licencias').val();
                    descripcion = $('#descripcion').val();
                    /* soporte = $('#soporte').val(); */
                    if (nombreSoftware == "" || categoria_id == "" || fecha_adquisicion == "" || arquitectura == "" || sistema == "" || licencias == "" || descripcion == "" ) {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")

                    }else{
                        registrarSoftware(nombreSoftware, categoria_id, fecha_adquisicion, arquitectura, sistema, licencias, descripcion);

                    }
                    
                });

                $('#registrarMovimientoSoftware').click(function(){
                     /* alert('Probando boton de registro software'); */
                     id_software = $('#id_software').val();
                     clave = $('#clave').val();
                     clave_phone01 = $('#clave_phone01').val();
                     clave_phone02 = $('#clave_phone02').val();
                     id_distribuidor =  $('#id_distribuidor').val();
                     id_item = $('#id_item').val();
                     id_estados_software = $('#id_estado_software').val();
                    /* soporte = $('#soporte').val(); */
                    if (id_software == "" || clave == "" || clave_phone01 == "" || clave_phone02 == ""|| id_distribuidor == "" || id_item == "" || id_estados_software == "" ) {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                    }else{
                        
                        registrarMovimientoLicSoftware(id_software, clave, clave_phone01, clave_phone02, id_distribuidor, id_item, id_estados_software);
                    
                    }
                });

               

                $('#registrarHardware').click(function(){
                    nombreHardware = $('#nombreHardware').val();
                    id_marca = $('#id_marca').val();
                    serialHardware = $('#serialHardware').val();
                    capacidadHardware = $('#capacidadHardware').val();
                    id_estado = $('#id_estado').val();
                    id_asignatario = $('#id_asignatario').val();
                    descripcionHardware = $('#descripcionHardware').val();
                    if (nombreHardware == ""|| id_marca == "" || serialHardware == "" || capacidadHardware == "" || id_estado == "" || id_asignatario == "" || descripcionHardware == "" ) {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")

                    }else{ 
                        registrarHardware(nombreHardware,id_marca,serialHardware,capacidadHardware,id_estado,id_asignatario,descripcionHardware);
                    } 
                      
                });

                $('#registrarMarcas').click(function(){
                    alert("ejecutando boton");
                    nombremarca = $('#nombremarca').val();
                    if (nombremarca == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                        
                    }else{
                        alert('Probando boton de registro marcas');
                        registrarMarcas(nombremarca);
                    }
                    
                });
                
                $('#registrarItem').click(function(){
                    nombreItem = $('#nombreItem').val();
                    if (nombreItem == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                    }else{
                        alert('Probando boton de registro marcas');
                        registrarItem(nombreItem);
                    }
                    
                });

                $('#registrarElemento').click(function(){
                    serialElemento = $('#serialElemento').val();
                    id_categoriaElemento = $('#id_categoriaElemento').val();
                    id_marca = $('#id_marca').val();
                    modeloElemento = $('#modeloElemento').val();
                    fecha_adquisicion = $('#fecha_adquisicion').val();
                    id_asignatario = $('#id_asignatario').val();
                    id_estado = $('#id_estado').val();
                    id_sistemas_op = $('#id_sistemas_op').val();
                    descripcionElemento = $('#descripcionElemento').val();
                    if (serialElemento == "" || id_categoriaElemento == "" || id_marca == "" || modeloElemento == "" || fecha_adquisicion == "" || id_asignatario == "" || id_estado == "" || id_sistemas_op == "" || descripcionElemento == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                    }else {
                        registrarElemento(serialElemento, id_categoriaElemento, id_marca, modeloElemento, fecha_adquisicion, id_asignatario, id_estado,id_sistemas_op,  descripcionElemento);
                    }
                    
                });

                $('#registrarCategoriasElemento').click(function(){
                    elementoCategoria = $('#elementoCategoria').val();
                    if (elementoCategoria == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS")
                    } else {
                        registrarCategoriasElemento(elementoCategoria);
                    }
                    /* alert('Probando boton de registro marcas'); */
                
                });

                $('#registrarNuevaCategoria').click(function(){
                    nombreCategoria = $('#nombreCategoria').val();
                    if (nombreCategoria == "") {
                        alert("POR FAVOR DILIGENCIAR TODOS LOS CAMPOS");
                        } else {    
                            registrarNuevaCategoria(nombreCategoria);
                        }
                });

                $('#registrarMovimientoElemento').click(function(){
                
                    id_elemento = $('#idz').val();
                    id_estado_hardware = $('#id_estado_hardware').val();
                    items_asignatario = $('#items_asignatario').val();
                    descripcionElemento = $('#descripcionElementoz').val();

                    registrarMovimiento(id_elemento,
                                        id_estado_hardware,
                                        items_asignatario,
                                        descripcionElemento);
                });

                
        });

                
</script>



<script>
    function validateNoNewLines(input) {
    input.value = input.value.replace(/(\r\n|\n|\r)/gm, "");
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaNovedades').load('../../componentes/tablas_helpdesk.php');
       /*  alert("ok"); */
    });
</script>

<script>
    function agregarDatosFormularioNovedades(datos1) {
  alert("Ingresa a la funcion");
 
    d = datos1.split("||");
    $("#idu").val(d[0]); 
    $("#id_usuariou").val(d[1]);
    $("#titulou").val(d[2]);
    $("#descripcionu").val(d[3]);
    $("#fecha_upu").val(d[5]);
    $("#id_estado_novedadu").val(d[6]); 
   
  }
</script>

<!-- CARGAR DATOS EN DataTables -->
<!-- <script type="text/javascript">
  $(document).ready(function () {
    $('#tabla').load('componentes/tabla.php');
     $('#buscador').load('componentes/buscador.php');
  });
</script> -->





