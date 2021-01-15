var VentasDatatable = function () {

    const _init = function () {
        $.ajax({
            type: "GET",
            url: "http://localhost:1498/propuestaventa",
            dataType: "JSON",
            success: function (response) {
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

                _initDatatable(dataSet);
            }
        });
    }


    const _initDatatable = function (dataSet) {

        const table = $("#listado").DataTable({
            data: dataSet,
            columnDefs: _columnDefs(),
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            orderCellsTop: true,
            fixedHeader: true,
            buttons: ["copy", "csv", "excel", "pdf", "print"],
            language: {
                lengthMenu: "Mostrando _MENU_ filas por página",
                zeroRecords: "Nada encontrado - F",
                info: "Mostrando página _PAGE_ de _PAGES_",
                infoEmpty: "No se han encontrado datos",
                infoFiltered: "(filtrados de _MAX_ resultados totales)",
                search:"Buscar:",
                paginate: {
                    first:      "Primera",
                    last:       "Última",
                    next:       "Siguiente",
                    previous:   "Anterior"
                },
            }
        });

        table.buttons().container().appendTo('#listado_wrapper .col-md-6:eq(0)')

        _initFilter(table);
    }

    const _columnDefs = function () {
        return [{
            targets: 4,
            render: function (data, type, row, meta) {
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
            targets: 5,
            render: function (data, type, row, meta) {
                return data.charAt(0).toUpperCase() + data.slice(1);
            }
        },
        {
            targets: 6,
            render: function (data, type, row, meta) {
                return `<a data-id=${data}>${data}</a>`;
            }
        }
        ];
    }

    const _initFilter = function (table) {

        $('#listado thead tr').clone(true).appendTo('#listado thead');

        $('#listado thead tr:eq(1) th').each(function (i) {

            if (i == 6) {
                $(this).html('');
                return;
            }

            if (i == 5) {

                $(this).html('\
                <select class="form-control">\
                    <option value="Todo">Todo</option>\
                    <option value="Aceptada">Aceptada</option>\
                    <option value="Rechazada">Rechazada</option>\
                    <option value="Pendiente">Pendiente</option>\
                </select>');

                $('select', this).on('change', function () {

                    if (this.value === 'Todo') {

                        table.column(i)
                            .search('')
                            .draw();

                    } else if (table.column(i).search() !== this.value) {

                        table.column(i)
                            .search(this.value)
                            .draw();

                    }
                });

                return;
            }

            var title = $(this).text();
            $(this).html('<input class="form-control input-sm" type="text" placeholder="Buscar ' + title + '" />');

            $('input', this).on('keyup change', function () {
                if (table.column(i).search() !== this.value) {
                    table
                        .column(i)
                        .search(this.value)
                        .draw();
                }
            });

        });

    }

    return {
        init: _init
    }
}


