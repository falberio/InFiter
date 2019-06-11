<?php 

require 'config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ' . RUTA . '/error.php');
}


$titulo_pagina = "Plataformas";

require 'views/plataformas.view.php';
 ?>