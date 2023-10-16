
<?php 

	include "conection.php";


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Códigos postales</title>
</head>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<style type="text/css">
	.w-80{
		width: 75%;
		margin: 0.5%;
	}
	.w-20{
		width: 15%;
		margin: 0.5%;
	}
</style>

<body class="container-fluid">
	<div class="d-flex flex-wrap justify-content-around flex-column w-20 border">
	<ul class="nav flex-column">
	    <li class="nav-item">
	      <a class="nav-link" href="#">Link</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Link</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Link</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link disabled" href="#">Disabled</a>
	    </li>
	  </ul>	
	</div>
	<div class="d-flex flex-wrap justify-content-center w-80 border">
		<section class="container shadow p-4 mb-4 border rounded m-3 bg-light" id="tittle">
			<h1 class="text-center">Listado de Códigos Postales de México <hr></h1>
			<div class="d-flex flex-wrap justify-content-center flex-column">
				<div class="table table-responsive" id="allData">
					<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
					<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
					<table class="table table-bordered table-hover table-dark" id="tblCodes">
						<thead>
							<tr>
								<th>#</th>
								<th>Estado</th>
								<th>Municipio</th>
								<th>Ciudad</th>
								<th>Zona</th>
								<th>Código Postal</th>
								<th>Colonia</th>
								<th>Tipo</th>
							</tr>
						</thead>
						<tbody>
							<?php 

							$porPagina = 25; // Número de registros por página
							$paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1; // Página actual

							// Calcular el offset (desplazamiento)
							$offset = ($paginaActual - 1) * $porPagina;

							// Consulta SQL
							$sql = "SELECT * FROM codpos LIMIT $offset, $porPagina";
							$resultado = $mysqli->query($sql);

							// Obtener el número total de registros
							$sqlTotal = "SELECT COUNT(*) AS total FROM codpos";
							$totalResultados = $mysqli->query($sqlTotal)->fetch_assoc()['total'];

							// Calcular el número total de páginas
							$totalPaginas = ceil($totalResultados / $porPagina);
								
							while ($cp = $resultado->fetch_assoc()) {
								echo "<tr>";
								echo "<td>" . $cp['Id_dirMex']."</td>";
								echo "<td>" . $cp['estado']."</td>";
								echo "<td>" . $cp['municipio']."</td>";
								echo "<td>" . $cp['ciudad']."</td>";
								echo "<td>" . $cp['zona']."</td>";
								echo "<td>" . $cp['cp']."</td>";
								echo "<td>" . $cp['colonia']."</td>";
								echo "<td>" . $cp['tipo']."</td>";
								echo "</tr>";
							}

							 ?>
							
						</tbody>
					</table>


					<ul class="pagination">
					    <?php if ($paginaActual > 1): ?>
					        <li class="page-item"><a class="page-link" href="?pagina=<?php echo $paginaActual - 1; ?>">Anterior</a></li>
					    <?php endif; ?>
					    <div class="d-flex flex-wrap justify-content-around" style="width:90%">
					    	<?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
					    		<div>
					    			<li class="page-item"><a class="page-link" href="?pagina=<?php echo $i; ?>" <?php echo ($i == $paginaActual) ? 'class="activo"' : ''; ?>><?php echo $i; ?></a></li>
					    		</div>
					    	    
					    	<?php endfor; ?>
					    </div>
					   

					    <?php if ($paginaActual < $totalPaginas): ?>
					        <li class="page-item"><a class="page-link" href="?pagina=<?php echo $paginaActual + 1; ?>">Siguiente</a></li>
					    <?php endif; ?>
					</ul>
					
					    
				</div>
				
			</div>
		</section>

		
	</div>
</body>


</html>
