<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>El tigre / Conocenos </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>¿NECESITAS AYUDA? ¡Contáctanos!</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i></li>
						<li class="number-phone mt-3">728-113-8563</li>
					</ul>
				</div>

				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="{{route('index')}}">
							"El Tigre" </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
                            <button class="top_googles_cart" type="submit" name="submit" value="">
                        @if (count(Cart::getContent()))
                        <a href="{{route('cart.checkout')}}"> VER CARRITO <span class="badge badge-danger"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                          </svg>{{count(Cart::getContent())}}</span></a>
                        @endif
                            </button>
                            </li>
                        </ul>
				</div>
<!----------------------------------------------------------------------- inicio de sesion -------------------------------------------------------->

    <!---->
				<!---->
				<div class="overlay-login text-left">
					<button type="button" class="overlay-close1">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<div class="wrap">
						<h5 class="text-center mb-4">'' Bienvenido ''</h5>

						<div class="login p-5 bg-dark mx-auto mw-100">
							<center><label class="mb-2">{{session('session_name')}} {{session('session_app')}} </label>
							</center>
							</div>
						</div>
						<div class="carousel-caption text-center">
							<a href="{{route('logout')}}" class="btn btn-sm animated-button gibson-three mt-4">Cerrar Sesión</a>


						</div>
				<!---->
            <!---->
        </div>
    </div>
    <!---->	</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">

					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="#" method="post" class="d-flex">
						<input class="form-control" type="search" placeholder="Search here..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">

					</span>
				</button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="{{route('index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                              </svg>
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="{{route('aboutusuario')}}">Conócenos</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link" href="{{route('shop')}}">Productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('contactusuario')}}">Contacto</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="welcome">Inicio</a>
							<i>|</i>
						</li>
						<li>Conocenos</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">

			<div class="inner-sec-shop px-lg-4 px-3">
				<div class="about-content py-lg-5 py-3">
					<div class="row">

						<div class="col-lg-6 p-0">
							<img src="images/facha.jpeg" alt="Goggles" class="img-fluid">
						</div>
						<div class="col-lg-6 about-info">
							<h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">Acerca de nosotros...</h3>
							<p class="my-xl-4 my-lg-3 my-md-4 my-3">Fábrica de lavaderos “el tigre” es un negocio familiar creado en el año 2015
                                ubicado en el municipio de Lerma .
                                El negocio empezó vendiendo lavaderos fabricados artesanalmente, con el
                                paso del tiempo y el publicitar los productos a localidades cercanas se fueron
                                implementando más artículos al negocio, como son las cruces y libros con
                                grabados para difuntos. Actualmente el negocio ya es conocido en sus
                                alrededores.
							</p>

							<a href="shop" class="btn btn-sm animated-button gibson-three mt-4">Comprar ahora</a>

						</div>
					</div>
				</div>
				<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Dueños</h3>
				<div class="partners-info">
					<div class="row mt-lg-5 mt-3">
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">

								</div>
								<div class="team-info">
									<h4></h4>
									<span> </span>
									<ul class="d-flex justify-content-center py-3 social-icons">

									</ul>
								</div>
							</div>
						</div>
					 <div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="images/jefe1.jpeg" alt="">
								</div>
								<div class="team-info">
									<h4>Dueño 1 </h4>
									<span>Description </span>
									<ul class="d-flex justify-content-center py-3 social-icons">

									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="images/jefe2.jpeg" alt="">
								</div>
								<div class="team-info">
									<h4>jefe 2</h4>
									<span>Description </span>
									<ul class="d-flex justify-content-center py-3 social-icons">

									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">

								</div>
								<div class="team-info">
									<h4></h4>
									<span> </span>
									<ul class="d-flex justify-content-center py-3 social-icons">

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /grids
                    	<!-- /clients-sec -->
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>PRODUCTO GENUINO</h3>
								<p>Lavaderos artesanales. </p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>COMPRAS SEGURAS</h3>
								<p>Pagos con tarjeta.</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>COMPRAS RAPIDAS</h3>
								<p>Compra en una sola exibición.</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>ENVIOS RAPIDOS</h3>
								<p>Envios rapidos y seguros.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->

				<!--
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">

							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>
							<div class="simply-countdown-custom" id="simply-countdown-custom"></div>

						</div>
					</div>
				</div>
				//meddle-->





				<!-- //clients-sec -->

			</div>
		</div>
	</section>


	<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Acerca de nosotros</h3>
					</div>
					<div class="footer-text">
						<p>Fábrica de lavaderos “El Tigre” es un negocio familiar creado en el año 2015 ubicado en el municipio de Lerma.
                            Negocio deidaco a la frabricacion y venta de lavaderos artesanales.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-linkedin-in"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-vk"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Contactanos</h3>
					</div>
					<div class="contact-info">
						<h4>Ubicabión :</h4>
						<p>Lerma, Calle Mariano Matamoros #14.</p>
						<div class="phone">
							<h4>Contacto :</h4>
							<p>Télefono : 728-113-8563</p>
							<p>Email :
								<a href="mailto:fabricadelavaderos.eltigre@gmail.com">fabricadelavaderos.eltigre@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Enlaces rápidos</h3>
					</div>
					<ul class="links">
						<li>
							<a href="index">Inicio</a>
						</li>
						<li>
							<a href="aboutusuario">Conocenos</a>
						</li>
                        <li>
							<a href="shop">Productos</a>
						</li>
						<li>
							<a href="contactusuario">Contacto</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Novedades</h3>
					</div>
					<div class="footer-text">
						<p>ENcentra nuevos productos en nuestro sitio web.</p>

						</form>
					</div>
				</div>
			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2022 - EL TIGRE. Todos los derechos reservados | Diseño por
					<a href="#"> Areli, Isaac, Alma Dania. </a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--jQuery-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie-search.js"></script>
	<script src="js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- Count-down -->
	<script src="js/simplyCountdown.js"></script>
	<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
	<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear'
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


	<script src="js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>
