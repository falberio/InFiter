<?php 

require 'config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ' . RUTA . '/error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

if (!$posts) {
	header('Location: ' . RUTA . '/error.php');
}

require 'views/instructivos.view.php';
 ?>