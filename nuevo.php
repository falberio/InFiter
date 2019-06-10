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

// Comprobamos si los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$titulo = limpiarDatos($_POST['titulo']);
	// Con la funcion nl2br podemos transformar los saltos de linea en etiquetas <br>
	$texto = $_POST['texto'];

	$statement = $conexion->prepare(
		'INSERT INTO articulos (id, titulo, texto) 
		VALUES (null, :titulo, :texto)'
	);

	$statement->execute(array(
		':titulo' => $titulo,
		':texto' => $texto
	));

	header('Location: ' . RUTA . '/panel_control.php');
}


require 'views/nuevo.view.php';

?>