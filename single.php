<?php 

require 'config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);


if (!$conexion) {
	header('Location: ' . RUTA . '/error.php');
}

if (empty($id_articulo)) {
	header('Location: ' . RUTA . '/index.php');
}

$post = obtener_post_por_id($conexion, $id_articulo);
if (!$post) {
	header('Location: ' . RUTA . '/index.php');
}

$post = $post[0];

require 'views/single.view.php';



 ?>