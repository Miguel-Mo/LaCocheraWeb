<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detalles Propuesta Venta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- datos de la propuesta -->
                <div class="card col-12 p-0">

                    <div class="card-header font-weight-bold bg-secondary">
                        Datos de la propuesta
                    </div>


                    <div class="row p-1">
                        <div class="col">
                            <label>Vendedor: </label>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" id="vendedor">
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col">
                            <label>Fecha de Venta: </label>
                        </div>

                        <div class="col">
                            <label>Presupuesto: </label>
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="fechaVenta">
                        </div>

                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-euro-sign"></i></span>
                            </div>
                            <input type="text" class="form-control" id="presupuesto">
                        </div>
                    </div>
                </div>

                <!-- datos del vehiculo  -->
                <div class="card col-12 p-0 ">
                    <div class="card-header font-weight-bold bg-secondary">
                        Datos del vehiculo
                    </div>
                    <div class="row p-1">
                        <div class="col">
                            <label>Vehículo: </label>
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-car"></i></i></span>
                            </div>
                            <input type="text" class="form-control" id="vehiculo">
                        </div>
                    </div>


                    <div class="row p-1">
                        <div class="col">
                            <label>Tipo de vehículo: </label>
                        </div>
                    </div>


                    <div class="row p-1">
                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-parking"></i></span>
                            </div>
                            <input type="text" class="form-control" id="tipoVehiculo">
                        </div>
                    </div>



                    <div class="row p-1">
                        <div class="col">
                            <label>Concesionario: </label>
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                            </div>
                            <input type="text" class="form-control" id="concesionario">
                        </div>
                    </div>

                </div>
                
                <!-- datos del cliente -->
                <div class="card col-12 p-0">
                    <div class="card-header font-weight-bold bg-secondary">
                        Datos del cliente
                    </div>

                    <div class="row p-1">
                        <div class="col">
                            <label>Cliente: </label>
                        </div>
                    </div>
                    <div class="row p-1">

                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="cliente">
                        </div>
                    </div>


                    <div class="row p-1">
                        <div class="col">
                            <label>E-mail: </label>
                        </div>

                        <div class="col">
                            <label>Teléfono: </label>
                        </div>
                    </div>

                    <div class="row p-1">

                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-euro-sign"></i></span>
                            </div>
                            <input type="email" class="form-control" id="email">
                        </div>


                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></i></span>
                            </div>
                            <input type="tel" class="form-control" id="telefono">
                        </div>
                    </div>

                    <div class="row p-1">


                        <div class="col">
                            <label>Fecha de Registro: </label>


                            <div class="col">
                                <label>DNI: </label>
                            </div>
                        </div>
                    </div>

                    <div class="row p-1">

                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-plus"></i></span>
                            </div>
                            <input type="text" class="form-control" id="fechaRegistro">
                        </div>

                        <div class="col input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></i></span>
                            </div>
                            <input type="text" class="form-control" id="dni">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>