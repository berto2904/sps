</head>
<body>

<div class="gtco-loader"></div>
<div id="page">
	<div class="page-inner">
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-9 text-left menu-1">
						<ul>
							<li class="has-dropdown">
								<a href="#">Entrevistas</a>
								<ul class="dropdown">
									<li><a href="crear_postulante.php">Crear Entrevista</a></a></li>
									<li><a href="consultar_entrevistas.php">Consultar Entrevistas</a></li>
								</ul>
							</li>
							<li class="has-dropdown">
								<a href="#">Informes</a>
								<ul class="dropdown">
									<li><a href="#">Socio-ambiental</a></li>
									<li><a href="#">Informe Confidencial</a></li>
									<li><a href="consultar_entrevistas_refLaboral.php">Referencias Laborales</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="col-sm-3 col-xs-6" style=" display: flex; flex-direction: row; justify-content: flex-end; ">
						<div id="gtco-logo">
							<a>
								<img src="../resources/images/sps.jpg" alt="" style=" width: 3em;">
							</a>
						</div>
						<div id="usuarioSesion" style="color: #b5ab89;display: flex;flex-direction: column;justify-content: flex-end;height: 3em;">
							<div id="usuario" style="display: flex;justify-content: center;">
								<?php echo $_SESSION['usuarioNombre'].' '.$_SESSION['usuarioApellido']?>
							</div>
							<div style="display: flex;justify-content: flex-end;">
								<a href="logout.php" style=" ">Cerrar Sesion</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
