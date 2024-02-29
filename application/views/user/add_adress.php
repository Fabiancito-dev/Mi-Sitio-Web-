<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
                         /* Cambia el color de fondo según tus preferencias */
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
            padding: 0; /* Elimina el relleno predeterminado del cuerpo */
        }
            .custom-container {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
            margin-top: 50px; /* Ajusta el margen superior según tus preferencias */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%; /* Ajusta el ancho según tus preferencias */
            margin-left: auto;
            margin-right: auto;
        }
        .order-submit {
        margin-top: 20px; /* Ajusta el margen superior según tus preferencias */
    }
    </style>
</head>

<body>
     <!-- Formulario -->
     <div class="container custom-container d-flex align-items-center justify-content-center">
        <div class="col-12 col-md-12">
                <h4 class="mb-3">Direccion de envio</h4>
                <form action="" method="post">
                    <!-- Nombre y apellido -->
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido">
                        </div>
                    </div>
                    <br>
                    <!-- Usuario
                    <div class="mb-3">
                        <label for="usuario">Usuario</label>
                        <div class="input-group">
                            <input class="form-control" type="text" id="usuario" placeholder="Usuario" name="usuario">
                        </div>
                    </div>
                    <br> -->
                    <!-- Correo -->
                    <div class="mb-3">
                        <label for="correo">Correo <span class="text-muted">(Opcional)</span></label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="nombre@correo.com">
                    </div>
                    <br>
                    <!-- Direccion -->
                    <div class="mb-3">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" placeholder="Calle 1234" name="direccion" id="direccion">
                    </div>
                    <br>
                    <!-- Direccion 2 -->
                    <div class="mb-3">
                        <label for="direccion2">Direccion 2 <span class="text-muted">(Opcional)</span></label>
                        <input type="text" class="form-control" placeholder="Informacion adicional" name="direccion2" id="direccion2">
                    </div>
                    <br>
                    <!-- Pais, Estado, Codifo Postal -->
                    <div class="row">
                        <!-- Pais -->
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="pais">Pais</label>
                            <select class="form-control" name="pais" id="pais">
                                <option value="">Seleccionar Pais</option>
                                <option value="argentina">Argentina</option>
                                <option value="españa">España</option>
                                <option value="alemania">Alemania</option>
                                <option value="japon">Japon</option>
                                <option value="usa">USA</option>
                            </select>
                        </div>
                        <!-- Estado -->
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="pais">Provincia o Estado</label>
                            <select class="form-control" name="pais" id="pais">
                                <option value="">Seleccionar Estado</option>
                                <option value="caba">Ciudad Autonoma de Buenos Aires</option>
                                <option value="bsas">Buenos Aires</option>
                                <option value="cordoba">Cordoba</option>
                                <option value="mendoza">Mendoza</option>
                                <option value="salta">Salta</option>
                            </select>
                        </div>
                        <!-- Codigo Postal -->
                        <div class="col-12 col-sm-4 mb-3">
                            <label for="codigo-postal">Codigo Postal</label>
                            <input class="form-control" type="text" id="codigo-postal">
                        </div>
                    </div>
                    <br>
                    <hr>

                    <!-- Checkboxes -->
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="misma-direccion">
                        <label class="custom-control-label" for="misma-direccion">Enviar a la misma direccion</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="guardar-informacion">
                        <label class="custom-control-label" for="guardar-informacion">Guardar informacion para la siguiente compra</label>
                    </div>

                    <hr class="mb-4">
                    <!-- Forma de pago -->
                    <div class="d-block mb-3">
                        <div class="custom-control custom-radio">
                            <input type="radio" name="metodo-pago" id="tarjeta-credito" class="custom-control-input" checked>
                            <label class="custom-control-label" for="tarjeta-credito">Tarjeta de Credito</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" name="metodo-pago" id="tarjeta-debito" class="custom-control-input">
                            <label class="custom-control-label" for="tarjeta-debito">Tarjeta de debito</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" name="metodo-pago" id="paypal" class="custom-control-input">
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                        <br>
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="tarjeta">Nombre en la tarjeta</label>
                            <input type="text" id="tarjeta" class="form-control">
                            <small class="text-muted">Nombre completo como se ve en la tarjeta</small>
                        </div>

                        <div class="col-12 col-sm-6 mb-3">
                            <label for="numero-tarjeta">Numero de tarjeta</label>
                            <input type="text" id="numero-tarjeta" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-sm-4 mb-3">
                            <label for="tarjeta-expiracion">Expiracion</label>
                            <input type="text" id="tarjeta-expiracion" class="form-control">
                        </div>

                        <div class="col-6 col-sm-4 mb-3">
                            <label for="tarjeta-cvv">CVV</label>
                            <input type="text" id="tarjeta-cvv" class="form-control">
                        </div>
                    </div>

                    <hr class="mb-4">
                    <div class="row">
                    <div class="col-12 text-center">
                        <input type="submit" value=" ¡COMPRAR! " class="primary-btn order-submit">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>