 <body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de Simcard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Simcard</li>
                        </ol>

                        <p class="mb-0">
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSoftware"><i class="fa-solid fa-plus"></i> Agregar Simcard</button>      
                        </p>
                        </br>

                        <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Tabla General Simcard
                                    </div>

                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Serial</th>
                                                    <th>Operador</th>
                                                    <th>Linea Actual</th>
                                                    <th>Linea Anterior</th>
                                                    <th>Ip Actual</th>
                                                    <th>Ip Anterior</th>
                                                    <th>Datos</th>
                                                    <th>Apn</th>
                                                    <th>Fecha Ingreso</th>
                                                    <th>Fecha Salida</th>
                                                    <th>Estado</th>
                                                    <th>Obervaciones</th>
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
                <label for="" >Serial:</label>
                <br>
                <input type="text" id="serial" class="form-control input-sm" required>
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
                <label for="" >Linea Actual:</label>
                <br>
                <input type="text" id="lineaactual" class="form-control input-sm" required>
                <br>
                <label for="" >Linea Anterior:</label>
                <br>
                <input type="text" id="lineaanterior" class="form-control input-sm" required>
                <br>
                <label for="" >Ip Actual:</label>
                <br>
                <input type="text" id="ipactual" class="form-control input-sm" required>
                <br>
                <label for="" >Ip Anterior:</label>
                <br>
                <input type="text" id="ipanterior" class="form-control input-sm" required>
                <br>
                <label for="" >Datos:</label>
                <br>
                <input type="text" id="datos" class="form-control input-sm" required>
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
                    <option value="">INTERNET.COMCEL.COM.CO</option>
                    <option value="">SIN APN</option>
                </select>
                <br>
                <label for="" >Fecha Ingreso:</label>
                <br>
                <input type="date" id="fechaingreso" class="form-control input-sm" required>
                <br>
                <label for="" >Fecha Salida:</label>
                <br>
                <input type="date" id="fechasalida" class="form-control input-sm" required>
                <br>

                <select class="form-select" id="estado" aria-label="Default select example" required>
                    <option selected>Estado:</option>
                    <option value="">Stock</option>
                </select>
                <br>
                <label for="exampleFormControlTextarea1" class="form-label">Observaciones:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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



