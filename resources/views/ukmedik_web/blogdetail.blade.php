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
					<h1 class="entry-title">{{$noticia->titulo}}</h1>
				</div>
			</section>




			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">

				<div class="container">

					<div class="row">

						<div class="col-md-8 blog-wrapper clearfix">

							<h2 class="bordered light"><span>{{$noticia->titulo}} </span></h2>
							
							<article class="blog-item blog-full-width blog-detail">

								<div class="blog-thumbnail">
									<img alt="{{$noticia->titulo}}" src="{{$noticia->fotos->first()->url}}">
								</div>

								<div class="blog-content">
									<p>{!! $noticia->contenido !!}</p>
									
								</div>


								@include('ukmedik_web.partials.social-links')

							</article>



							<!-- <h2 class="bordered light">Responses <span>5</span></h2> -->

							@include('ukmedik_web.partials.disqus-script')

						</div>


						<aside class="col-md-4">


							<!-- Search Widget
							============================================= -->
							<div class="sidebar-widget">
								<div class="search clearfix">
									<a href="https://www.instagram.com/ukmedi" class="btn btn-default btn-rounded"><img src="/images/instagram.webp" alt=""> Visitar perfil de instagram</a>
								</div>
							</div>


							<!-- Categories Widget
							============================================= -->
							<div class="sidebar-widget clearfix">

								<h2 class="bordered light">Category</h2>

								<ul class="tags">
								
									<li><a href="{{route('categorias.show', $noticia->categoria)}}">{{$noticia->categoria->nombre}}</a></li>
								
								</ul>

							</div>


							<!-- Recent posts
							============================================= -->
							<div class="sidebar-widget light">

								<h2 class="bordered light"><a href="https://www.instagram.com/ukmedi" class="btn btn-default btn-rounded"><img src="/images/venta.webp" alt=""> Visitar Tienda</a></h2>

							</div>




							<div class="sidebar-widget clearfix">


								<!-- Medicom Tour
								============================================= -->
								<h2 class="bordered light">ÚLTIMO POST EN <span>INSTAGRAM</span></h2>

								<div class="panel-group" id="accordion">

								<div class="sidebar-widget light">
																	        <div class="col-md-4 col-lg-4">
							            <iframe src="https://instagram.com/p/CMk2YedsXbP/embed/captioned" width="320" height="425" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
							        </div>
									</div>
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