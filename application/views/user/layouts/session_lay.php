	<!-- SECTION -->
	<div class="section">
	    <!-- container -->
	    <div class="container">
	        <!-- row -->
	        <div class="row">
	            <!-- shop -->
	            <div class="col-md-4 col-xs-6">
	                <div class="shop">
	                    <div class="shop-img">
	                        <img src="<?php echo base_url() . 'assets/templates/site/img/shop01.png'; ?>" />
	                    </div>
	                    <div class="shop-body">
	                        <h3>Coleccion de<br>Laptops</h3>
	                        <a href="#" class="cta-btn">Ir a ver <i class="fa fa-arrow-circle-right"></i></a>
	                    </div>
	                </div>
	            </div>
	            <!-- /shop -->

	            <!-- shop -->
	            <div class="col-md-4 col-xs-6">
	                <div class="shop">
	                    <div class="shop-img">
	                        <img src="<?php echo base_url() . 'assets/templates/site/img/shop03.png'; ?>" />
	                    </div>
	                    <div class="shop-body">
	                        <h3>Coleccion de<br>Accesorios</h3>
	                        <a href="#" class="cta-btn">Ir a ver <i class="fa fa-arrow-circle-right"></i></a>
	                    </div>
	                </div>
	            </div>
	            <!-- /shop -->

	            <!-- shop -->
	            <div class="col-md-4 col-xs-6">
	                <div class="shop">
	                    <div class="shop-img">
	                        <img src="<?php echo base_url() . 'assets/templates/site/img/shop02.png'; ?>" />
	                    </div>
	                    <div class="shop-body">
	                        <h3>Coleccion de<br>Camaras</h3>
	                        <a href="#" class="cta-btn">Ir a ver <i class="fa fa-arrow-circle-right"></i></a>
	                    </div>
	                </div>
	            </div>
	            <!-- /shop -->
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
	    <!-- container -->
	    <div class="container">
	        <!-- row -->
	        <div class="row">

	            <!-- section title -->
	            <div class="col-md-12">
	                <div class="section-title">
	                    <h3 class="title">Productos</h3>
	                    <div class="section-nav">
	                        <ul class="section-tab-nav tab-nav">
	                            <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
	                            <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
	                            <li><a data-toggle="tab" href="#tab1">Camaras</a></li>
	                            <li><a data-toggle="tab" href="#tab1">Accesorios</a></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	            <!-- /section title -->

	            <!-- Products tab & slick -->
	            <div class="col-md-12">
	                <div class="row">
	                    <div class="products-tabs">
	                        <!-- tab -->
	                        <div id="tab1" class="tab-pane active">
	                            <div class="products-slick" data-nav="#slick-nav-1">

                                    <?php //var_dump($products);?>

	                                <!-- product -->
                                    <?php foreach ($products as $p) : ?>
	                                        <div class="product">
	                                   <div class="product-img">
	                                            <img src="<?php base_url() . 'assets/files/' . $p->img_pdto; ?>" width="40" height="55"/>
	                                            <div class="product-label">
	                                                <!--<span class="sale">-30%</span>-->
	                                                <span class="new">Nuevo</span>
	                                            </div>
	                                        </div>
	                                        <div class="product-body">
	                                            <p class="product-category">Categoria</p>
	                                            <h3 class="product-name"><?php echo $p->nom_pdto; ?></h3>
	                                            <h4 class="product-price">$<?php echo $p->precio_pdto; ?><del class="product-old-price"></del></h4>
	                                            <div class="product-rating">
	                                                <i class="fa fa-star"></i>
	                                                <i class="fa fa-star"></i>
	                                                <i class="fa fa-star"></i>
	                                                <i class="fa fa-star"></i>
	                                                <i class="fa fa-star"></i>
	                                            </div>
	                                            <div class="product-btns">
	                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">agregar a favoritos</span></button>
	                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">comparar</span></button>
	                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">previsualizar</span></button>
	                                            </div>
	                                        </div>
	                                        <div class="add-to-cart">
	                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> agregar al carrito</button>
	                                        </div>
	                                </div>
	                                    <?php endforeach; ?>
	                                <!-- /product -->

	                            </div>
	                            <div id="slick-nav-1" class="products-slick-nav"></div>
	                        </div>
	                        <!-- /tab -->
	                    </div>
	                </div>
	            </div>
	            <!-- Products tab & slick -->
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- HOT DEAL SECTION -->
	<div id="hot-deal" class="section">
	    <!-- container -->
	    <div class="container">
	        <!-- row -->
	        <div class="row">
	            <div class="col-md-12">
	                <div class="hot-deal">
	                    <ul class="hot-deal-countdown">
	                        <li>
	                            <div>
	                                <h3>02</h3>
	                                <span>Dias</span>
	                            </div>
	                        </li>
	                        <li>
	                            <div>
	                                <h3>10</h3>
	                                <span>Horas</span>
	                            </div>
	                        </li>
	                        <li>
	                            <div>
	                                <h3>34</h3>
	                                <span>Minutos</span>
	                            </div>
	                        </li>
	                        <li>
	                            <div>
	                                <h3>60</h3>
	                                <span>Segundos</span>
	                            </div>
	                        </li>
	                    </ul>
	                    <h2 class="text-uppercase">oferta de la semana</h2>
	                    <p>Novedades hasta con el 50% de descuento</p>
	                    <a class="primary-btn cta-btn" href="#">Comprar ahora</a>
	                </div>
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</div>
	<!-- /HOT DEAL SECTION -->

	<!-- SECTION -->
	<div class="section">
	    <!-- container -->
	    <div class="container">
	        <!-- row -->
	        <div class="row">

	            <!-- section title -->
	            <div class="col-md-12">
	                <div class="section-title">
	                    <h3 class="title">Mas vendidos</h3>
	                    <div class="section-nav">
	                        <ul class="section-tab-nav tab-nav">
	                            <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
	                            <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
	                            <li><a data-toggle="tab" href="#tab2">Camaras</a></li>
	                            <li><a data-toggle="tab" href="#tab2">Accessorios</a></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	            <!-- /section title -->

	            <!-- Products tab & slick -->
	            <div class="col-md-12">
	                <div class="row">
	                    <div class="products-tabs">
	                        <!-- tab -->
	                        <div id="tab2" class="tab-pane fade in active">
	                            <div class="products-slick" data-nav="#slick-nav-2">
	                                <!-- product -->
	                                <div class="product">
	                                    <div class="product-img">
	                                        <img src="<?php echo base_url() . 'assets/templates/site/img/product06.png'; ?>" />
	                                        <div class="product-label">
	                                            <span class="sale">-30%</span>
	                                            <span class="new">Nuevo</span>
	                                        </div>
	                                    </div>
	                                    <div class="product-body">
	                                        <p class="product-category">Categoria</p>
	                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                                        <div class="product-rating">
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                        </div>
	                                        <div class="product-btns">
	                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">agregar a favoritos</span></button>
	                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">comparar</span></button>
	                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">previsualizar</span></button>
	                                        </div>
	                                    </div>
	                                    <div class="add-to-cart">
	                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> agregar al carrito</button>
	                                    </div>
	                                </div>
	                                <!-- /product -->

	                                <!-- product -->
	                                <div class="product">
	                                    <div class="product-img">
	                                        <img src="<?php echo base_url() . 'assets/templates/site/img/product07.png'; ?>" />
	                                        <div class="product-label">
	                                            <span class="new">Nuevo</span>
	                                        </div>
	                                    </div>
	                                    <div class="product-body">
	                                        <p class="product-category">Categoria</p>
	                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                                        <div class="product-rating">
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star-o"></i>
	                                        </div>
	                                        <div class="product-btns">
	                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">agregar a favoritos</span></button>
	                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">comparar</span></button>
	                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">previsualizar</span></button>
	                                        </div>
	                                    </div>
	                                    <div class="add-to-cart">
	                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> agregar al carrito</button>
	                                    </div>
	                                </div>
	                                <!-- /product -->

	                                <!-- product -->
	                                <div class="product">
	                                    <div class="product-img">
	                                        <img src="<?php echo base_url() . 'assets/templates/site/img/product08.png'; ?>" />
	                                        <div class="product-label">
	                                            <span class="sale">-30%</span>
	                                        </div>
	                                    </div>
	                                    <div class="product-body">
	                                        <p class="product-category">Categoria</p>
	                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                                        <div class="product-rating">
	                                        </div>
	                                        <div class="product-btns">
	                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">agregar a favoritos</span></button>
	                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">comparar</span></button>
	                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">previsualizar</span></button>
	                                        </div>
	                                    </div>
	                                    <div class="add-to-cart">
	                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> agregar al carrito</button>
	                                    </div>
	                                </div>
	                                <!-- /product -->

	                                <!-- product -->
	                                <div class="product">
	                                    <div class="product-img">
	                                        <img src="<?php echo base_url() . 'assets/templates/site/img/product09.png'; ?>" />
	                                    </div>
	                                    <div class="product-body">
	                                        <p class="product-category">Categoria</p>
	                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                                        <div class="product-rating">
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                        </div>
	                                        <div class="product-btns">
	                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">agregar a favoritos</span></button>
	                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">comparar</span></button>
	                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">previsualizar</span></button>
	                                        </div>
	                                    </div>
	                                    <div class="add-to-cart">
	                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> agregar al carrito</button>
	                                    </div>
	                                </div>
	                                <!-- /product -->

	                                <!-- product -->
	                                <div class="product">
	                                    <div class="product-img">
	                                        <img src="<?php echo base_url() . 'assets/templates/site/img/product01.png'; ?>" />
	                                    </div>
	                                    <div class="product-body">
	                                        <p class="product-category">Categoria</p>
	                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                                        <div class="product-rating">
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                            <i class="fa fa-star"></i>
	                                        </div>
	                                        <div class="product-btns">
	                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">agregar a favoritos</span></button>
	                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">comparar</span></button>
	                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">previsualizar</span></button>
	                                        </div>
	                                    </div>
	                                    <div class="add-to-cart">
	                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> agregar al carrito</button>
	                                    </div>
	                                </div>
	                                <!-- /product -->
	                            </div>
	                            <div id="slick-nav-2" class="products-slick-nav"></div>
	                        </div>
	                        <!-- /tab -->
	                    </div>
	                </div>
	            </div>
	            <!-- /Products tab & slick -->
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
	    <!-- container -->
	    <div class="container">
	        <!-- row -->
	        <div class="row">
	            <div class="col-md-4 col-xs-6">
	                <div class="section-title">
	                    <h4 class="title">Mas vendidos</h4>
	                    <div class="section-nav">
	                        <div id="slick-nav-3" class="products-slick-nav"></div>
	                    </div>
	                </div>

	                <div class="products-widget-slick" data-nav="#slick-nav-3">
	                    <div>
	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product07.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product08.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product09.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- product widget -->
	                    </div>

	                    <div>
	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product01.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product02.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product03.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- product widget -->
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-4 col-xs-6">
	                <div class="section-title">
	                    <h4 class="title">Mas vendidos</h4>
	                    <div class="section-nav">
	                        <div id="slick-nav-4" class="products-slick-nav"></div>
	                    </div>
	                </div>

	                <div class="products-widget-slick" data-nav="#slick-nav-4">
	                    <div>
	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product04.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product05.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product06.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- product widget -->
	                    </div>

	                    <div>
	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product07.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product08.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product09.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- product widget -->
	                    </div>
	                </div>
	            </div>

	            <div class="clearfix visible-sm visible-xs"></div>

	            <div class="col-md-4 col-xs-6">
	                <div class="section-title">
	                    <h4 class="title">Mas vendidos</h4>
	                    <div class="section-nav">
	                        <div id="slick-nav-5" class="products-slick-nav"></div>
	                    </div>
	                </div>

	                <div class="products-widget-slick" data-nav="#slick-nav-5">
	                    <div>
	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product01.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product02.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product03.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- product widget -->
	                    </div>

	                    <div>
	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product04.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product05.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- /product widget -->

	                        <!-- product widget -->
	                        <div class="product-widget">
	                            <div class="product-img">
	                                <img src="<?php echo base_url() . 'assets/templates/site/img/product06.png'; ?>" />
	                            </div>
	                            <div class="product-body">
	                                <p class="product-category">Categoria</p>
	                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
	                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
	                            </div>
	                        </div>
	                        <!-- product widget -->
	                    </div>
	                </div>
	            </div>

	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</div>
	<!-- /SECTION -->