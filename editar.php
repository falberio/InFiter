<?php session_start();
require 'config.php';
require 'functions.php';

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSesion();

// Conectamos a la base de datos
$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ' . RUTA . '/error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$titulo = limpiarDatos($_POST['titulo']);
	$texto = $_POST['texto'];
	$id = limpiarDatos($_POST['id']);

	

	$statement = $conexion->prepare(
		'UPDATE articulos SET titulo = :titulo, texto = :texto WHERE id = :id'
	);

	$statement->execute(array(
		':titulo' => $titulo,
		':texto' => $texto,
		':id' => $id
	));
	header('Location: ' . RUTA . '/instructivos.php');

} else {
	$id_articulo = id_articulo($_GET['id']);
	if (empty($id_articulo)) {
		header('Location: ' . RUTA . '/instructivos.php');
	}

	$post = obtener_post_por_id($conexion, $id_articulo);

	if (!$post) {
		header('Location: ' . RUTA . '/instructivos.php');
	}

	$post = $post[0];
}




require 'views/editar.view.php';

 ?>