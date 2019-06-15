<?php 

require 'config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ' . RUTA . '/error.php');
}


$where = "";
$sede = "";
$turno = "";

if (isset($_GET['sede']) AND $_GET['sede'] != "todas") {
	$sede .= "sede=" . "'" . $_GET['sede'] . "'"; 
	$where .= "WHERE " . $sede;
	if(isset($_GET['turno']) AND $_GET['turno'] != "todos"){
		$turno .= "turno=" . "'" . $_GET['turno'] . "'";
		$where .= " AND " . $turno;
	} 
} else if(isset($_GET['turno']) AND $_GET['turno'] != "todos"){
	$turno .= "turno=" . "'" . $_GET['turno'] . "'"; 
	$where .= "WHERE " . $turno;
}


$colaboradores = obtener_colaboradores($conexion,$where);



// var_dump($sede);
// var_dump($turno);
// var_dump($where);
// $sede = $_GET['sede'];
// $turno = $_GET['turno'];

// $colaboradores = obtener_colaboradores($conexion);
// $colaboradores_por_sede = obtener_colaboradores_por_sede($conexion,$sede);
// $colaboradores_por_turno = obtener_colaboradores_por_turno($conexion,$turno);




// if (!$colaboradores_filtrados) {
// 	$colaboradores_filtrados = $colaboradores;
// }


require 'views/staff.view.php';
 ?>