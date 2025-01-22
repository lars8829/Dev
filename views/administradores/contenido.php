<?php

include '../../php/config.php';
$conexion = retornarConexion();

?>


<body class="sb-nav-fixed">
    
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Solicitudes 
                                        <?php 
                                              $sql = "SELECT COUNT(*)
                                                      FROM novedades where id_estado_novedad='1' ";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Inventarios Software 
                                        <?php 
                                              $sql = "SELECT COUNT(*) FROM software;";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Usuarios Creados
                                        <?php 
                                              $sql = "SELECT COUNT(*) FROM usuarios;";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Tareas En Curso
                                        <?php 
                                              $sql = "SELECT COUNT(*)
                                                      FROM novedades WHERE id_estado_novedad='7'";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Solucionado <?php 
                                              $sql = "SELECT COUNT(*)
                                                      FROM novedades WHERE id_estado_novedad='5'";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Inventarios Equipos <?php 
                                              $sql = "SELECT COUNT(*)
                                                      FROM elementos";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="viewsInventarios.php">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Inventarios Partes <?php 
                                              $sql = "SELECT COUNT(*)
                                                      FROM hardware";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Sin Gestion <?php 
                                              $sql = "SELECT COUNT(*)
                                                      FROM novedades WHERE id_estado_novedad='1'";
                                                      $result=mysqli_query($conexion,$sql); 
                                                      $valor = mysqli_fetch_row($result);
                                                      echo "<p>$valor[0]</p>";
                                                      /* echo $sql; */ ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Mostrar Datos</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Historico Novedades
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Historico Acumulado x Mes
                                        

                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                </main>

                <p>
                <?php
               // echo $id; 
                ?>
                </p>