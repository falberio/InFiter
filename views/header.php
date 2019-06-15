<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://kit.fontawesome.com/d3d4fcb8d1.js"></script>
	<link rel="stylesheet" href="<?php echo RUTA; ?>/librerias/alertify/css/alertify.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/librerias/alertify/css/themes/default.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
	<title>infiter - <?php echo $titulo_pagina ?></title>
</head>
<body id="body">
<header>
	<div class="logo izquierda">
		<p><a id="logo-mega" href="<?php echo RUTA;  ?>"><span>In<span id="logo-oculto">side </span>fi</span>ter</a></p>
	</div>
	
	<div class="derecha">
		<!-- <form name="busqueda" class="buscar" action="<?php echo RUTA;  ?>/buscar.php" method="get">
			<input type="text" name="busqueda" placeholder="Buscar">
			<button type="submit" class="icono fa fa-search"></button>
		</form> -->

		<nav class="menu">
			<ul>
				<li id="boton-busqueda"><i class="fas fa-search"></i></li>
				<li id="boton-faq"><a href="<?php echo RUTA . '/faq.php';  ?>">FAQ</a></li>
				<li id="boton-instructivos"><a href="<?php echo RUTA . '/instructivos.php';  ?>">Instructivos</a></li>
				<li id="boton-plataformas"><a href="<?php echo RUTA . '/plataformas.php';  ?>">Plataformas</a></li>
				<li id="boton-login">Login</li>
				<li id="boton-estilos-mega"><i class="fas fa-toggle-on"></i></i></li>
			</ul>
		</nav>
	</div>



</header>

	<div class="subheader" id="subheader-plataformas">
	<!-- <div class="contenedor contenedor-desplegar" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		<i class="desplegar fas fa-chevron-down"></i>
	</div> -->


		<div class="contenedor">
			<div class="categorias">
				<div class="categoria">
					<a href="<?php echo RUTA .'/plataformas.php' . '#generales';  ?>">
						<i class="fas fa-address-card"></i>
						<p>Generales</p>
					</a>
				</div>

				<div class="categoria">
					<a href="<?php echo RUTA .'/plataformas.php' . '#mp';  ?>">
						<i class="fas fa-money-check-alt"></i>
						<p>Mercado Pago</p>
					</a>
				</div>

				<div class="categoria">
					<a href="<?php echo RUTA .'/plataformas.php' . '#telecentro';  ?>">
						<i class="fas fa-ticket-alt"></i>
						<p>Telecentro</p>
					</a>
				</div>

				<div class="categoria">
					<a href="<?php echo RUTA .'/plataformas.php' . '#casillas';  ?>">
						<i class="fas fa-hdd"></i>
						<p>Casillas</p>
					</a>
				</div>

				<div class="categoria">
					<a href="<?php echo RUTA .'/plataformas.php' . '#gympass';  ?>">
						<i class="fas fa-desktop"></i>
						<p>Gym Pass</p>
					</a>
				</div>

				<div class="categoria">
					<a href="<?php echo RUTA .'/plataformas.php' . '#tsube';  ?>">
						<i class="fas fa-fingerprint"></i>
						<p>Terminales SUBE</p>
					</a>
				</div>

			</div>
		</div>
	</div>

	<div class="subheader" id="subheader-busqueda">

		<div class="contenedor contenedor-top collapse" id="collapseExample">
			<div class="pregunta">
				<h2>Hola,<br>estamos para ayudarte.</h2>
			</div>

			<div class="busqueda">
				<form name="busqueda" class="buscar" action="<?php echo RUTA;  ?>/buscar.php" method="get">
					<input type="text" name="busqueda" placeholder="">
					<button type="submit" class="icono fas fa-search"></button>
				</form>
			</div>

		</div>
	</div>

	<div class="subheader" id="subheader-instructivos">

		<div class="contenedor">
			<div class="categorias">
				<div class="categoria">
					<a href="#generales">
						<i class="fas fa-address-card"></i>
						<p>SGC</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#mp">
						<i class="fas fa-money-check-alt"></i>
						<p>Comerciales</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#telecentro">
						<i class="fas fa-ticket-alt"></i>
						<p>Controlador Fiscal</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#casillas">
						<i class="fas fa-hdd"></i>
						<p>Autogestión</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#gympass">
						<i class="fas fa-desktop"></i>
						<p>Control de acceso</p>
					</a>
				</div>



			</div>
		</div>
	</div>


		<div class="subheader" id="subheader-faq">
	<!-- <div class="contenedor contenedor-desplegar" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		<i class="desplegar fas fa-chevron-down"></i>
	</div> -->


		<div class="contenedor">
			<div class="categorias">
				<div class="categoria">
					<a href="#generales">
						<i class="fas fa-address-card"></i>
						<p>Generales</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#mp">
						<i class="fas fa-money-check-alt"></i>
						<p>Mercado Pago</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#telecentro">
						<i class="fas fa-ticket-alt"></i>
						<p>Telecentro</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#casillas">
						<i class="fas fa-hdd"></i>
						<p>Casillas</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#gympass">
						<i class="fas fa-desktop"></i>
						<p>Gym Pass</p>
					</a>
				</div>

				<div class="categoria">
					<a href="#tsube">
						<i class="fas fa-fingerprint"></i>
						<p>Terminales SUBE</p>
					</a>
				</div>

			</div>
		</div>
	</div>



	<div class="subheader" id="subheader-login">
		<div class="contenedor">
			<form class="formulario-header" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="text" name="usuario" placeholder="Nombre de usuario">
				<input type="password" name="password" placeholder="Contraseña">
				<button type="submit"><i class="fas fa-sign-in-alt"></i></button>
			</form>
		</div>
	</div>
