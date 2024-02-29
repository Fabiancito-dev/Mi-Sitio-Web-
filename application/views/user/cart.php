<?php $i = 0; foreach ($cart_view as $c) : $i++?>
    <div class="">
        <div class="">
            <div class="cart-list">
                <div class="product-widget">
                    <div class="product-img">
                        <img src="<?php echo base_url() . 'assets/images/' . $c->img_pdto; ?>" alt="Item Img" />
                    </div>
                    <div class="product-body">
                        <h3 class="product-name"><a href="#"><?php echo $c->nom_pdto; ?></a></h3>
                        <h4 class="product-price"><span class="qty">$ <?php echo $c->precio_pdto; ?></span></h4>
                    </div>
                    <?php $subtotal = 0;
                    $subtotal += $c->precio_pdto; ?>

                    <a class="delete"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="cart-btns">
                <a href="#">Ir a pagar <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php $subtotal = 0;
foreach ($cart_total as $ct) :
    $subtotal += $ct->precio_pdto;
endforeach;
if ($subtotal > 0) : ?>
    <div class="cart-summary">
        <small><?= $i ?> Producto(s) seleccionados</small>
        <h5>SUBTOTAL: $ <?= $subtotal; ?></h5>
    </div>
<?php else : ?>
    <h2 class="cart-empty-text">No hay productos agregados al carro de compras</h2>
<?php endif; ?>