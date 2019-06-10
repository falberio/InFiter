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
	$categoria = $_POST['categoria'];
	$question = $_POST['question'];
	// Con la funcion nl2br podemos transformar los saltos de linea en etiquetas <br>
	$answer = $_POST['answer'];

	$statement = $conexion->prepare(
		'INSERT INTO faqs (id, categoria, question, answer) 
		VALUES (null, :categoria, :question, :answer)'
	);

	$statement->execute(array(
		':categoria' => $categoria,
		':question' => $question,
		':answer' => $answer
	));

	// print_r($categoria . $question . $answer);

	header('Location: ' . RUTA . '/faq.php');
}


require 'views/nueva_faq.view.php';

?>