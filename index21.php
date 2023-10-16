<?php 

	include "vectores.php";
	include "ordenamiento.php";
	include "cpostales.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Matrices JavaScript
	</title>
	<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style type="text/css">
	.cel{
		width: 50px;
		height: 40px;
	}
	.cel2{
		width: 60px;
		height: 40px;
	}
	.w-20{
		width: 19%;
		margin: .5%;
	}
	.w-80{
		width: 99%;
		margin: .5%;
	}
</style>
<?php 
	for ($r=0; $r < 5 ; $r++) { 
		for ($c=0; $c < 5; $c++) { 
				$matrizA[$r][$c] = rand(1,99);
				$matrizB[$r][$c] = rand(1,99);
			}	
	}

 ?>
 
<body>
	<div class="d-flex flex-wrap justify-content-end">
		<form action="ordenamiento.php">
			<button type="submit" class="btn btn-success btn-lg"> Ordenamiento</button>
		</form>
	</div>
	<div class="d-flex flex-wrap">
		<!--<section class="container-fluid w-20 shadow p-4 mb-4 bg-primary">
			<div class="d-flex flex-column justify-content-center">
				<div class="p-2">

					<button class="btn btn-outline-dark">Sumar</button>
				</div>
				<div class="p-2">
					<button class="btn btn-outline-dark">Restar</button>
				</div>
				<div class="p-2">
					<button class="btn btn-outline-dark">Multipicar</button>
				</div>
				<div class="p-2">
					<button class="btn btn-outline-dark">Dividir</button>
				</div>
			</div>
		</section>-->
		<section class="container p-2 shadow p-4 mb-4  w-80" id="matrices">
			<div class="d-flex flex-wrap">
				<div class="p-1">
					<div class="input-group mb-3 ">
						<span class="input-group-text">Matriz A:</span>
						<div>
							<?php 
								for ($r=0; $r < 5; $r++) { ?>
								<div class="d-flex flex-wrap ">
									<?php for ($c=0; $c < 5; $c++) {  ?>
										<div class="p-2 border cel text-center">
											<?php echo $matrizA[$r][$c]; ?>
										</div>
									<?php } ?>
								</div>	
							<?php }  ?>
						</div>
					</div>
				</div>
				<div class="p-1">
					<div class="input-group mb-3 ">
						<span class="input-group-text">Matriz B:</span>
						<div>
							<?php 
								for ($r=0; $r < 5; $r++) { ?>
								<div class="d-flex flex-wrap ">
									<?php for ($c=0; $c < 5; $c++) {  ?>
										<div class="p-2 border cel text-center">
											<?php echo $matrizB[$r][$c]; ?>
										</div>
									<?php } ?>
								</div>	
							<?php }  ?>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-column ">
				<div class="p-2">
					<div class="input-group mb-3 " id="suma">
						<span class="input-group-text">SUMA (A+B):</span>
						<div>
							<?php 
								for ($r=0; $r < 5; $r++) { ?>
								<div class="d-flex flex-wrap ">
									<?php for ($c=0; $c < 5; $c++) {  ?>
										<div class="p-2 border cel text-center">
											<?php echo $matrizA[$r][$c] +  $matrizB[$r][$c]; ?>
										</div>
									<?php } ?>
								</div>	
							<?php }  ?>
						</div>
					</div>
				</div>
				<div class="d-flex flex-wrap">
					<div class="p-2">
						<div class="input-group mb-3 " id="resta">
							<span class="input-group-text">RESTA(A-B):</span>
							<div>
								<?php 
									for ($r=0; $r < 5; $r++) { ?>
									<div class="d-flex flex-wrap ">
										<?php for ($c=0; $c < 5; $c++) {  ?>
											<div class="p-2 border cel text-center">
												<?php echo $matrizA[$r][$c] -  $matrizB[$r][$c]; ?>
											</div>
										<?php } ?>
									</div>	
								<?php }  ?>
							</div>
						</div>
					</div>
					<div class="p-2">
						<div class="input-group mb-3 " id="resta">
							<span class="input-group-text">RESTA(B-A):</span>
							<div>
								<?php 
									for ($r=0; $r < 5; $r++) { ?>
									<div class="d-flex flex-wrap ">
										<?php for ($c=0; $c < 5; $c++) {  ?>
											<div class="p-2 border cel text-center">
												<?php echo $matrizB[$r][$c] -  $matrizA[$r][$c]; ?>
											</div>
										<?php } ?>
									</div>	
								<?php }  ?>
							</div>
						</div>
					</div>
				</div>
				<div class="p-2">
					<div class="input-group mb-3 " id="resta">
						<span class="input-group-text">MULTIPLICACIÓN (A*B):</span>
						<div>
							<?php 
								for ($r=0; $r < 5; $r++) { ?>
								<div class="d-flex flex-wrap ">
									<?php for ($c=0; $c < 5; $c++) {  ?>
										<div class="p-2 border cel2 text-center">
											<?php echo $matrizA[$r][$c] *  $matrizB[$r][$c]; ?>
										</div>
									<?php } ?>
								</div>	
							<?php }  ?>
						</div>
					</div>
				</div>
				<div class="d-flex flex-wrap">
					<div class="p-2">
						<div class="input-group mb-3 " id="resta">
							<span class="input-group-text">DIVISIÓN (A/B):</span>
							<div>
								<?php 
									for ($r=0; $r < 5; $r++) { ?>
									<div class="d-flex flex-wrap ">
										<?php for ($c=0; $c < 5; $c++) {  ?>
											<div class="p-2 border cel text-center">
												<?php echo number_format(($matrizA[$r][$c] /  $matrizB[$r][$c]),2); ?>
											</div>
										<?php } ?>
									</div>	
								<?php }  ?>
							</div>
						</div>
					</div>
					<div class="p-2">
						<div class="input-group mb-3 " id="resta">
							<span class="input-group-text">DIVISIÓN (B/A):</span>
							<div>
								<?php 
									for ($r=0; $r < 5; $r++) { ?>
									<div class="d-flex flex-wrap ">
										<?php for ($c=0; $c < 5; $c++) {  ?>
											<div class="p-2 border cel text-center">
												<?php echo number_format(($matrizB[$r][$c] /  $matrizA[$r][$c]),2); ?>
											</div>
										<?php } ?>
									</div>	
								<?php }  ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<hr>
	<section class="container">
		<div class="d-flex flex-wrap" id="matriz2">
			
		</div>
	</section>
</body>
<script type="text/javascript">
	let m2 = document.getElementById('matriz2');
	let ciudades = new Array();
	let temperaturas;
	let tem;
	let cad = '';
	let cd;

	for (var i = 0; i < 3; i++) {
		temperaturas = new Array();
		cd = prompt('Nombre de la ciudad:')
		for (var j = 0; j < 3; j++) {
			temperaturas[j] = prompt('Temperatura '+ (j+1) + ':');
		}
		ciudades[cd] = temperaturas;
	}
	for (var property in ciudades) {
	  cad += '<div class="p-1"><div class="input-group mb-3 ">		<span class="input-group-text">'+ property +'</span><div class="d-flex flex-wrap ">';
	  for (var i = 0; i < 3; i++) {
	  	cad += '<div class="p-2 border cel text-center">'
	  	cad += ciudades[property][i];
	  	cad += '</div>';
	  }
	  cad += '</div></div>';

	}

	console.log(cad);
	//m2.innerHTML = cad;
</script>



</html>