<?php 
 	
 	include "conection.php";

	$porPagina = 10; // Número de registros por página
	$paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1; // Página actual

	// Calcular el offset (desplazamiento)
	$offset = ($paginaActual - 1) * $porPagina;

	// Consulta SQL
	$sql = "SELECT * FROM tu_tabla LIMIT $offset, $porPagina";
	$resultado = $conexion->query($sql);

	// Obtener el número total de registros
	$sqlTotal = "SELECT COUNT(*) AS total FROM tu_tabla";
	$totalResultados = $conexion->query($sqlTotal)->fetch_assoc()['total'];

	// Calcular el número total de páginas
	$totalPaginas = ceil($totalResultados / $porPagina);

 ?>