		<header id="header" class="medicom-header medical-nav">
			<!-- Top Row
			============================================= -->
			<div class="solid-row"></div>

			<div class="container">


				<!-- Primary Navigation
				============================================= -->
				<nav class="navbar navbar-default" role="navigation">

					<!-- Brand and toggle get grouped for better mobile display
					============================================= -->

					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" href="index.html"><img src="/images/logouk.webp" alt="" title=""></a>
					</div>


					<div class="collapse navbar-collapse navbar-right" id="primary-nav">

						<ul class="nav navbar-nav">

							<li class="">
								<a href="{{ url('/') }}"><i class="fa fa-plus"></i>Inicio</a>
							</li>


							<li class="">
								<a href="{{ url('empresa') }}"><i class="fa fa-plus"></i>Uk Medi</a>
							</li>


							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i>Servicios</a>
								<ul class="dropdown-menu">
									<li><a href="{{ url('medicinadeportiva') }}">Medicina Deportiva</a></li>
									<li><a href="{{ url('aloinjertos') }}">Aloinjertos</a></li>
									<li><a href="{{ url('protesis') }}">Protésis</a></li>
								</ul>
							</li>

							<li class="">
								<a href="{{ url('blog') }}"><i class="fa fa-plus"></i>Blog</a>
							</li>

							<li class="">
								<a href="{{ url('shop') }}"><i class="fa fa-plus"></i>Shop</a>
							</li>

							<li class="">
								<a href="{{ url('contacto') }}"><i class="fa fa-plus"></i>Contacto</a>
							</li>

						</ul>

					</div>
				</nav>
			</div>
    	</header>