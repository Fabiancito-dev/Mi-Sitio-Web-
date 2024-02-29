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
                    <?php if (!$this->session->user) : ?>
                        <li><a href="#"><i class="fa fa-dollar"></i> COP</a></li>

                        <!-- Account Dropdown -->
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-user"></i>
                                <span>Cuenta</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <li><a class="dropdown-item" href="<?php echo base_url() . 'user-login'; ?>" style="color: black;"> Usuario</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url() . 'admin-login'; ?>" style="color: black;"> Administrador</a></li>
                            </ul>
                        </li>
                        <!-- /Account Dropdown -->
                    <?php else : ?>
                        <li><a href="#"><i class="fa fa-dollar"></i> COP</a></li>
                        <li><a href="<?php echo base_url() . 'user-login/user-logout'; ?>"><i class="fa fa-user-o"></i> <?php echo $_SESSION['user']['nombre']; ?></a></li>
                    <?php endif ?>

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
                            <a href="<?php echo base_url() . 'index'; ?>" class="logo">
                                <img src="<?php echo base_url() . 'assets/images/site/logo.png'; ?>"/>
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                    <option value="Null" hidden title="En proceso de desarrollo">Categorias</option>
                                <select class="input-select" >
                                    <option value="Null" hidden title="En proceso de desarrollo">Categorias</option>
                                    <option value="Null" hidden title="En proceso de desarrollo">Categorias</option>
                                    <option value="Null" hidden title="En proceso de desarrollo">Categorias</option>
                                    <option value="0" >Sin Categoria</option>
                                    <option value="Null" hidden title="En proceso de desarrollo">Categorias</option>
                                    <option value="1" title="En proceso de desarrollo">Computadores</option>
                                    <option value="Null" hidden title="En proceso de desarrollo">Categorias</option>
                                    <option value="2" title="En proceso de desarrollo">Accesorios</option>
                                    <option value="Null" hidden title="En proceso de desarrollo">Categorias</option>
                                    <option value="2" title="En proceso de desarrollo">Smartphones</option>
                                </select>
                                <input class="input" placeholder="Buscar algo"title="En proceso de desarrollo">
                                    <option value="Null" hidden title="En proceso de desarrollo">Categorias</option>
                                <button class="search-btn" title="En proceso de desarrollo">Buscar</button>
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
                                    <i class="fa fa-heart-o" title="En proceso de desarrollo"></i>
                                    <span>Favoritos</span>
                                    <div class="qty">0</div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart 
                            <div class="dropdown">
                                <?php $i = 0;
                                $total = 0;
                                foreach ($cart_count as $c) : $i++ ?>
                                <?php endforeach; ?>

                                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Carrito</span>
                                    <?php if ($i > 0) : ?>
                                        <div class="qty"><?= $i ?></div>
                                    <?php endif; ?>
                                </a>
                                <div class="cart-dropdown">
                                    <?php if ($i > 0) : ?>
                                        <div class="cart-list">
                                            <?php foreach ($cart as $c) : $i++ ?>
                                                <form action="<?php echo base_url() . 'cart/cart-delete'; ?>" method="post" enctype='multipart/form-data'>
                                                    <input type="hidden" name="id_pdto" value="<?php echo $c->_id; ?>" required>
                                                    <div class="product-widget">
                                                        <div class="product-img">
                                                            <img src="<?php echo base_url() . 'assets/images/' . $c->img_pdto; ?>" alt="Item Img" />
                                                        </div>
                                                        <div class="product-body">
                                                            <h3 class="product-name"><a href="#"><?php echo $c->nom_pdto; ?></a></h3>
                                                            <h4 class="product-price"><span class="qty">$ <?php echo $c->precio_pdto; ?></span></h4>
                                                            <?php $total += $c->precio_pdto; ?>
                                                        </div>
                                                        <button type="submit" class="delete"><i class="fa fa-close"></i></button>
                                                    </div>
                                                </form>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else : ?>
                                        <h4 class="cart-dropdown-empty-text">No hay productos agregados al carro de compras</h4>
                                    <?php endif; ?>

                                    <?php if ($i > 0) : ?>
                                        <div class="cart-summary">
                                            <small><?= $i/2 ?> Producto(s) seleccionados</small>
                                            <h5>SUBTOTAL: $ <?= $total; ?></h5>
                                        </div>
                                    <?php else : ?>
                                        <div class="cart-summary">
                                            <large><?= $i ?> Producto(s) seleccionados</large>
                                        </div>
                                    <?php endif; ?>
                                    <div class="cart-btns">
                                        <a href="<?php echo base_url() . 'cart'; ?>">Ver carrito</a>
                                        <a href="<?php echo base_url() . 'cart'; ?>">Ir a pagar <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                             /Cart -->

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
                    <li class="active"><a href="<?php echo base_url() . 'index'; ?>">Inicio</a></li>
                    <li><a href="<?php echo base_url() . 'index/all'; ?>">Todo</a></li>
                    <li><a title="En proceso de desarrollo">Novedades</a></li>
                    <li><a title="En proceso de desarrollo">Laptops</a></li>
                    <li><a title="En proceso de desarrollo">Smartphones</a></li>
                    <li><a title="En proceso de desarrollo">Accesorios</a></li>
                    <li><a title="En proceso de desarrollo">Ofertas</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->