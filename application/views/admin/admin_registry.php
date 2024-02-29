<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>C&C Registro para Administradores</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() . 'assets/templates/dashboard/vendor/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href=" https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . 'assets/templates/dashboard/css/sb-admin-2.css'; ?>" rel="stylesheet">

</head>

<body class="bg-gradient-admin">

    <div class="container-reg">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="form-group">
                    <div class="">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Solicita una cuenta de Administrador</h1>
                            </div>
                            <form action="<?php echo base_url() . 'admin-registry/admin-reg-save'; ?>" class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-admin" name="name" placeholder="Nombre(s)*" required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-admin" name="last_name" placeholder="Apellidos*" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-admin" name="email" placeholder="Direccion de correo electronico*" required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-admin" name="cc" placeholder="Cedula de Ciudadania*" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-admin" name="user" placeholder="Usuario (Con el que iniciara sesion)*" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-admin" name="password" placeholder="Contraseña*" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-admin" name="confirm_[assword" placeholder="Confirme su contraseña*" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" name="term_cond" required>
                                        <label class="custom-control-label" for="customCheck">Acepto los <a href="#">Terminos y Condeiciones de uso</a> &amp; <a href="#">Politicas de Privacidad</a></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary-admin btn-block">Enviar Solicitud</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="" href="<?php echo base_url() . 'admin-login'; ?>">Si ya tienes una cuenta, Inicia Sesion</a>
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