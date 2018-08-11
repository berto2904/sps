<!DOCTYPE html>
<html lang="es">
<head>
	<title>SPS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="librerias/Login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="librerias/Login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/Login/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/Login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="librerias/Login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/Login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/Login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/Login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="librerias/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="librerias/Login/css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('librerias/Login/images/bg-03.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="controladores/ingresoUsuarioController.php" method="post">
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
						<i class="zmdi zmdi-landscap"> <img src="resources/images/sps.jpg" alt=""> </i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						<!-- SPS -->
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Ingresar nombre de usuario">
						<input class="input100" type="text" name="user" placeholder="Nombre de Usuario">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingresar Contraseña">
						<input class="input100" type="password" name="pass" placeholder="Contraseña" maxlength="70">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Iniciar Sesion
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<script src="librerias/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="librerias/Login/vendor/animsition/js/animsition.min.js"></script>
	<script src="librerias/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="librerias/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="librerias/Login/vendor/select2/select2.min.js"></script>
	<script src="librerias/Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="librerias/Login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="librerias/Login/vendor/countdowntime/countdowntime.js"></script>
	<script src="librerias/Login/js/main.js"></script>

</body>
</html>
