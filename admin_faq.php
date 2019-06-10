<?php 

require 'config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ' . RUTA . '/error.php');
}




$faqs = obtener_faqs($conexion);
$categorias_faqs = obtener_categorias_faqs($conexion);


if (!$faqs) {
	header('Location: ' . RUTA . '/error.php');
}

if (!$categorias_faqs) {
	header('Location: ' . RUTA . '/error.php');
}

require 'views/admin_faq.view.php';
 ?>