<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://kit.fontawesome.com/d3d4fcb8d1.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
	<title>InFiter</title>
</head>
<body>
	<header>
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA;  ?>"><span>infi</span>ter</a></p>
			</div>

			<div class="derecha">
				<!-- <form name="busqueda" class="buscar" action="<?php echo RUTA;  ?>/buscar.php" method="get">
					<input type="text" name="busqueda" placeholder="Buscar">
					<button type="submit" class="icono fa fa-search"></button>
				</form> -->

				<nav class="menu">
					<ul>
						<li><a href="login.php">Login</a></li>
						<li><a href="cerrar.php">Cerrar Sesión</a></li>
					</ul>
				</nav>
			</div>
	</header>