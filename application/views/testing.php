<?php $i = 0;
$total = 0;
foreach ($cart_amount as $ca) : $i++ ?>
<?php endforeach; ?>

<?php if ($i > 0) : ?>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="wrapper wrapper-content animated fadeInRight">
                <!-- row -->
                <div class="row">

                    <div class="col-md-9">

                        <div class="ibox">
                            <div class="ibox-title">
                                <span class="pull-right">(<strong><?= $i ?></strong>) Articulos</span>
                                <h5>Tus articulos seleccionados</h5>
                            </div>
                            <!-- product -->
                            <?php foreach ($cart_view as $cv) : ?>
                                <form action="<?php echo base_url() . 'cart/cart-delete'; ?>" method="post" enctype='multipart/form-data'>
                                    <div class="ibox-content">
                                        <div class="table-responsive">
                                            <table class="cart-table table shoping-cart-table">
                                                <input type="hidden" name="id_pdto" value="<?php echo $cv->_id; ?>" required>
                                                <tbody>
                                                    <tr>
                                                        <td class="cart-size-14">
                                                            <div>
                                                                <img class="cart-img" src="<?php echo base_url() . 'assets/images/' . $cv->img_pdto; ?>" alt="Item Img" />
                                                            </div>
                                                        </td>
                                                        <td class="cart-size-65 desc">
                                                            <h4 class="product-name"><a href="#"><?php echo $cv->nom_pdto; ?></a></h4>
                                                            <p class="small"><?php echo $cv->desc_pdto; ?></p>
                                                            <dl class="small m-b-none">
                                                                <dt>Caracteristicas</dt>
                                                            </dl>

                                                            <div class="m-t-sm">
                                                                <a href="#" class="text-muted"><i class="fa fa-gift" title="En proceso de desarrollo"></i> Empacar como regalo </a>
                                                                |
                                                                <button type="submit" class="text-muted"><i class="fa fa-trash"></i> Remover Articulo </button>
                                                            </div>
                                                        </td>
                                                        <td class="cart-size-21">
                                                            <h4><span class="qty">$<?php echo $cv->precio_pdto; ?></span></h4>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </form>
                            <?php endforeach; ?>
                            <!-- /product -->
                            <div class="ibox-content">
                                <!--<button class="btn btn-danger pull-right"><i class="fa fa fa-shopping-cart"></i> Checkout</button>-->
                                <a href="<?php echo base_url() . 'index' ?>" class="btn btn-white"><i class="fa fa-arrow-left"></i> Seguir comprando</a>
                            </div>
                        </div>
                    </div>

                    <!-- Order Details -->
                    <div class="col-md-5 order-details" width="35%">
                        <div class="section-title text-center">
                            <h3 class="title">Tu Pedido</h3>
                        </div>
                        <div class="order-summary">
                            <div class="order-col">
                                <div><strong>Producto<?php if ($i > 1) : ?>(s)<?php endif ?></strong></div>
                                 <!--<div><strong><?= $total; ?></strong></div>-->
                            </div>
                            <div class="order-products">
                                <?php foreach ($cart_checking as $cch) : ?>
                                    <div class="order-col">
                                        <div><?php echo $cch->nom_pdto ?></div>
                                        <div>$<?php echo $cch->precio_pdto ?></div>
                                    </div>
                                <?php $total += $cch->precio_pdto;  endforeach; ?>
                            </div>
                            <!--<div class="order-col">
                                <div>- [En revision] -</div>
                                <div><strong>GRATIS</strong></div>
                            </div>-->
                            <div class="order-col">
                                <div><strong>TOTAL</strong></div>
                                <div><strong class="order-total">$<?= $total; ?></strong></div>
                            </div>
                        </div>
                        <div class="payment-method">
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-1">
                                <!-- <label for="payment-1">
                                    <span></span>
                                    - [En revision] -
                                </label>
                                <div class="caption">
                                    <p> </p>
                                </div>
                            </div>
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-2">
                                <label for="payment-2">
                                    <span></span>
                                    - [En revision] -
                                </label>
                                <div class="caption">
                                    <p> </p>
                                </div>
                            </div>
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-3">
                                <label for="payment-3">
                                    <span></span>
                                    - [En revision] -
                                </label>
                                <div class="caption">
                                    <p> </p>
                                </div> -->
                            </div>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="terms">
                            <label for="terms">
                                <span></span>
                                He leido y aceptado los <a href="#">terminos y condicicones</a>
                            </label>
                        </div>
                        <button id="botonOrdenar" type="button" class="primary-btn order-submit" onclick="window.location.href='user/add-adress'">
                                Ordenar
                        </button>
      
                    </div>
                    <!-- /Order Details -->
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
<?php else : ?>
    <h1 class="cart-empty-text">No hay productos agregados al carro de compras</h1>
<?php endif; ?>