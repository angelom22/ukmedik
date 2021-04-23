<!DOCTYPE html>
<html lang="en" class="no-js">
  <?php include 'head.php'; ?>
    <body class="fixed-header">



		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">


			<!-- Header
			============================================= -->
				<?php include 'menu.php'; ?>



			<!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
				<div class="overlay"></div>
				<div class="container">
					<h1 class="entry-title">Check Out</h1>
				</div>
			</section>





			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">

				<div class="container">

					<div class="row">

						<div class="col-md-12 clearfix">


							<!-- Shopping Cart
							============================================= -->
							<h2 class="bordered light">Shopping <span>Cart</span></h2>

							<div class="cart-list clearfix">
								<div class="overflow">

									<div class="cart-bar clearfix">
										<div class="cart-product-heading">Producto</div>
										<div class="cart-price-heading">Precio</div>
										<div class="cart-quantity-heading">Cantidad</div>
										<div class="cart-total-heading">Total</div>
										<div class="cart-remove">&nbsp;</div>
									</div>

									<div class="cart-bar-list">

										<div class="cart-product">
											<a href="#." class="pull-left"><img src="images/product-img1.webp" alt="" width="80"></a>
											<h4>Panadol Tablet</h4>
										</div>

										<div class="cart-price"><span class="amount">&pound;5.99</span></div>

										<div class="cart-quantity">
											<div class="item-counter">
												<span class="pull-left" id="less-item">-</span>
												<input type="text" class="items-total" id="total-items" value="0">
												<span class="pull-right" id="pluss-item">+</span>
											<div class="clr"></div>
											</div>
										</div>

										<div class="cart-total">
											<span class="amount">&pound;5.99</span>
										</div>

										<div class="product-remove2">
											<span>x</span>
										</div>

									</div>

								</div>
							</div>

							<div class="height40"></div>
							<div class="row">
								<div class="col-md-6">
									<div class="cart-shipping clearfix">
										<!-- Calculate Shipping
										============================================= -->
										<h4 class="light">Datos <span>del Cliente</span></h4>
										<form>
											<label class="col-md-2">Metodo de pago</label>
											<div class="col-md-10">
												<select>
													<option>Zelle</option>
													<option>Paypal</option>
													<option>Transferencia en Bs</option>
												</select>
											</div>
											<label class="col-md-2">Nombre y Apellido</label>
											<div class="col-md-10">
												<input type="text">
											</div>
										</form>
								    </div>
								</div>

								<div class="col-md-6">
									<div class="cart-shipping clearfix">
										<!-- Cart Totals
										============================================= -->
										<h4 class="light">PRESUPUESTO <span>Totals</span></h4>

										<div class="cart-total-amount">
											<label class="pull-left">Cart Subtotal</label>
											<label class="pull-right text-right price">&pound;65.94</label>
											<div class="clearfix"></div>
											<label class="pull-left">Shipping</label>
											<label class="pull-right text-right">Free Shipping</label>
											<div class="clearfix"></div>
											<div class="order-total clearfix">
											<label class="pull-left">Order Total</label>
											<label class="pull-right text-right price">&pound;65.94</label>
											</div>
										</div>
								    </div>

								    								<div class="cart-buttons">
									<div class="pull-right">
										<a href="#." class="btn btn-default btn-rounded">Enviar pedido al WhatsApp</a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>




		</div><!--end sub-page-content-->

<?php include 'footer.php'; ?>
    </div><!--end #wrapper-->
  </body>
</html>