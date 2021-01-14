<?php
include "../_share/header.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include "../_share/topbar.php" ?>
        <?php include "../_share/sidebar.php" ?>

        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
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
                                    <div class="d-flex flex-row-reverse">
                                        <label d-flex justify-content-end>Balance:</label>
                                        <label d-flex justify-content-end id="Balance"></label>
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


        <!-- Page specific script -->
        <script>
            jQuery(document).ready(() => {
                $.ajax({
                    type: "GET",
                    url: "http://localhost:1498/propuestaventa",
                    dataType: "JSON",
                    success: function(response) {

                        const dataSet = new Array;

                        response.forEach(json => {
                            const fila = [
                                json.vendedor.usuario.nombre + ' ' + json.vendedor.usuario.apellidos,
                                json.cliente.nombre + ' ' + json.cliente.apellidos,
                                json.vehiculoVender.vehiculo.marca + ' ' + json.vehiculoVender.vehiculo.modelo,
                                json.vehiculoVender.precio + ' € ',
                                json.fechaFin,
                                json.estado,
                                json.id
                            ];
                            dataSet.push(fila)
                        });

                        const table = $("#listado").DataTable({
                            "responsive": true,
                            data: dataSet,
                            "columnDefs": [{
                                    "targets": 4,
                                    "render": function(data, type, row, meta) {
                                        if (row[5] === 'pendiente') return 'Sin finalizar';

                                        const d = new Date(data);
                                        const ye = new Intl.DateTimeFormat('es', {
                                            year: 'numeric'
                                        }).format(d);
                                        const mo = new Intl.DateTimeFormat('es', {
                                            month: '2-digit'
                                        }).format(d);
                                        const da = new Intl.DateTimeFormat('es', {
                                            day: '2-digit'
                                        }).format(d);

                                        return `${da}/${mo}/${ye}`;
                                    }
                                },
                                {
                                    "targets": 5,
                                    "render": function(data, type, row, meta) {
                                        return data.charAt(0).toUpperCase() + data.slice(1);
                                    }
                                },
                                {
                                    "targets": 6,
                                    "render": function(data, type, row, meta) {
                                        console.log(data, type, row);
                                        return `<a data-id=${data}>${data}</a>`;
                                    }
                                }
                            ],
                            "lengthChange": false,
                            "autoWidth": false,
                            orderCellsTop: true,
                            fixedHeader: true,
                            "buttons": ["copy", "csv", "excel", "pdf", "print"],
                        }).buttons().container().appendTo('#listado_wrapper .col-md-6:eq(0)');

                        $('#listado thead tr').clone(true).appendTo('#listado thead');
                        $('#listado thead tr:eq(1) th').each(function(i) {
                            var title = $(this).text();
                            $(this).html('<input type="text" placeholder="Search ' + title + '" />');

                            $('input', this).on('keyup change', function() {
                                if (table.column(i).search() !== this.value) {
                                    table
                                        .column(i)
                                        .search(this.value)
                                        .draw();
                                }
                            });
                        });
                    }
                });
            })
        </script>
</body>