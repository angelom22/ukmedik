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
					<h1 class="entry-title">Shop Detail</h1>
				</div>
			</section>





			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-8 clearfix">
							<h2 class="bordered light">UK MEDI <span>Product</span></h2>

							<div class="row">
								<div class="col-md-6 col-sm-6"><img src="{{url($articulo->imagen)}}" alt="" class="img-rounded"></div>
								<div class="col-md-6 col-sm-6">
									<div class="product-single-content">
										<h4>{{$articulo->titulo}}</h4>
										<p>{{$articulo->subtitulo}}</p>

										<!-- <ul class="medicom-feature-list text-left">
											<li><i class="fa fa-check medicom-check"></i>We offer a no free initial consultation.</li>
											<li><i class="fa fa-check medicom-check"></i>Previous Medical History</li>
										</ul> -->

									</div>

									<div class="cart-items-detail clearfix">
										<div class="item-counter clearfix">
											<span id="less-item" class="pull-left">-</span>
											<input type="text" value="0" id="total-items" class="items-total">
											<span id="pluss-item" class="pull-right">+</span>
										</div>
										<a class="btn btn-default pull-left" href="{{route('add_articulo_to_cart', $articulo)}}">add to cart</a>
									</div>
								</div>
							</div>

							<div class="height30"></div>

							<h2 class="light bordered">Product <span>Info</span></h2>

							<div id="horizontalTab" class="tab-horizontal1">
								<ul class="resp-tabs-list">
									<li>Discription</li>
									
								</ul>

								<div class="resp-tabs-container">
									<div>
										<p>{{$articulo->descripcion}}</p>
									</div>

									
								</div>
							</div>

							<h2 class="light bordered">Related <span>Products</span></h2>

							<div class="row">
								<div class="col-md-12">
								@foreach($articulos as $articulo)
									<div class="product">
										<div class="product-thumb">
											<a href="#."><img alt="" src="{{url($articulo->imagen)}}" style="width:100%; height: 240px;"></a>
										</div>
										<h4>{{$articulo->titulo}}</h4>
										<p>{{$articulo->subtitulo}}</p>
										<div class="price-rating">
										<p class="price">&pound;{{$articulo->precio}}</p>
										<ul class="rating">
											<li class="fa fa-star"></li>
											<li class="fa fa-star"></li>
											<li class="fa fa-star"></li>
											<li class="fa fa-star"></li>
											<li class="fa fa-star"></li>
										</ul>
										<div class="clearfix"></div>
										</div>
										<span class="sperator"></span>
										<a href="{{route('add_articulo_to_cart', $articulo)}}" class="ad-to-cart"><i class="fa fa-shopping-cart"></i>add to cart</a>
										
									</div>
								@endforeach

									

								</div>

							</div>

						</div>

						<aside class="col-md-4">

							<!-- Search Widget
							============================================= -->
							<div class="sidebar-widget">
									<a href="https://www.instagram.com/ukmedi" class="btn btn-default btn-rounded"><img src="images/instagram.webp" alt=""> Visitar perfil de instagram</a>
							</div>


							<!-- Categories Widget
							============================================= -->
							<div class="sidebar-widget clearfix">
								<h2 class="bordered light">Categories</h2>
								<ul class="tags">
								@foreach($categorias as $categoria)
									<li><a href="{{$categoria->url}}">{{$categoria->nombre}}</a></li>
								@endforeach
								</ul>
							</div>


							<!-- Best Sellers Widget
							============================================= -->
							<div class="sidebar-widget light">
								<h2 class="bordered light">Producto más <span>Vendido</span></h2>
								@foreach($articulos as $articulo)
								<article class="best-seller">
									<img src="{{url($articulo->imagen)}}" alt="{{$articulo->titulo}}" style="width: 76px; height: 64px;">
									<h4><a href="/shop/{{$articulo->url}}">{{$articulo->titulo}}</a></h4>
									<p>{{$articulo->subtitulo}}.<strong>&pound;{{$articulo->precio}}</strong></p>
								</article>
								@endforeach
								
							</div>

							</div>
						</aside>
					</div>
				</div>
		</div><!--end sub-page-content-->


		@include('ukmedik_web.footer')

    </div><!--end #wrapper-->
  </body>
</html>