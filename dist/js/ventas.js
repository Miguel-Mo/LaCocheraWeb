var VentasDatatable = function () {

    const _init = function () {
        $.ajax({
            type: "GET",
            url: "http://localhost:1498/propuestaventa",
            dataType: "JSON",
            success: function (response) {

                const dataSet = new Array;
                let balance = 0;

                response.forEach(json => {
                    const fila = [
                        json.vendedor.usuario.nombre + ' ' + json.vendedor.usuario.apellidos,
                        json.cliente.nombre + ' ' + json.cliente.apellidos,
                        json.vehiculoVender.vehiculo.marca + ' ' + json.vehiculoVender.vehiculo.modelo,
                        json.presupuesto + ' € ',
                        json.fechaFin,
                        json.estado,
                        json.id
                    ];
                    dataSet.push(fila)
                    if (json.estado === "aceptada") {
                        balance += json.presupuesto;
                    }

                });

                $("#Balance").text(balance + " €");
                _initDatatable(dataSet);
                _controlModal();
            }
        });
    }


    const _initDatatable = function (dataSet) {

        const table = $("#listado").DataTable({
            data: dataSet,
            pageLength: 5,
            columnDefs: _columnDefs(),
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            orderCellsTop: true,
            fixedHeader: true,
            buttons: ["copy", "csv", "excel", "pdf", "print"],
            language: {
                lengthMenu: "Mostrando _MENU_ filas por página",
                zeroRecords: "No se han encontrado datos",
                info: "Mostrando página _PAGE_ de _PAGES_",
                infoEmpty: "No se han encontrado datos",
                infoFiltered: "(filtrados de _MAX_ resultados totales)",
                search: "Buscar:",
                paginate: {
                    first: "Primera",
                    last: "Última",
                    next: "Siguiente",
                    previous: "Anterior"
                },
            },
        });

        table.buttons().container().appendTo('#listado_wrapper .col-md-6:eq(0)')

        _initFilter(table);
    }

    const _columnDefs = function () {
        return [
            {
                targets: 0,
                class: 'align-middle',
            },
            {
                targets: 1,
                class: 'align-middle',
            },
            {
                targets: 2,
                class: 'align-middle',
            },
            {
                targets: 3,
                class: 'align-middle',
            },
            {
                targets: 4,
                class: 'align-middle',
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
                class: 'align-middle',
                render: function (data, type, row, meta) {
                    if (data == "pendiente") {
                        return `<span class="badge badge-danger">Pendiente</span>`
                    }
                    if (data == "rechazada") {
                        return `<span class="badge badge-warning">Rechazada</span>`
                    }
                    if (data == "aceptada") {
                        return `<span class="badge badge-success">Aceptada</span>`
                    }

                }
            },
            {
                targets: 6,
                order: false,
                className: 'dt-center',
                render: function (data, type, row, meta) {
                    return `<button type="button" data-toggle="modal" data-target="#staticBackdrop" 
                    data-id=${data} class="btn btn-success modal-ventas"><i class="fa fa-search"></i></button>`;
                }
            }
        ];
    }

    const _initFilter = function (table) {

        $('#listado thead').append(
            '<tr>\
            <th></th>\
            <th></th>\
            <th></th>\
            <th></th>\
            <th></th>\
            <th></th>\
            <th></th>\
        </tr>');

        $('#listado thead tr:eq(1) th').each(function (i) {

            if (i == 6) {
                $(this).html(
                    '<button id="reset" type="button" class="btn btn-secondary">\
                    <i class="fa fa-close"></i> Limpiar\
                </button>');
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

                    _recalcularBalance();
                });

                return;
            }

            var title = $(this).text();
            $(this).html('<input class="form-control input-sm" type="text" placeholder="Buscar ' + title + '" />');

            $('input', this).on('keyup change', function () {
                if (table.column(i).search() !== this.value) {
                    table.column(i)
                        .search(this.value)
                        .draw();
                }
                _recalcularBalance();
            });

        });

        $('[type="search"]').on('input', function () {
            _recalcularBalance();
        });

        $('#reset').on('click', function () {
            $('#listado thead tr:eq(1) th input').each((index, el) => $(el).val('').trigger('change'));
            $('#listado thead tr:eq(1) th select').each((index, el) => $(el).val('Todo').trigger('change'));

            _recalcularBalance();
        });
    }

    const _recalcularBalance = function () {

        let balance = 0;

        $("table tbody tr").each(function (index, fila) {

            if ($(fila).find("td:eq(5)").text() === "Aceptada") {
                let valor = $(fila).find("td:eq(3)").text().split(" ")[0];
                balance += Number(valor);
            }

        })

        $("#Balance").text(balance + " €");
    }

    const _controlModal = function () {
        $('table .modal-ventas').click(function () {
            const id = $(this).data('id')

            $.ajax({
                type: "GET",
                url: `http://localhost:1498/propuestaventa/${id}`,
                dataType: "JSON",
                success: function (response) {
                    
                    $("#vendedor").val(response['vendedor']['usuario']['nombre'] + " " + response['vendedor']['usuario']['apellidos']);
                    if (response['estado'] == "aceptada") {
                        $("#fechaVenta").val($.datepicker.formatDate('dd M yy', new Date(response['fechaFin'])));
                    } else {
                        $("#fechaVenta").val("Venta Sin Finalizar");
                    }

                    $("#presupuesto").val(response['presupuesto']);

                    $("#vehiculo").val(response['vehiculoVender']['vehiculo']['marca'] + " " + response['vehiculoVender']['vehiculo']['modelo']);
                    $("#tipoVehiculo").val(response['vehiculoVender']['vehiculo']['tipo']['descripcion']);
                    $("#concesionario").val(response['vehiculoVender']['vehiculo']['concesionario']['ciudad']);

                    $("#cliente").val(response['cliente']['nombre'] + " " + response['cliente']['apellidos']);
                    $("#email").val(response['cliente']['email']);
                    $("#telefono").val(response['cliente']['telefono']);
                    $("#fechaRegistro").val($.datepicker.formatDate('dd M yy', new Date(response['cliente']['fechaRegistro'])));
                    $("#dni").val(response['cliente']['dni']);
                }
            });
        })
    }

    return {
        init: _init
    }
}


