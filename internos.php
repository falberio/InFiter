<?php 

require 'config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ' . RUTA . '/error.php');
}

$internos = obtener_internos($conexion);


if (!$internos) {
	header('Location: ' . RUTA . '/error.php');
}


require 'views/internos.view.php';
 ?>