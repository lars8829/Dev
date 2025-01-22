<?php
include 'header-tecnico.php';
include 'nav.php';
include 'menu.php';

echo ' <body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de Medidores</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Medidores</li>
                        </ol>

                        <p class="mb-0">
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSoftware"><i class="fa-solid fa-plus"></i> Agregar Medidor</button>
                        <button type="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalAplicacion"><i class="fa-solid fa-plus"></i> Agregar Aplicacion</button>      
                        </p>
                        </br>

                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Tabla General Medidores
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Serial Medidor</th>
                                                    <th>Ip Address</th>
                                                    <th>Puerto</th>
                                                    <th>Rango</th>
                                                    <th>Grupo</th>
                                                    <th>Llamador</th>
                                                    <th>Apn</th>
                                                    <th>Aplicacion</th>
                                                    <th>Operador</th>
                                                    <th>Observaciones</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                               
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                
<br>


                
</div> 

</div> 

</div>


<div class="modal fade" id="modalSoftware" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="" >Serial Medidor:</label>
                <br>
                <input type="text" id="serialmedidor" class="form-control input-sm" required>
                <br>
                <label for="" >Ip Address:</label>
                <br>
                <input type="text" id="ipaddress" class="form-control input-sm" required>
                <br>
                
                <label for="" >Puerto:</label>
                <br>
                <input type="number" id="puerto" class="form-control input-sm" required>
                <br>
                <label for="" >Rango:</label>
                <br>
                <input type="text" id="rango" class="form-control input-sm" required>
                <br>
                <select class="form-select" id="grupo" aria-label="Default select example" required>
                    <option selected>Grupo:</option>
                    <option value="">VATIA</option>
                    <option value="">ESSA</option>
                    <option value="">RUITOQUE</option>
                    <option value="">AFINIA</option>
                    <option value="">DICEL</option>
                    <option value="">EEPPM</option>
                    <option value="">EMGESA</option>
                    <option value="">MACROMEDICION</option>
                    <option value="">CELSIA</option>
                    <option value="">EPSA</option>
                    <option value="">GECELGA</option>
                    <option value="">ISAGEN</option>
                    <option value="">ITALENERG</option>
                    <option value="">PEESA</option>
                    <option value="">QIENERGY</option>
                    <option value="">RENOVATIO</option>
                    <option value="">SEMEX ENERGY</option>
                    <option value="">TERPEL ENERGIA</option>
                    <option value="">SUBESTACIONES</option>
                </select>
                <br>
                <select class="form-select" id="llamador" aria-label="Default select example" required>
                    <option selected>Llamador:</option>
                    <option value="">192.168.4.3</option>
                    <option value="">192.168.4.4</option>
                    <option value="">192.168.4.5</option>
                    <option value="">192.168.4.6</option>
                    <option value="">192.168.4.7</option>
                    <option value="">192.168.4.8</option>
                    <option value="">192.168.4.9</option>
                    <option value="">192.168.4.10</option>
                    <option value="">192.168.4.11</option>
                    <option value="">192.168.4.12</option>
                    <option value="">192.168.4.13</option>
                    <option value="">192.168.4.14</option>
                    <option value="">181.48.93.219</option>
                    <option value="">181.49.220.100</option>
                    <option value="">172.23.168.34</option>
                    <option value="">190.130.123.73</option>
                </select>
                <br>
                <select class="form-select" id="apn" aria-label="Default select example" required>
                    <option selected>Apn:</option>
                    <option value="">IPFIJAS1.COMCEL.COM.CO</option>
                    <option value="">VATIA.COMCEL.COM.CO</option>
                    <option value="">ESSA.CLARO.COM.CO</option>
                    <option value="">RUITOQUEESP.CLARO.COM.CO</option>
                    <option value="">QIENERGY.CLARO.COM.CO</option>
                    <option value="">LATCOM1.COMCEL.COM.CO</option>
                    <option value="">DICEL.CLARO.COM.CO</option>
                    <option value="">CGMENGESA.CLARO.COM.CO</option>
                    <option value="">UNIONFENOSA2.COMCEL.COM.CO</option>
                    <option value="">RENOVATIO.COMCEL.COM.CO</option>
                    <option value="">VERTICALES.MOVISTAR.COM.CO</option>
                    <option value="">CGMENGESA.MOVISTAR.COM.CO</option>
                    <option value="">TESLA.CLARO.COM.CO</option>
                    <option value="">SIN APN</option>
                </select>
                <br>
                <select class="form-select" id="aplicacion" aria-label="Default select example" required>
                    <option selected>Aplicacion:</option>
                    <!-- <option value=""></option>
                </select>
                <br>
                <select class="form-select" id="operador" aria-label="Default select example" required>
                <option selected>Operador:</option>
                <option value="">CLARO</option>
                <option value="">MOVISTAR</option>
                <option value="">TIGO</option>
                <!-- <option value=""></option>
                <option value=""></option> -->
                </select>
                <br>
                <label for="exampleFormControlTextarea1" class="form-label">Observaciones:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <br>
                <select class="form-select" id="estado" aria-label="Default select example" required>
                    <option selected>Estado:</option>
                    <option value="">UP APN</option>
                    <option value="">UP APN PUERTO</option>
                    <option value="">DOWN</option>
                    <option value="">PERMISOS</option>
                    <option value="">SIN GESTION</option>
                    <option value="">UP VPN</option>
                    <option value="">UP VPN PUERTO</option>
                    <option value="">UP PTP</option>
                    <option value="">UP TUNEL</option>
                </select>
                <br>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarSolicitud">Agregar</button>
                </div>

            </div>
        </div>

    </div>

</div>
</div>


<!-- inicio formulario segmento-->

<div class="modal fade" id="modalAplicacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <label for="" >Ingrese Aplicacion:</label>
                    <br>
                    <input type="text" id="nombreApliacion" class="form-control input-sm" required>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarCategorias">Agregar</button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- final formulario segmento-->


      
';

include 'footer.php'; 

?>
