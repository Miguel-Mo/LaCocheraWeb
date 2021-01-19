<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- fonts -->
    <script src="https://kit.fontawesome.com/11ee0df9aa.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="dist\img\AdminLTELogo.png" sizes="16x16">

    <link rel="stylesheet" href="../dist/css/login.css">
    <title>La Cochera</title>
</head>


<body>


    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="grupo d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">

                            <h3 class="mb-5 text-center heading">La cochera</h3>
                            <h6 class="msg-info">Por favor, logeate con tu cuenta</h6>
                            <!-- <h3 class="msg-info">LOGIN</h3> -->
                            <form id="form">
                                <div class="form-group">
                                    <label class="form-control-label text-muted">Usuario</label>
                                    <input type="text" id="usuario" placeholder="Nombre de Usuario" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label text-muted">Contraseña</label>
                                    <input type="password" id="pass" placeholder="Contraseña" class="form-control" required>
                                </div>

                                <div class="row justify-content-center my-3 px-3">
                                    <button class="btn-block btn-color" id="login" required>Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right text-center">
                        <div class="row justify-content-center mb-3"> <img id="logo" src="dist\img\astroboss.png"> </div>
                        <h5 style="color: #264653">CONCESIONARIO Y REPARACIONES</h5><small style="color: #2A9D8F">DESDE 1990</small>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../dist/js/login.js"></script>

    <script>
        $(document).ready(function() {
            Login.init();
        });
    </script>

</body>