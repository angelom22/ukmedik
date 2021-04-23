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



    <div id="content-index">


		<!-- Main Banner
		============================================= -->
		<section id="slider" class="tp-banner-container index-rev-slider clearfix">
			<div class="tp-banner" >
				<ul>
					<!-- Fade
					============================================= -->
					<li data-transition="fade" data-slotamount="10" data-thumb="">
						<img src="{{asset('images/bg1.webp')}}" alt="image" />
						<div class="caption sft" data-x="0" data-y="180" data-speed="3000" data-start="1300" data-easing="easeOutBack">
							<img src="{{asset('images/jeringa.webp')}}" alt="">
						</div>
						<div class="caption lfr" data-x="770" data-y="100" data-speed="1500" data-start="900" data-easing="easeOutExpo">
							<img src="images/arthromic50mg.webp" alt=""/>
						</div>
						<div class="caption sft big_white" data-x="0" data-y="265" data-speed="1000" data-start="1700" data-easing="easeOutExpo">
							<strong>Arthromic</strong>
						</div>
						<div class="caption sfr medium_grey" data-x="0" data-y="340" data-speed="1000" data-start="2500" data-easing="easeOutExpo">
							Mejore el estado funcional de su rodilla,<br>el Arthromic restaura la movilidad de la articulación.</div>
						<div class="caption sfb" data-x="0" data-y="410" data-speed="2500" data-start="2500" data-easing="easeOutExpo">
							<a href="https://wa.me/+584242533899" class="btn btn-rounded btn-bordered">Adquirir producto</a>
						</div>
					</li>
					<!-- Slide Right
					============================================= -->
					<li data-transition="slidebottom" data-slotamount="20" data-thumb="">
						<img src="images/bg2.webp" alt="image" />
						<div class="caption sft" data-x="0" data-y="180" data-speed="3000" data-start="1300" data-easing="easeOutBack">
							<img src="images/biotechnology.webp" alt="">
						</div>
						<div class="caption sft big_white" data-x="0" data-y="265" data-speed="1000" data-start="1700" data-easing="easeOutExpo">
							<strong>Innovación en la Biotecnología</strong>
						</div>
						<div class="caption sfr medium_grey" data-x="0" data-y="400" data-speed="1000" data-start="2500" data-easing="easeOutExpo">
							Ukmedi con mas de 20 años de experiencia, seguimos innovando en la biotecnología</div>
						<div class="caption sfb" data-x="0" data-y="420" data-speed="2500" data-start="2500" data-easing="easeOutExpo">
							<a href="shop.php" class="btn btn-rounded btn-bordered">Visita nuestra tienda en línea</a>
						</div>
					</li>
					<!-- Slide Up
					============================================= -->
					<li data-transition="slideup" data-slotamount="15" data-thumb="">
						<img src="images/bg3.webp" alt="image" />
						<div class="caption sfl" data-x="0" data-y="180" data-speed="1500" data-start="1300" data-easing="easeOutBack"><img src="images/running.webp" alt=""></div>
						<div class="caption sft big_white" data-x="0" data-y="265" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>MEDICINA DEPORTIVA</strong></div>
						<div class="caption sfr medium_grey" data-x="0" data-y="340" data-speed="1500" data-start="2500" data-easing="easeOutExpo">Lo ayudamos a recuperar la movilidad de la articulación </div>
						<div class="caption sfb" data-x="0" data-y="410" data-speed="300" data-start="2500" data-easing="easeOutExpo"><a href="shop.php" class="btn btn-rounded btn-bordered">Visita nuestra tienda en línea</a></div>
					</li>
				</ul>
			</div>
		</section>






		<!-- PRIMERA SECCION
		============================================= -->
		<div class="row text-center no-margin">
			<div class="col-md-4 bg-default">

				<div class="home-box">
					<span class="glyphicon glyphicon-star"></span>
					<h3>LIDERES EN EL MERCADO</h3>
					<p>Ukmedi con mas de 20 años de experiencia, seguimos innovando en la biotecnología, siempre dedicados al cuidado de nuestros pacientes, contamos con excelentes productos y servicios.</p>
					<a href="#." class="btn-rounded btn-bordered">Acerca de UK MEDI</a>
				</div>

			</div>

			<div class="col-md-4">
				<div class="home-box opening-hours clearfix">

					<span class="glyphicon glyphicon-time"></span>
					<h3>HORARIO DE ATENCIÓN</h3>
					<p>Estamos para servirle ante cualquier duda de nuestros medicamentos.</p>
					<ul class="list-unstyled">
						<li class="clearfix">
						<span>
							Lunes - Viernes
						</span>
						<div class="value">
							9:00am - 5:00pm
						</div>
						</li>
						<li class="clearfix">
						<span>
							Sábado
						</span>
						<div class="value">
							9:00am - 12:00pm
						</div>
						</li>
						<li class="clearfix">
						<span>
							Domingo
						</span>
						<div class="value">
							9:00am - 12:00pm
						</div>
						</li>
					</ul>

				</div>
			</div>

			<div class="col-md-4 bg-default">
				<div class="home-box">
					<span class="glyphicon glyphicon-plus"></span>
					<h3>¡BUEN SERVICIO!</h3>
					<p>Siempre estamos dispuesto de llevarles la mejor solución en medicina, de alta tecnología y eficacia.</p>
					<a href="#." class="btn-rounded btn-bordered">Visita nuestra sección de Biotecnología</a>
				</div>
			</div>
		</div>


		<!-- SEGUNDA SECCION
		============================================= -->
		<section class="appointment-sec text-center">
			<div class="container">
				<h1>UK MEDI - ATENCIÓN INMEDIATA</h1>
				<p class="lead">Contácténos via email para recibir información detallada ante su solicitud o por el icono de Whatsapp con atención de inmediata.</p>
				@if (session()->has('flash'))
                <div class="alert alert-success">{{session('flash')}}</div>
            	@endif
				<div class="row">
					<div class="col-md-6">
						<figure><img src="images/uk.webp" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
					</div>
					<div class="col-md-6">
						<div class="appointment-form clearfix">
						   <div class="success" id="message-app" style="display:none;"></div>
							<form name="appoint_form" id="appoint_form" method="POST" action="/contacto" onSubmit="return true">
						   	@csrf
								<input type="text" name="name" id="name" placeholder="Nombre y Apellido" onKeyPress="removeChecks();"  value="{{old('name')}}">
								{!! $errors->first('name', '<small class="alert-danger">:message</small><br>') !!}
								<input type="email" name="email" id="email" placeholder="Email" onKeyPress="removeChecks();" value="{{old('email')}}">
								{!! $errors->first('email', '<small class="alert-danger">:message</small><br>') !!}
								<input type="text" name="subject" id="subject" placeholder="Subject" value="{{old('subject')}}">
								{!! $errors->first('subject', '<small class="alert-danger">:message</small><br>') !!}
								<input type="number" name="phone" id="phone" placeholder="Teléfono" value="{{old('phone')}}">
								{!! $errors->first('phone', '<small class="alert-danger">:message</small><br>') !!}
								<textarea placeholder="Message" name="message" id="message">{{old('message')}}</textarea>
								{!! $errors->first('message', '<small class="alert-danger">:message</small><br>') !!}
								<input type="submit" value="submit" class="btn btn-default btn-rounded" onClick="validateAppoint();">
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>



		<!-- TERCERA SECCION
		============================================= -->
		<section class="about-sec text-center" style="background-image: url(images/terceraseccion.webp); background-repeat: no-repeat; background-attachment:fixed; height: auto;">
			<div class="container">
				<h1>UK MEDI</h1>
				<p class="lead">Siempre estamos avanzando en materia de medicina y biotecnología.</p>

				<div class="row text-center" id="counters">
					<div class="col-md-3 col-xs-6">
						<div class="counter">
						   <span class="quantity-counter1 highlight">0</span>
						   <h6 class="counter-details">PRODUCTOS</h6>
						 </div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="counter">
						   <span class="quantity-counter2 highlight">0</span>
						   <h6 class="counter-details">ALOINJERTOS</h6>
						 </div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="counter">
						   <span class="quantity-counter3 highlight">0</span>
						   <h6 class="counter-details">OPERACIONES</h6>
						 </div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="counter">
						   <span class="quantity-counter4 highlight">0</span>
						   <h6 class="counter-details">AñOS EXPERIENCIA</h6>
						 </div>
					</div>
				</div>
			</div>
		</section>



		<!-- CUARTA SECCION
		============================================= -->

			<section class="services-sec container">

				<div class="service-box one">
					<span class="icon img-circle"><img src="images/medicinaa.webp"></span>
					<h4><a href="#.">MEDICINA</a></h4>
					<p>Servicios de medicina deportiva y estética.</p>
				</div>

				<div class="service-box two">
					<span class="icon img-circle"><img src="images/innovation.webp"></span>
					<h4><a href="#.">INNOVACIÓN</a></h4>
					<p>En UKMEDI siempre estamos innovando en nuevas tecnologías.</p>
				</div>

				<div class="service-box three">
					<span class="icon img-circle"><img src="images/biotec.webp"></span>
					<h4><a href="#.">BIOTECNOLOGÍA</a></h4>
					<p>El progreso científico en biotecnología celular y molecular ha conducido al desarrollo de terapias avanzadas.</p>
				</div>

				<div class="service-box four">
					<span class="icon img-circle"><img src="images/device.webp"></span>
					<h4><a href="#.">DISPOSITIVO</a></h4>
					<p>Contamos con dispositivos de alta tecnología de fijación LCA.</p>
				</div>

				<div class="service-box four">
					<span class="icon img-circle"><img src="images/experiencia.webp"></span>
					<h4><a href="#.">EXPERIENCIA</a></h4>
					<p>Siempre estamos llevando nuevos avances de la medicina, con más de 20 años de trayectoria.</p>
				</div>

				<div class="service-box four">
					<span class="icon img-circle"><img src="images/aloinjertos.webp"></span>
					<h4><a href="#.">ALOINJERTOS</a></h4>
					<p>Aloinjertos en medicina deportiva, neuro espinal, oral y maxilofacial, ortopedia general y osteoarticular.</p>
				</div>


			</section>



		<!-- QUINTA SECCION
		============================================= -->
		<section class="about-sec text-center" style="background-image: url(images/terceraseccion.webp); background-repeat: no-repeat; background-attachment:fixed; height: auto;">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<img src="images/ig.webp" class="app-img" alt="" title="">
					</div>
					<div class="col-md-7">
						<div class="medicom-app-content">
							<h1>TODO LO QUE NECESITES EN PRODUCTOS MEDICO EN UN SOLO LUGAR</h1>
							<p class="lead">Siguenos en nuestras redes sociales.
							<span>Follow</span>
							</p>
							<ul class="list-unstyled app-buttons text-center">
								<li><a href="https://www.facebook.com/ukmedi"><img src="images/fb.webp" alt="" title="Facebook Uk Medi"></a></li>
								<li><a href="https://www.instagram.com/ukmedi"><img src="images/iconoig.webp" alt="" title="Instagram Uk Medi"></a></li>
							</ul>
							</div>
					</div>
				</div>
			</div>
		</section>





			<!-- SEXTA SECCION
			============================================= -->
			<div class="container">
				<div class="row">
						<div class="col-md-7">

							<h2 class="light bordered">UK MEDI <span> - OPERACIONES</span></h2>

							<div id="our-clinic" class="slider-mini owl-carousel">

								<div class="item">
									<img src="images/op1.webp" alt="" title="">
									<h4>@UKMEDI</h4>
								</div>

								<div class="item">
									<img src="images/op2.webp" alt="" title="">
									<h4>@UKMEDI</h4>
								</div>

								<div class="item">
									<img src="images/op3.webp" alt="" title="">
									<h4>@UKMEDI</h4>
								</div>

								<div class="item">
									<img src="images/op4.webp" alt="" title="">
									<h4>@UKMEDI</h4>
								</div>

							</div>

						</div>

					<div class="col-md-5">

						<h2 class="light bordered">INFORMACIÓN DEL <span>ALOINJERTO</span></h2>

						<div class="panel-group accordian-style2" id="accordion2">

						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title active">
								<a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								  <i class="fa fa-medkit"></i> ¿Qué es un aloinjerto?<i class="fa pull-right fa-angle-up"></i>
								</a>
							  </h4>
							</div>

							<div id="collapseOne" class="panel-collapse collapse in">
							  <div class="panel-body">
									Un aloinjerto es tejido que se trasplanta de una persona a otra. la asignación de prefijo alo proviene de una palabra griega que significa "otro". (Si el tejido se traslada de un lugar a otro en su propio cuerpo, se le llama autoinjerto). Cerca de 1.500.000 aloinjertos se trasplantan cada año.
							  </div>
							</div>
						  </div>

						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								  <i class="fa fa-heart"></i>¿Para qué se utilizan los aloinjertos?<i class="fa fa-angle-down pull-right"></i>
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
							  <div class="panel-body">
							   Los aloinjertos se utilizan en una variedad de procedimientos que pueden salvar vidas, reparar extremidades, aliviar el dolor o mejorar la calidad de vida de un paciente.
							  </div>
							</div>
						  </div>

						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								  <i class="fa fa-eye"></i> ¿Por qué necesito usar tejido de otra persona?<i class="fa fa-angle-down pull-right"></i>
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
							  <div class="panel-body">
								A veces, no hay suficiente tejido propio para utilizar en una operación, los materiales sintéticos (artificiales) tienen propiedades distintas a los tejidos humanos y pueden no ser adecuados para algunos pacientes o propósitos.
							  </div>
							</div>
						  </div>

						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
								  <i class="fa fa-mobile"></i>Conversar con su médico<i class="fa fa-angle-down pull-right"></i>
								</a>
							  </h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse">
							  <div class="panel-body">
								Antes de que se le programe un transplante de aloinjerto, usted se reunirá con su médico para hablar de ello. Hablar con su médico es la parte más importante del aprendizaje sobre el trasplante de aloinjerto. Si usted tiene preguntas, asegúrase de formularlas.
							  </div>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>





		<!-- SEPTIMA SECCION
		============================================= -->
		<section class="appointment-sec text-center">
			<div class="container">
				<h1>UK MEDI - POST RECIENTE EN INSTAGRAM</h1>
				<div class="row">
				        <div class="col-md-4 col-lg-4">
				            <iframe src="https://instagram.com/p/CMk2YedsXbP/embed/captioned" width="320" height="425" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
				        </div>

				       	<div class="col-md-4 col-lg-4">
				            <iframe src="https://instagram.com/p/CMuZZuYMMpY/embed/captioned" width="320" height="425" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
				        </div>

				       	<div class="col-md-4 col-lg-4">
				            <iframe src="https://instagram.com/p/CMuZel9splk/embed/captioned" width="320" height="425" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
				        </div>
		        </div>
			</div>
		</section>


	@include('ukmedik_web.footer') 


    </div><!--end #content-index-->
    </div><!--end #wrapper-->
  </body>
</html>