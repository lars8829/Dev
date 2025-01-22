
<body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Panel de Crono Mantenimientos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Cronograma Mantenimientos</li>
                        </ol>

                        <p class="mb-0">
                        <button type="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCronograma"><i class="fa-solid fa-plus"></i> Agregar Cronograma</button>      
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
                                                    <th>Nombre Dispositivo</th>
                                                    <th>Tipo Dispositivo</th>
                                                    <th>Fecha Mantenimiento</th>
                                                    <th>Observaciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                               
                                            </tbody>
                                        </table>
                                        </div>
                        </div>
            </div>     
        </div>
<br>

</div>

<div class="modal fade" id="modalCronograma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
<div class="modal-dialog modal-sm">
    <div class="modal-content" id="caja">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="" >Seleccione Dispositivo</label>
                <select class="form-select" id="id_asignatario" aria-label="Default select example" required>
                    <option selected>Selecione Responsable:</option>
                    <?php while($row = mysqli_fetch_assoc($resultado_items)): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombreItem']; ?></option>
                <?php endwhile; ?>
                </select>
                <br>
                <input type="text" id="nombredispositivo" class="form-control input-sm" required>
                <br>
                <select class="form-select" id="tipodispositivo" aria-label="Default select example" required>
                <option selected>Tipo Dispositivo:</option>
                <option value="">Portatil</option>
                <option value="">Escritorio</option>
                </select>
                <br>
                <select class="form-select" id="tipodmantenimiento" aria-label="Default select example" required>
                <option selected>Tipo Mantenimiento:</option>
                <option value="">Correctivo</option>
                <option value="">Preventivo</option>
                </select>
                <br>
                <select class="form-select" id="tipodmantenimiento" aria-label="Default select example" required>
                <option selected>Calendario Realizado:</option>
                <option value="">Semestral</option>
                <option value="">Trimestral</option>
                <option value="">Anual</option>
                </select>
                <br>
                <label for="" >Fecha Mantenimiento:</label>
                <br>
                <input type="date" id="fechamantenimiento" class="form-control input-sm" required>
                <br>
                <label for="exampleFormControlTextarea1" class="form-label">Observaciones:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="registrarSolicitud">Agregar</button>
                </div>


            </div>
        </div>

    </div>

</div>
</div>
