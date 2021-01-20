<?php include "../_share/header.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php $actual = 'dashboard' ?>
        <?php include "../_share/topbar.php" ?>
        <?php include "../_share/sidebar.php" ?>

        <div class="content-wrapper">
            <!-- Main content -->
            <div class="row no-gutters">
                <div class="col-md-12 mt-1">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Resumen Mensual</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-center">
                                        <strong>Sales: 1 Jul, 2020 - 21 Jan, 2021</strong>
                                    </p>

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>Ventas Realizadas</strong>
                                    </p>

                                    <div class="progress-group">
                                        Jose
                                        <span class="float-right"><b>60</b>/800</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->

                                    <div class="progress-group">
                                        Dankunku
                                        <span class="float-right"><b>50</b>/800</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" style="width: 75%"></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Xieshui</span>
                                        <span class="float-right"><b>30</b>/800</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 60%"></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        Margara
                                        <span class="float-right"><b>25</b>/800</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 50%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                        <h5 class="description-header">$35,210.43</h5>
                                        <span class="description-text">Total Ingresado</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                                        <h5 class="description-header">$10,390.90</h5>
                                        <span class="description-text">Numero de Reparaciones</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <!-- <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                        <h5 class="description-header">$24,813.53</h5>
                                        <span class="description-text">Numero de coches vendidos</span>
                                    </div>
                                   
                                </div> -->
                                <!-- /.col -->
                                <div class="col-sm-4 col-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                                        <h5 class="description-header">1200</h5>
                                        <span class="description-text">Numero de coches vendidos </span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col m-1">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Marca de Vehiculo más vendido</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="chart-responsive">
                                        <canvas id="pieChart" height="150"></canvas>
                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <li><i class="far fa-circle text-danger"></i> Mercedes</li>
                                        <li><i class="far fa-circle text-success"></i> Jeep</li>
                                        <li><i class="far fa-circle text-warning"></i> Kia</li>
                                        <li><i class="far fa-circle text-info"></i> Lexus</li>
                                        <li><i class="far fa-circle text-primary"></i> Toyota</li>
                                        <li><i class="far fa-circle text-secondary"></i> Renault</li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <!-- <div class="card-footer bg-light p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        United States of America
                                        <span class="float-right text-danger">
                                            <i class="fas fa-arrow-down text-sm"></i>
                                            12%</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        India
                                        <span class="float-right text-success">
                                            <i class="fas fa-arrow-up text-sm"></i> 4%
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        China
                                        <span class="float-right text-warning">
                                            <i class="fas fa-arrow-left text-sm"></i> 0%
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div> -->

                    </div>
                </div>
                <div class="col m-1">
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Últimas Propuestas</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Fecha de Inicio</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>20/01/2021</td>
                                            <td>Audi</td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">A-4</div>
                                            </td>
                                            <td><span class="badge badge-warning">Pendiente</span></td>
                                        </tr>
                                        <tr>
                                            <td>20/01/2021</td>
                                            <td>Peugeot</td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">306</div>
                                            </td>
                                            <td><span class="badge badge-warning">Pendiente</span></td>
                                        </tr>
                                        <tr>
                                            <td>20/01/2021</td>
                                            <td>Suzuki</td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">Gran Vitara</div>
                                            </td>
                                            <td><span class="badge badge-warning">Pendiente</span></td>
                                        </tr>
                                        <tr>
                                            <td>19/01/2021</td>
                                            <td>Citroen</td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">C-5</div>
                                            </td>
                                            <td><span class="badge badge-warning">Pendiente</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <!-- <div class="card-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                        </div> -->
                        <!-- /.card-footer -->
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Script generales -->
    <?php include "../_share/script.php" ?>


    <!-- Script página -->
    <!-- jQuery Mapael -->
    <script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="../plugins/raphael/raphael.min.js"></script>
    <script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard2.js"></script>

</body>