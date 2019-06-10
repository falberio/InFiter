<?php 

require 'config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ' . RUTA . '/error.php');
}

$anydesks = obtener_anydesks($conexion);


if (!$anydesks) {
	header('Location: ' . RUTA . '/error.php');
}


require 'views/anydesk.view.php';
 ?>