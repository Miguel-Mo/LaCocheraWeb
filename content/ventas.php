<?php include "../_share/header.php" ?>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php $actual = 'ventas' ?>
        <?php include "../_share/topbar.php" ?>
        <?php include "../_share/sidebar.php" ?>

        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-5">
                                <div class="card-header">
                                    <h3 class="card-title">Tabla de Ventas</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="listado" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Vendedor</th>
                                                <th>Cliente</th>
                                                <th>Vehiculo</th>
                                                <th>Presupuesto</th>
                                                <th>Fecha de Venta</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-danger"><i class="fas fa-ban"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Rechazadas</span>
                                    <span class="info-box-number" id="rechazadas">#</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Pendientes</span>
                                    <span class="info-box-number" id="pendientes">#</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="far fa-check-circle"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Aceptadas</span>
                                    <span class="info-box-number" id="aceptadas">#</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fas fa-euro-sign"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Balance</span>
                                    <span class="info-box-number" id="balance">#</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>

    <!-- Modales -->
    <?php include "./modales/detallesPropuestaVenta.php" ?>

    <!-- Script generales -->
    <?php include "../_share/script.php" ?>

    <!-- DataTables  & Plugins -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Script página -->
    <script src="../dist/js/ventas.js"></script>
    <script>
        jQuery(document).ready(() => {
            (new VentasDatatable).init();
        });
    </script>
</body>