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
							<img src="<?php echo base_url() . 'assets/templates/site/img/lapcol.png'; ?>" />
						</div>
						<div class="shop-body">
							<h3>Coleccion de<br>Laptops</h3>
							<a class="cta-btn">Ir a ver <i class="fa fa-arrow-circle-right" title="En proceso de desarrollo"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->

				<!-- shop -->
				<div class="col-md-4 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="<?php echo base_url() . 'assets/templates/site/img/phonecol.png'; ?>" />
						</div>
						<div class="shop-body">
							<h3>Coleccion de<br>Smartphones</h3>
							<a href="#" class="cta-btn">Ir a ver <i class="fa fa-arrow-circle-right" title="En proceso de desarrollo"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->

				<!-- shop -->
				<div class="col-md-4 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="<?php echo base_url() . 'assets/templates/site/img/accecol.png'; ?>" />
						</div>
						<div class="shop-body">
							<h3>Coleccion de<br>Accesorios</h3>
							<a href="#" class="cta-btn">Ir a ver <i class="fa fa-arrow-circle-right" title="En proceso de desarrollo"></i></a>
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
								<li class="active"><a data-toggle="tab" title="En proceso de desarrollo">Laptops</a></li>
								<li><a data-toggle="tab" title="En proceso de desarrollo">Smartphones</a></li>
								<li><a data-toggle="tab" title="En proceso de desarrollo">Accesorios</a></li>
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

									<!-- product -->
									<?php foreach ($products as $p) : ?>
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url() . 'assets/images/' . $p->img_pdto; ?>" alt="Item Img" />
												<div class="product-label">
													<span class="new">Nuevo</span>
												</div>
											</div>
											<div class="product-body">

												<form action="<?php echo base_url() . 'user/add-cart' ?>" method="post">
													<input type="hidden" name="category" value="<?php echo $p->categoria; ?>" id="category">
													<input type="hidden" name="name" value="<?php echo $p->nom_pdto; ?>" id="name">
													<input type="hidden" name="brand" value="<?php echo $p->marca_pdto; ?>" id="brand">
													<input type="hidden" name="price" value="<?php echo $p->precio_pdto; ?>" id="price">
													<input type="hidden" name="description" value="<?php echo $p->desc_pdto; ?>" id="description">
													<input type="hidden" name="image" value="<?php echo $p->img_pdto; ?>" accept="image/*">

													<p class="product-category"><?php echo $p->categoria; ?></p>
													<h3 class="product-name"><a href="#"><?php echo $p->nom_pdto; ?></a></h3>
													<h4 class="product-price">$<?php echo $p->precio_pdto; ?><del class="product-old-price"></del></h4>

													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>

													<div class="product-btns">
														<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp" title="En proceso de desarrollo">agregar a favoritos</span></button>
														<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp" title="En proceso de desarrollo">comparar</span></button>
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp" title="En proceso de desarrollo">previsualizar</span></button>
													</div>

											</div>
											<div class="add-to-cart">
												<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al carrito</button>
											</div>
											</form>
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
	<div style='padding: 60px 0px;
  				margin: 30px 0px;
  				background-color: #E4E7ED;
  				background-image: url(<?php echo base_url() . 'assets/templates/site/img/offeredit.png'; ?>);
  				background-position: center;
  				background-repeat: no-repeat;'>
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
						<a class="primary-btn cta-btn" title="En proceso de desarrollo">Comprar ahora</a>
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
						<h3 class="title">Populares</h3>
						<div class="section-nav">
							<ul class="section-tab-nav tab-nav">
								<li class="active"><a data-toggle="tab" title="En proceso de desarrollo">Laptops</a></li>
								<li><a data-toggle="tab" title="En proceso de desarrollo">Smartphones</a></li>
								<li><a data-toggle="tab" title="En proceso de desarrollo">Accessorios</a></li>
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
									<?php foreach ($products2 as $p) : ?>
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url() . 'assets/images/' . $p->img_pdto; ?>" height="180px" width="200px" alt="Item Img" />
												<div class="product-label">
													<span class="new">Nuevo</span>
												</div>
											</div>
											<div class="product-body">

												<form action="<?php echo base_url() . 'user/add-cart' ?>" method="post">
													<input type="hidden" name="category" value="<?php echo $p->categoria; ?>" id="category">
													<input type="hidden" name="name" value="<?php echo $p->nom_pdto; ?>" id="name">
													<input type="hidden" name="brand" value="<?php echo $p->marca_pdto; ?>" id="brand">
													<input type="hidden" name="price" value="<?php echo $p->precio_pdto; ?>" id="price">
													<input type="hidden" name="description" value="<?php echo $p->desc_pdto; ?>" id="description">
													<input type="hidden" name="image" value="<?php echo $p->img_pdto; ?>" accept="image/*">

													<p class="product-category"><?php echo $p->categoria; ?></p>
													<h3 class="product-name"><a href="#"><?php echo $p->nom_pdto; ?></a></h3>
													<h4 class="product-price">$<?php echo $p->precio_pdto; ?><del class="product-old-price"></del></h4>

													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>

													<div class="product-btns">
														<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp" title="En proceso de desarrollo">agregar a favoritos</span></button>
														<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp" title="En proceso de desarrollo">comparar</span></button>
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp" title="En proceso de desarrollo">previsualizar</span></button>
													</div>

											</div>
											<div class="add-to-cart">
												<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar al carrito</button>
											</div>
											</form>
										</div>
									<?php endforeach; ?>
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
				<?php $i = 0; ?>
				<div class="col-md-4 col-xs-6">
					<div class="section-title">
						<h4 class="title">Mas vendidos</h4>
						<div class="section-nav">
							<div id="slick-nav-3" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-3">
						<div>
							<?php foreach ($products3 as $p) : if ($i >= 3) {
        break;
    }?>
								
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url() . 'assets/images/' . $p->img_pdto; ?>" alt="Item Img" />
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $p->categoria; ?></p>
										<h3 class="product-name"><a href="#"><?php echo $p->nom_pdto; ?></a></h3>
										<h4 class="product-price">$<?php echo $p->precio_pdto; ?><del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
							<?php ++$i;
							endforeach; ?>
						</div>
					</div>
				</div>

				<?php $i = 0; ?>
				<div class="col-md-4 col-xs-6">
					<div class="section-title">
						<h4 class="title">Mejor valorados</h4>
						<div class="section-nav">
							<div id="slick-nav-4" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-4">
						<div>
							<?php foreach  ($products4 as $p) : if ($i >= 3) {
        break;
    }?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url() . 'assets/images/' . $p->img_pdto; ?>" alt="Item Img" />
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $p->categoria; ?></p>
										<h3 class="product-name"><a href="#"><?php echo $p->nom_pdto; ?></a></h3>
										<h4 class="product-price">$<?php echo $p->precio_pdto; ?><del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
							<?php ++$i;
							endforeach; ?>
						</div>
					</div>
				</div>

				<div class="clearfix visible-sm visible-xs"></div>

				<?php $i = 0; ?>
				<div class="col-md-4 col-xs-6">
					<div class="section-title">
						<h4 class="title">Con descuento</h4>
						<div class="section-nav">
							<div id="slick-nav-5" class="products-slick-nav"></div>
						</div>
					</div>

					<div class="products-widget-slick" data-nav="#slick-nav-5">
						<div>
							<?php foreach  ($products5 as $p) : if ($i >= 3) {
        break;
    }?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url() . 'assets/images/' . $p->img_pdto; ?>" alt="Item Img" />
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $p->categoria; ?></p>
										<h3 class="product-name"><a href="#"><?php echo $p->nom_pdto; ?></a></h3>
										<h4 class="product-price">$<?php echo $p->precio_pdto; ?><del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
							<?php ++$i;
							endforeach; ?>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->