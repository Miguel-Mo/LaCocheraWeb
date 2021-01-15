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
                                        <!-- <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="3" style="text-align:right">Total:</th>
                                                <th></th>
                                            </tr>
                                        </tfoot> -->


                                    </table>
                                    <div class="d-flex flex-row-reverse">
                                        <label class="ml-2" id="Balance"></label>
                                        <label >Balance: </label>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
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