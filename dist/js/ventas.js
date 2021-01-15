var VentasDatatable = function () {

    const _init = function() {
        $.ajax({
            type: "GET",
            url: "http://localhost:1498/propuestaventa",
            dataType: "JSON",
            success: function(response) {
                console.log(response);
        
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
    }

    return {
        init : _init
    }
}


