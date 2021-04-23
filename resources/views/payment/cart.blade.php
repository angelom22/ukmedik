<!DOCTYPE html>
<html lang="en" class="no-js">
@include('ukmedik_web.head')
    <body class="fixed-header">



		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">


			<!-- Header
			============================================= -->
			@include('ukmedik_web.menu')



			<!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
				<div class="overlay"></div>
				<div class="container">
					<h1 class="entry-title">Check Out</h1>
				</div>
			</section>



			@inject("cart", "App\Services\Cart")
			
			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">

				<div class="container">

					<div class="row">

						<div class="col-md-12 clearfix">


							<!-- Shopping Cart
							============================================= -->
							<h2 class="bordered light">Shopping <span>Cart</span></h2>

							@if (session()->has('flash'))
								<div class="alert alert-success">{{session('flash')}}</div>
							@endif

							<div class="cart-list clearfix">
								<div class="overflow">

									<div class="cart-bar clearfix">
										
										<div class="cart-product-heading">Producto</div>
										<div class="cart-price-heading">Precio</div>
										<!-- <div class="cart-quantity-heading">Cantidad</div> -->
										<!-- <div class="cart-total-heading">Total</div> -->
										<div class="cart-remove">&nbsp; Acciones</div>
									</div>
							@forelse($cart->getContent() as $articulo)

									<div class="cart-bar-list">

									<div class="cart-product">
										<a href="#." class="pull-left"><img src="{{url($articulo->imagen)}}" alt="" width="80"></a>
										<h4>{{$articulo->titulo}}</h4>
									</div>

									<div class="cart-price"><span class="amount">&pound;{{$articulo->formatted_price}}</span></div>

										<div class="product-remove2">
											<a class="btn btn-danger btn-sm" style="position:relative" href="{{route('remove_aticulo_from_cart', ['articulo' => $articulo])}}"><span>x</span></a>
											<!-- <button class="btn btn-danger btn-sm" style="position:absolute"><i class="fa fa-remove">x</i></button> -->
										</div>

									</div>

									<hr>
									{{$product = "$articulo->titulo $ $articulo->precio "}}

									@empty
									<div class="empty-results">
										{!! __("No tienes ningún artículo en el carrito") !!}
									</div>
								@endforelse	
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
											<label class="pull-right text-right price">&pound;{{$cart->totalAmount()}}</label>
											<div class="clearfix"></div>
											<label class="pull-left">Shipping</label>
											<label class="pull-right text-right">Free Shipping</label>
											<div class="clearfix"></div>
											<div class="order-total clearfix">
											<label class="pull-left">Order Total</label>
											<label class="pull-right text-right price">&pound;{{$cart->totalAmount()}}</label>
											</div>
										</div>
								    </div>

								<div class="cart-buttons">
									<div class="pull-right">
										<a class="ad-to-cart btn btn-default btn-rounded" href="https://api.whatsapp.com/send?phone=584126102882&text=*Productos:*%0D%0A{{$product}}%20*%0D%0A*Total:*%0D%0A{{$cart->totalAmount()}}">Enviar pedido al Whatsapp</a>
										<!-- <a class="ad-to-cart btn btn-default btn-rounded" href="https://api.whatsapp.com/send?phone=584126102882&text=*Productos:*%0D%0A{{$articulo->titulo}}%20*%0D%0A*Codigo:*%0D%0A{{$articulo->codigo}}%20*%0D%0A*Precio:*%0D%0A{{$articulo->precio}}%20*%0D%0A*Total:*%0D%0A{{$cart->totalAmount()}}">Enviar pedido al Whatsapp</a> -->

									</div>
								</div>
								</div>
							</div>

							
							
						</div>
					</div>
				</div>




		</div><!--end sub-page-content-->

		@include('ukmedik_web.footer')
    </div><!--end #wrapper-->
  </body>
</html>


