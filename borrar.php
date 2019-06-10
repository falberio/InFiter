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

$id = limpiarDatos($_GET['id']);

if (!$id) {
	header('Location: ' . RUTA . '/panel_control.php');
}

$statement = $conexion->prepare('DELETE FROM articulos WHERE id = :id');
$statement->execute(array('id' => $id));

header('Location: ' . RUTA . '/panel_control.php');


?>