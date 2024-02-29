<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrarse</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() . 'assets/templates/dashboard/vendor/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href=" https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . 'assets/templates/dashboard/css/sb-admin-2.css'; ?>" rel="stylesheet">

</head>

<body class="bg-gradient-user">

    <div class="container-reg">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="form-group">
                    <div class="">
                        <div class="p-5">
                            <div class="text-center">
                                <div class="logo">
                                    <a href="<?php echo base_url() . 'index'; ?>" class="rounded-logo">
                                        <img src="<?php echo base_url() . 'assets/images/site/minlogo.png'; ?>" />
                                    </a>
                                </div>
                                <br>
                                <h1 class="h4 text-gray-900 mb-4">REGISTRATE</h1>
                            </div>
                            <form action="<?php echo base_url() . 'user-registry/user-reg-save'; ?>" class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="name" placeholder="Nombre(s)*" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="last_name" placeholder="Apellidos*" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" placeholder="Correo electronico*" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user" name="age" placeholder="Edad">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="user_id" placeholder="Numero de identificacion*" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Contraseña*" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="confirm_password" placeholder="Confirme su contraseña*" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" name="term_cond" required>
                                        <label class="custom-control-label" for="customCheck">Acepto los <a href="#">Terminos y Condeiciones de uso</a> &amp; <a href="#">Politicas de Privacidad</a></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-primary-user btn-block">Registrarse</button>
                                </div>
                                <hr>
                                <a class="btn btn-google btn-user btn-block" title="En proceso de desarrollo">
                                    <i class="fab fa-google fa-fw"></i> Registrarse con Google
                                </a>
                                <a class="btn btn-facebook btn-user btn-block" title="En proceso de desarrollo">
                                    <i class="fab fa-facebook-f fa-fw"></i> Registrarse con Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="" href="<?php echo base_url() . 'user-login'; ?>">Ya tienes una cuenta? Inicia Sesion</a>
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