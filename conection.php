<?php
$servername = "localhost";
$username = "adminCP";
$password = "_8z[cwDHz.laN*YC";
$database = "dbpostalcodes";

// Crear una conexión a la base de datos
$mysqli = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

// Establecer el juego de caracteres a UTF-8 (opcional)
$mysqli->set_charset("utf8");

function getAll($con){
    $query = "SELECT * FROM codpos";
    $result = $con->query($query);
    $data = [];
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    return $data;
}

function getAll2($con){
	// Parámetros de la paginación
	$draw = $_POST['draw'];
	$start = $_POST['start'];
	$length = $_POST['length'];

	// Consulta SQL para obtener datos
	$sql = "SELECT * FROM tu_tabla LIMIT $start, $length";
	$resultado = $conexion->query($sql);

	$data = array();
	while ($fila = $resultado->fetch_assoc()) {
	    $data[] = $fila;
	}

	// Número total de registros sin paginación
	$sqlTotal = "SELECT COUNT(*) AS total FROM tu_tabla";
	$resultadoTotal = $conexion->query($sqlTotal);
	$totalRegistros = $resultadoTotal->fetch_assoc()['total'];

	// Crear el arreglo de respuesta para DataTables
	$response = array(
	    "draw" => intval($draw),
	    "recordsTotal" => $totalRegistros,
	    "recordsFiltered" => $totalRegistros,
	    "data" => $data
	);

}


?>