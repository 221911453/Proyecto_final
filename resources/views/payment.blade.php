<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>El tigre / Pago</title>
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
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
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
                    <a class="navbar-brand" href="{{route('about')}}">
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
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="top_googles_cart" type="submit" name="submit" value="">
                                Carrito
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
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
            </div>
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
                        <a class="nav-link" href="{{route('checkout')}}"><- Carrito</a>
                    </li>

                </ul>

            </div>
			</nav>
		</header>
    </div>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index">Inicio</a>
							<i>|</i>
						</li>
						<li>Pago </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--// header_top -->
		<!--Payment-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">¡Realiza tu Pago aqui! </h3>
					<!--/tabs-->
					<div class="responsive_tabs">
						<div id="horizontalTab">
							<ul class="resp-tabs-list">

								<li>Cuenta de Paypal</li>
							</ul>
							<div class="resp-tabs-container">
								<!--/tab_one-->


								<div class="tab4">
									<div class="pay_info row">
										<div class="col-md-6 tab-grid">
											<img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
											<p>Importante: será redirigido al sitio web de PayPal para completar su pago de forma segura.</p>
											<a class="btn btn-primary">Checkout via Paypal</a>
										</div>
										<div class="col-md-6">
										<form action="#" method="post" class="cc-form">
												<div class="clearfix">
													<div class="form-group form-group-cc-number">
														<label>Número de tarjeta</label>
														<input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text">
														<span class="cc-card-icon"></span>
													</div>
													<div class="form-group form-group-cc-cvc">
														<label>CVV</label>
														<input class="form-control" placeholder="xxxx" type="text">
													</div>
												</div>
												<div class="clearfix">
													<div class="form-group form-group-cc-name">
														<label>Nombre del titular de la tarjeta</label>
														<input class="form-control" type="text">
													</div>
													<div class="form-group form-group-cc-date">
														<label>Válido hasta</label>
														<input class="form-control" placeholder="mm/yy" type="text">
													</div>
												</div>
												<div class="checkbox checkbox-small mt-4">
													<label>
														<input class="i-check" type="checkbox" checked=""> Agregar a Mi Tarjeta</label>
												</div>
												<input class="btn btn-primary submit mt-4" type="submit" value="Proceder al pago">
											</form>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--//tabs-->
				</div>

			</div>
			<!-- //payment -->
		</section>
		<!--//Payment--><!--footer -->
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
                        <a href="checkout">Carrito</a>
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
		<!-- easy-responsive-tabs -->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>

		<!-- credit-card -->
		<script type="text/javascript" src="js/creditly.js"></script>
		<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

		<script type="text/javascript">
			$(function () {
				var creditly = Creditly.initialize(
					'.creditly-wrapper .expiration-month-and-year',
					'.creditly-wrapper .credit-card-number',
					'.creditly-wrapper .security-code',
					'.creditly-wrapper .card-type');

				$(".creditly-card-form .submit").click(function (e) {
					e.preventDefault();
					var output = creditly.validate();
					if (output) {
						// Your validated credit card output
						console.log(output);
					}
				});
			});
		</script>
		<!-- //credit-card -->
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


		<!-- //smooth-scrolling-of-move-up -->
		<script src="js/bootstrap.js"></script>
		<!-- js file -->
</body>

</html>
