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


			<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
				<div class="overlay"></div>
				<div class="container">
					<h1 class="entry-title">SHOP - Uk Medi</h1>
				</div>
			</section>






						<section class="container col-md-12">
							<!-- Search Widget
							============================================= -->
							<!-- <div class="sidebar-widget">
								<div class="search clearfix">
									<form method="get" action="#.">
										<input type="text" placeholder="Search...">
										<button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
									</form>
								</div>
							</div> -->

							<!-- Categories Widget
							============================================= -->
							<!-- <div class="sidebar-widget clearfix">
								<h2 class="bordered light">Categories</h2>
								<ul class="tags">
									<li><a href="#.">Dental Clinic</a></li>
									<li><a href="#.">Business</a></li>
									<li><a href="#.">Graphic Design</a></li>
									<li><a href="#.">Logo</a></li>
									<li><a href="#.">Heart Specialist</a></li>
									<li><a href="#.">Eye Specialist</a></li>
									<li><a href="#.">Premium Wordpress</a></li>
									<li><a href="#.">Photoshop Special</a></li>
								</ul>
							</div> -->
						</section>





<h2 class="bordered light container">Shop - Uk Medi <span>Productos</span></h2>
			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-11 col-md-offset-1 clearfix">
							<!-- Products
							============================================= -->
							<div class="products">
							@foreach($articulos as $articulo)
								<div class="product col-md-3">
									<div class="product-thumb">
										<a href="/shop/{{$articulo->url}}"><img src="{{url($articulo->imagen)}}" style="width:100%; height: 240px;" alt=""></a>
									</div>
									<h4>{{$articulo->titulo}}</h4>
									<p>{{$articulo->subtitulo}}</p>
									<div class="price-rating">
									<p class="price">&pound;{{$articulo->formatted_price}}</p>
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
									<!-- <a href="{{route( 'add_articulo_to_cart', $articulo )}}" class="ad-to-cart"><i class="fa fa-shopping-cart"></i>add to cart</a> -->
								</div>
							@endforeach

								
							</div>
						</div>
					</div>
				</div>
		</div><!--end sub-page-content-->











		@include('ukmedik_web.footer')

    </div><!--end #wrapper-->
  </body>
</html>