

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Aviato E-Commerce Template">

  <title>Berriel Apartamentos</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon"  href="images/log.png" />
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Ionic Icon Css -->
  <link rel="stylesheet" href="plugins/Ionicons/css/ionicons.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <script src="{{url('/js/script.js')}}"> </script>

  <!-- 
    Essential Scripts
    =====================================-->

	
    <!-- Main jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- filter -->
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/SyoTimer/jquery.syotimer.min.js"></script>

    <!-- Form Validator -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>-->

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="plugins/google-map/map.js"></script>
	<script src="js/script.js"></script>

</head>

<body id="body">

<!-- Header Start -->
<header class="navigation">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- header Nav Start -->
				<nav class="navbar">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="{{url('home')}}">
							<span><img src="images/log.png"  id="logo" alt="logo" /> </span>  Casa Berriel 
	
								<!--<img src="images/berriel.png" id="logo" alt="Logo">-->
							</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="{{url('home')}}">Inicio</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apartamentos <span class="ion-ios-arrow-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="{{url('apartamento1')}}">Berriel I</a></li>
										<li><a href="{{url('apartamento2')}}">Berriel II</a></li>
									</ul>
								</li>
								<li><a href="{{url('entorno')}}">El Entorno</a></li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">registro <span class="ion-ios-arrow-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="{{url('registro')}}">Registrarse</a></li>
										<li><a href="{{url('acceso')}}">Acceso</a></li>
										<li><a href="{{url('errors.404')}}">404 Page</a></li>
										<li><a href="{{url('faq')}}">FAQ</a></li>
										<li><a href="pricing.html">Pricing Table</a></li>
									</ul>
								</li>
								<li><a href="{{url('contacto')}}">Contacto</a></li>
							</ul>
							</div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid -->
						</nav>
					</div>
                </div>
			</div>
			</header><!-- header close -->



<!-- Wrapper Start -->

@yield('content')


<!-- Content Start -->


<!-- footer Start -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-manu">
					<ul>
						<li><a href="{{url('home')}}">Home</a></li>
						<li><a href="{{url('contacto')}}">Contacto</a></li>
						<li><a href="{{url('errors.404')}}">Newsletter</a></li>
					
					</ul>
				</div>
				<p class="copyright">Copyright 2020 &copy; Design & Developed by <a href="https://github.com/Nachofv">nachoFvillar</a>. All rights reserved.
					<br>
				</p>
			</div>
		</div>
	</div>
</footer>

    




    </body>

    </html>
   
