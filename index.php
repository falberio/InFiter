<?php 

require 'config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ' . RUTA . '/error.php');
}



require 'views/index.view.php';
 ?>