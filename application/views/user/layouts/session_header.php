<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>C&C</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/templates/site/css/bootstrap.min.css'; ?>" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/templates/site/css/slick.css'; ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/templates/site/css/slick-theme.css'; ?>" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/templates/site/css/nouislider.min.css'; ?>" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/templates/site/css/font-awesome.min.css'; ?>" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/templates/site/css/style.css'; ?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'; ?>"/></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js'; ?>"/></script>
		<![endif]-->

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> 604 671-28-01</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> c&c.electro@hotmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> El Caraño CC local 3303</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="#"><i class="fa fa-dollar"></i> COP</a></li>
                    <li><a href="<?php echo base_url() . 'user-login/user-logout'; ?>"><i class="fa fa-user-o"></i> <?php echo $this->session->user->nombre; ?></a></li>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="<?php echo base_url() . 'user-login/user-log-session'; ?>" class="logo">
                                <img src="<?php echo base_url() . 'assets/templates/site/img/logo.png'; ?>" />
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="Null" hidden>Categorias</option>
                                    <option value="0">Sin Categoria</option>
                                    <option value="1">Computadores</option>
                                    <option value="2">Accesorios</option>
                                    <option value="3">Smartphones</option>
                                </select>
                                <input class="input" placeholder="Buscar algo">
                                <button class="search-btn">Buscar</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Favoritos</span>
                                    <div class="qty">0</div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->

                            <div class="dropdown">
                                <?php $i = 0;
                                foreach ($cart as $c) : ?>
                                <?php $i++;
                                endforeach; ?>

                                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Carrito</span>
                                    <div class="qty"><?= $i ?></div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <?php foreach ($cart as $c) : ?>
                                            <form action="<?php echo base_url() . 'cart/cart-delete'; ?>" method="post" enctype='multipart/form-data'>
                                                <input type="hidden" name="id_pdto" value="<?php echo $c->id; ?>" required>
                                                <div class="product-widget">
                                                    <div class="product-img">
                                                        <img src="<?php echo base_url() . 'assets/images/' . $c->imagen; ?>" alt="Item Img" />
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#"><?php echo $c->nombre; ?></a></h3>
                                                        <h4 class="product-price"><span class="qty">$ <?php echo $c->precio; ?></span></h4>
                                                        <?php $total = 0;
                                                        foreach ($cart as $p) :
                                                            $total += $p->precio;
                                                        endforeach; ?>
                                                    </div>
                                                    <button type="submit" class="delete"><i class="fa fa-close"></i></button>
                                                </div>
                                            </form>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="cart-summary">
                                        <small><?= $i ?> Producto(s) seleccionados</small>
                                        <h5>SUBTOTAL: $ <?= $total; ?></h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="<?php echo base_url() . 'cart'; ?>">Ver carrito</a>
                                        <a href="#">Ir a pagar <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">Categorias</a></li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Smartphones</a></li>
                    <li><a href="#">Accesorios</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->