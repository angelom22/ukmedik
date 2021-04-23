<!-- Footer
	============================================= -->
	<footer id="footer" class="light">

		<div class="container">

			<div class="row">

            	<div class="col-md-3">

					<!-- Footer Widget
					============================================= -->
					<div class="footer-widget">

						<h4><span>Uk Medi</span></h4>

						<ul class="footer-nav list-unstyled clearfix">
                            <li><a href="{{ url('/') }}"><i class="fa fa-long-arrow-right"></i>Inicio</a></li>
                            <li><a href="{{ url('empresa') }}"><i class="fa fa-long-arrow-right"></i>Uk Medi</a></li>
                            <li><a href="{{ url('medicinadeportiva') }}"><i class="fa fa-long-arrow-right"></i>Medicina deportiva</a></li>
                            <li><a href="{{ url('protesis') }}"><i class="fa fa-long-arrow-right"></i>Protesis</a></li>
                            <li><a href="{{ url('aloinjertos') }}"><i class="fa fa-long-arrow-right"></i>Aloinjertos</a></li>
                            <li><a href="{{ url('blog') }}"><i class="fa fa-long-arrow-right"></i>Blog</a></li>
                            <li><a href="{{ url('shop') }}"><i class="fa fa-long-arrow-right"></i>Shop</a></li>
                            <li><a href="{{ url('contacto') }}"><i class="fa fa-long-arrow-right"></i>Contacto</a></li>
                            <li><a href="{{ route('login') }}"><i class="fa fa-long-arrow-right"></i>Login</a></li>
                        </ul>

                    </div>

                </div>

            	<div class="col-md-3">

					<!-- Footer Widget
					============================================= -->
                	<div class="footer-widget">

						<h4><span>newsletter</span></h4>

						<div class="newsletter clearfix">

							<i class="fa fa-envelope"></i>
                            <p class="newsletter-text">Registrese con su correo electrónico para recibir actualizaciones de nuevos productos.</p>
						<form name="newsletter_form" id="newsletter_form" method="post" action="submit.php" onSubmit="return false">
                            <input type="email" name="news_email_address" id="news_email_address" placeholder="Email Address" onKeyPress="removeChecks();">
                            <input type="submit" value="subscribe" class="btn btn-default btn-rounded" onClick="validateNewsletter();">
                        </form>

                        </div>
                    </div>

                </div>

            	<div class="col-md-3">

					<!-- Footer Widget
					============================================= -->
					<div class="footer-widget">

						<h4><span>Aliados</span></h4>

						<div class="twitter-widget">
							<div class="tweet">
								<i class="fa fa-globe"></i><p><a href="https://ukmedik.com">www.arthromic.com</a></p>
								<i class="fa fa-globe"></i><p><a href="https://iongencorp.com">www.iongencorp.com</a></p>
								<i class="fa fa-globe"></i><p><a href="https://ukmedik.com">www.iongenallograft.com</a></p>
							</div>
						</div>

					</div>

                </div>

            	<div class="col-md-3">

					<!-- Footer Widget
					============================================= -->
					<div class="footer-widget">

						<h4><span>Ubicación</span></h4>
						<div class="contact-widget">
                        	<i class="fa fa-home"></i><p>La Urbina, calle 3a Torre Centro Profesional Piso 2, Oficina 2-E.</p>
							<i class="fa fa-globe"></i><p><a href="https://ukmedik.com">www.ukmedik.com</a></p>
                            <i class="fa fa-mobile"></i><p class="phone-number">+58 424 2533899</p>
                        </div>

						<ul class="social3 clearfix">
								<li><a href="https://www.facebook.com/ukmedi"><img src="images/fb.webp" alt="" title="Facebook Uk Medi" width="30"></a></li>
								<li><a href="https://www.instagram.com/ukmedi"><img src="images/iconoig.webp" alt="" title="Instagram Uk Medi" width="30"></a></li>
						</ul>

                    </div>

                </div>
            </div>
        </div>


		<!-- Copyright
		============================================= -->
        <p class="text-center">Copyright &copy; <?php echo date("Y"); ?> Uk Medi. All right reserved.</p>
    </footer>

		<!-- back to top -->
		<a href="#." class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>


			<!-- All Javascript
	============================================= -->
	<script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.stellar.js')}}"></script>
	<script src="{{asset('/js/jquery-ui-1.10.3.custom.js')}}"></script>
    <script src="{{asset('/js/owl.carousel.js')}}"></script>
    <script src="{{asset('/js/counter.js')}}"></script>
    <script src="{{asset('/js/waypoints.js')}}"></script>
	<script src="{{asset('/js/jquery.uniform.js')}}"></script>
    <script src="{{asset('/js/easyResponsiveTabs.js')}}"></script>
	<script src="{{asset('/js/jquery.fancybox.pack.js')}}"></script>
	<script src="{{asset('/js/jquery.fancybox-media.js')}}"></script>
	<script src="{{asset('/js/jquery.mixitup.js')}}"></script>
	<script src="{{asset('/js/forms-validation.js')}}"></script>
	<script src="{{asset('/js/jquery.jcarousel.min.js')}}"></script>
	<script src="{{asset('/js/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('/js/scripts.js')}}"></script>

	<!-- This page
	============================================= -->
	<script src="{{asset('/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script src="{{asset('/js/jquery.themepunch.revolution.min.js')}}"></script>


	<script id="dsq-count-scr" src="//ukmedik.disqus.com/count.js" async></script>

	<script>
		(function () {

			// Revolution slider
			var revapi;
			revapi = jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:682,
				hideThumbs:200,
				fullWidth:"on",
				forceFullWidth:"on"
			});

		})();

	</script>