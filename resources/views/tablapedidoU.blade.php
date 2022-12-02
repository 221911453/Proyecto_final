<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>El tigre / Carrito</title>
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
                    <li class="nav-item active">
                        <a class="nav-link ml-lg-0" href="{{route('index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                          </svg>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{route('shop')}}">Productos</a>
                    </li>

                </ul>

            </div>
			</nav>
		</header>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index">Inicio</a>
							<i>|</i>
						</li>
						<li>Carrito </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!--checkout-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">



				<h3 class="tittle-w3layouts my-lg-4 mt-3">Mis Compras </h3>
				<div class="checkout-right">




                    <h4>Historial de compras

					</h4>
					<table class="timetable_sub">
						<thead>

							<tr>

								<th>No. Pedido</th>
								<th>nombre</th>
								<th>Producto</th>
								<th>Cantidad</th>
								<th>Total</th>
                            	<th>Dia de registrio</th>
                            	<th>Detalle</th>
							</tr>
						</thead>
						@foreach($pedidos as $item)
						<tbody>


							<tr>

								<td >{{$item->id }}</td>
								
								<td class="invert">{{$item->usuario}}</td>
								<td class="invert">{{$item->producto}}</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value">
												<span>{{$item->cantidad}}</span>
											</div>
									</div>
								</td>
								<td class="invert">$ {{$item->total}}</td>
								<td class="invert">{{$item->created_at}}</td>
								<td>
									<form class="invert">
										<a href="{{ route('detallepedidoU',  ['id'=>$item->id])}}"><center><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
											<path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
											<path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
											<path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
										  </svg></center></a>
										</form>
								  </td>
							</tr>

						</tbody>
						@endforeach
						
					</table>
                    
	</section>
	<!--//checkout-->
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
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<!--close-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!--//close-->

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


	<script src="js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>
