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

			@if(isset($categoria))
			<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
				<div class="overlay"></div>
				<div class="container">
					<h1 class="entry-title">{{$categoria->nombre}}</h1>
					<p>Información de biotecnología, medicina y eventos.</p>
				</div>
			</section>
			@else
				<!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
				<div class="overlay"></div>
				<div class="container">
					<h1 class="entry-title">Blog</h1>
					<p>Información de biotecnología, medicina y eventos.</p>
				</div>
			</section>
			@endif

	




			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">

				<div class="container">

					<div class="row">


						<!-- Blog Left
						============================================= -->
						<div class="col-md-8">

							<h2 class="bordered light">NOTICIAS <span>RECIENTES</span></h2>

							<div class="row">

								<div class="col-md-12">
									@foreach($noticias as $noticia)
									
									<article class="blog-item">
										<div class="blog-thumbnail">
											<img alt="{{$noticia->titulo}}" src="{{url($noticia->fotos->first()->url)}}">
											<div class="blog-date"><p class="day">{{$noticia->fecha_publicacion->format('d')}}</p><p class="monthyear">{{$noticia->fecha_publicacion->format('M y')}}</p></div>
										</div>
										<div class="blog-content">
											<h4 class="blog-title"><a href="/blog/{{$noticia->url}}">{{$noticia->titulo}}</a></h4>
											<p class="blog-meta">By: <a href="#">admin</a> | Etiquetas: @foreach($noticia->etiquetas as $etiqueta) <a href="{{route('etiquetas.show', $etiqueta)}}">{{$etiqueta->nombre}},</a>
											@endforeach </p>
											<p>{!!  $noticia->extracto !!}</p>
											<a href="/blog/{{$noticia->url}}" class="btn btn-default btn-mini btn-rounded">READ MORE</a>
										</div>
									</article>
									@endforeach
									{{ $noticias->links() }}
								</div>
								<div class="col-md-7">
									<!-- <article class="blog-item">
										<div class="blog-thumbnail">
											<img alt="" src="images/ukop2.webp">
											<div class="blog-date"><p class="day">29</p><p class="monthyear">FEB 2014</p></div>
										</div>
										<div class="blog-content">
											<h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
											<p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>, <a href="#">illustration</a>, <a href="#">Logo</a></p>
											<p>Printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever scrambled...</p>
											<a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
										</div>
									</article> -->
								</div>
								
							</div>

						</div>

						<aside class="col-md-4">


							<!-- Search Widget
							============================================= -->
							<div class="sidebar-widget">
								<div class="search clearfix">
									<a href="https://www.instagram.com/ukmedi" class="btn btn-default btn-rounded"><img src="images/instagram.webp" alt=""> Visitar perfil de instagram</a>
								</div>
							</div>


							<!-- Categories Widget
							============================================= -->
							<div class="sidebar-widget clearfix">

								<h2 class="bordered light">Categories</h2>

								<ul class="tags">
								@foreach($categorias as $categoria)
									<!-- <li><a href="{{$categoria->id}}">{{$categoria->nombre}}</a></li> -->
									
									<li><a href="{{route('categorias.show', $categoria->url)}}">{{$categoria->nombre}}</a></li>
								@endforeach
								</ul>

							</div>


							<!-- Recent posts
							============================================= -->
							<div class="sidebar-widget light">

								<h2 class="bordered light"><a href="https://www.instagram.com/ukmedi" class="btn btn-default btn-rounded"><img src="images/venta.webp" alt=""> Visitar Tienda</a></h2>

							</div>



							<div class="sidebar-widget clearfix">


								<!-- Medicom Tour
								============================================= -->
								<h2 class="bordered light">ÚLTIMO POST EN <span>INSTAGRAM</span></h2>

								<div class="panel-group" id="accordion">

								  <div class="panel panel-default">
							        <div class="col-md-4 col-lg-4">
							            <iframe src="https://instagram.com/p/CMk2YedsXbP/embed/captioned" width="320" height="425" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
							        </div>
								</div>

							</div>

						</aside>

					</div>

				</div>



			</div><!--end sub-page-content-->







		<!-- Footer
		============================================= -->

		@include('ukmedik_web.footer')

    </div><!--end #wrapper-->
  </body>
</html>