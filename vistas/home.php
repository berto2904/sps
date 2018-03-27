<?php
require ('../clases/UsuarioClass.php');
// require ('../clases/ConnQuery.php');

session_start();

if (isset($_SESSION["usuario"])) {
  $idUsuario = $_SESSION["usuario"];
}
else {
  session_destroy();
  header("location: ../index.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SPS Entrevistas</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/themify-icons.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>

	<div class="gtco-loader"></div>

  <div id="page">
  	<div class="page-inner">
    	<nav class="gtco-nav" role="navigation">
    		<div class="gtco-container">
    			<div class="row">
    				<div class="col-sm-4 col-xs-12">
    					<div id="gtco-logo"><a href="home.php">SPS <em>.</em></a></div>
    				</div>
    				<div class="col-xs-8 text-right menu-1">
    					<ul>
    						<li class="has-dropdown">
    							<a href="#">Entrevistas</a>
    							<ul class="dropdown">
    								<li><a href="crear_postulante.php">Crear Postulante</a></a></li>
    								<li><a href="#">Consultar Postulantes</a></li>
    							</ul>
    						</li>
    						<li class="has-dropdown">
    							<a href="#">Informes</a>
    							<ul class="dropdown">
    								<li><a href="#">Socio-ambiental</a></li>
    								<li><a href="#">Informe Confidencial</a></li>
    								<li><a href="#">Referencias Laborales</a></li>
    							</ul>
    						</li>
    					</ul>
    				</div>
    			</div>

    		</div>
    	</nav>

    	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url('../librerias/Login/images/bg-01.jpg');">
    		<div class="overlay"></div>
    		<div class="gtco-container">
    			<div class="row">
    				<div class="col-md-12 col-md-offset-0 text-left">
              <div class="row">
              </div>
  				  </div>
    			</div>
    	  </div>
      </header>

    </div>
  </div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>

	</body>
</html>
