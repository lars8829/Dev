<body class="sb-nav-fixed">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Panel de Mantenimientos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Mantenimientos</li>
                        </ol>
                                <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Tabla General Mantenimientos Redes
                                    </div>
                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Serial</th>
                                                    <th>Mantenimiento</th>
                                                    <th>Fecha Mantenimiento</th>
                                                    <th>Tecnico Encargado</th>
                                                    <th>Ciclo</th>
                                                    <th>Revisiones</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                    $sql = "SELECT m.id, e.serialElemento,
                                                        t.nombre AS tipo_mantenimiento,
                                                        m.fecha_mantenimiento,tc.nombres AS tecnico_encargado,
                                                        c.nombres AS ciclo, m.revision,
                                                        m.actividades, m.resultado
                                                        FROM mtto_equipos m
                                                        INNER JOIN elementos e ON m.id_elemento = e.id
                                                        INNER JOIN tipos_mantenimientos t ON m.id_tipo_mtto = t.id
                                                        INNER JOIN tecnicos tc ON m.id_tecnicos = tc.id
                                                        INNER JOIN ciclos c ON m.id_ciclo = c.id
                                                        WHERE id_mtto=2";
                                            
                                                    $result = mysqli_query($conexion,$sql);
                                                    if ($result) {
                                                        while ($ver = mysqli_fetch_assoc($result)) {
                                                            $mantenimientos = implode("||", [
                                                                $ver['id'],
                                                                $ver['serialElemento'],
                                                                $ver['tipo_mantenimiento'],
                                                                $ver['fecha_mantenimiento'],
                                                                $ver['tecnico_encargado'],
                                                                $ver['ciclo'],
                                                                $ver['revision'],
                                                                $ver['actividades'],
                                                                $ver['resultado']

                                                            ]);
                                                             // print "<br>".$datos1;
                                                        ?>
                                                        <tr>
                                                        <td><?php echo htmlspecialchars ($ver['id']); ?></td>
                                                        <td><?php echo htmlspecialchars ($ver['serialElemento']); ?></td>
                                                        <td><?php echo htmlspecialchars ($ver['tipo_mantenimiento']); ?></td>
                                                        <td><?php echo htmlspecialchars ($ver['fecha_mantenimiento']); ?></td>
                                                        <td><?php echo htmlspecialchars ($ver['tecnico_encargado']); ?></td>
                                                        <td><?php echo htmlspecialchars ($ver['ciclo']); ?></td>
                                                        <td>
                                                             <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalRevisiones"  onclick="asignarDatoRevisiones('<?php echo $mantenimientos; ?>')">Resultados</button>
                                                        </td>
                                                        </tr>
                                                    
                                                <?php
                                                        }
                                                }
                                                else{
                                                    echo "Error al ejecutar la consulta";
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                </div>
            </main>
        </div>
       
                            </div> 
                    </div> 
        
<br>

<div class="modal fade" id="modalRevisiones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="caja">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Historial Mantenimiento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                <label for="">id Elemento</label>
                <br>
                <input type="text" id="idf" class="form-control input-sm" disabled>
               <br>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Revision Inicial</label>
                    <textarea class="form-control" id="revisionf" rows="3" disabled></textarea>
                </div>
                <br>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Actividades Ejecutadas</label>
                    <textarea class="form-control" id="actividadesf" rows="3" disabled></textarea>
                </div>
                <br>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Resultado Final</label>
                    <textarea class="form-control" id="resultadof" rows="3" disabled></textarea>
                </div>
                <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="">Cerrar Historico</button>
                </div>
            </div>

        </div>
    </div>
</div>