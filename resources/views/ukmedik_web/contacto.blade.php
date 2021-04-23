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
					<h1 class="entry-title">Contacto</h1>
				</div>

			</section>


			@if (session()->has('flash'))
                <div class="alert alert-success">{{session('flash')}}</div>
            @endif

			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">

				<div class="container">

					<h2 class="light bordered">Nuestra<span> Ubicación</span></h2>

					<div class="row">

						<div class="col-md-12">

							<!-- Map
							============================================= -->
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.2269063171234!2d-66.80726048481499!3d10.482770767410694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5786dfeda30d%3A0xd6c2519f9e085c51!2sCentro%20Profesional%20La%20Urbina%2C%20Calle%203-A%2C%20Caracas%201073%2C%20Distrito%20Capital!5e0!3m2!1ses-419!2sve!4v1617923063782!5m2!1ses-419!2sve" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"></iframe>


						</div>

					</div>

					<div class="row">

						<div class="col-md-8">

							<h2 class="light bordered">Contacto <span>Directo</span></h2>


							<!-- Contact Form
							============================================= -->
							<div class="contact-form clearfix">
								<div id="message-contact" class="success" style="display:none;">Thank you! we'll contact you shortly.</div>
								<form action="/contacto" method="POST" id="contact_form" onSubmit="return true;">
									@csrf

									<!-- <input type="text" name="fname" id="fname" placeholder="First Name" onKeyPress="removeChecks();"> -->
									<input id="name" name="name" placeholder="First Name" class="" type="text" value="{{old('name')}}" maxlength="50">
									{!! $errors->first('name', '<small class="alert-danger">:message</small><br>') !!}
									<!-- <input type="text" name="email_address" id="email_address" placeholder="Email Address" onKeyPress="removeChecks();"> -->
									<input id="email" name="email" placeholder="Email Address" class=" email" type="email"  value="{{old('email')}}">
									{!! $errors->first('email', '<small class="alert-danger">:message</small><br>') !!}
									<input type="text" name="subject" id="subject" placeholder="Subject">
									{!! $errors->first('subject', '<small class="alert-danger">:message</small><br>') !!}
									<input type="number" name="phone" id="phone" placeholder="Teléfono">
									{!! $errors->first('phone', '<small class="alert-danger">:message</small><br>') !!}
									<!-- <textarea placeholder="Message" name="msg" id="msg"></textarea> -->
									<textarea placeholder="Message" id="message" name="message" class="" rows="5">{{old('message')}}</textarea>
									{!! $errors->first('message', '<small class="alert-danger">:message</small><br>') !!}
									<input type="submit" class="btn btn-default" value="Submit" onClick="validateContact();">
									<!-- <button type="submit" class="btn btn-default" >Enviar</button> -->
								</form>
							</div>

						</div>

						<div class="col-md-4">

							<h2 class="light bordered">INFORMACIÓN DE<span> CONTACTO</span></h2>


							<!-- Get in Touch Widget
							============================================= -->
							<div class="get-in-touch-widget">

								<ul class="list-unstyled">
									<li><i class="fa fa-phone"></i>+58 424 2533899</li>
									<li><i class="fa fa-envelope"></i>contacto@ukmedik.com</li>
									<li><i class="fa fa-globe"></i><a href="https://ukmedik.com">www.ukmedik.com</a></li>
									<li><i class="fa fa-clock-o"></i>Lunes - Sabado 9:00am - 5:00 pm</li>
									<li><i class="fa fa-map-marker"></i>La Urbina, calle 3a Torre Centro Profesional Piso 2, Oficina 2-E, Caracas, Venezuela</li>
								</ul>

							</div>
							<!-- Social
							============================================= -->
							<ul class="social-rounded">
								<li><a href="https://www.facebook.com/ukmedi"><img src="images/fb.webp" alt="" title="Facebook Uk Medi" width="30"></a></li>
								<li><a href="https://www.instagram.com/ukmedi"><img src="images/iconoig.webp" alt="" title="Instagram Uk Medi" width="30"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div><!--end sub-page-content-->




		<!-- Footer
		============================================= -->
		@include('ukmedik_web.footer')

    </div><!--end #wrapper-->
  </body>
</html>