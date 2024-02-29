<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iniciar Sesion de Administrador</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() . 'assets/templates/dashboard/vendor/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . 'assets/templates/dashboard/css/sb-admin-2.css'; ?>" rel="stylesheet">

</head>

<body class="bg-gradient-admin">

    <div class="container-login">

        <!-- Outer Row -->

        <div class="text-center">
            <div class="logo">
                <a href="<?php echo base_url() . 'index'; ?>" class="rounded-logo">
                    <img src="<?php echo base_url() . 'assets/images/site/minlogo.png'; ?>" />
                </a>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        <div class="form-group">
                            <div class="">
                                <div class="p-5">
                                    <div class="text-center">
                                        <?php if (isset($error)) : ?>
                                            <p class="alert alert-danger"> El correo y la contraseña no coinciden. </p>
                                        <?php endif; ?>
                                        <h1 class="h4 text-gray-900 mb-4">Sesion para Administradores</h1>
                                    </div>
                                    <form class="user" action="<?php echo base_url() . 'admin-login/admin-log-verify'; ?>" method="post">
                                        <div class="form-group">
                                            <input type="user" class="form-control form-control-admin" name="user" placeholder="Usuario" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-admin" name="contrasena" placeholder="Contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="remind_session" >
                                                <label class="custom-control-label" for="customCheck">Recordar sesion</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary-admin btn-block">Ingresar</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="" title="En proceso de desarrollo">Olvidaste tu contraseña?</a>
                                    </div>
                                    <!--<div class="text-center">
                                        <a class="" href="<?php echo base_url() . 'admin-registry'; ?>">No dispones de una cuenta? Solicitala aqui</a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() . 'assets/templates/dashboard/vendor/jquery/jquery.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/templates/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() . 'assets/templates/dashboard/vendor/jquery-easing/jquery.easing.min.js'; ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() . 'assets/templates/dashboard/js/sb-admin-2.min.js'; ?>"></script>

</body>

</html>