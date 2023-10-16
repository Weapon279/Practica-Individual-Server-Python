<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operaciones de ordenamiento</title>
</head>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		.w-45{
			width: 45%;
		}
	</style>

<body>
	<div class="d-flex flex-wrap justify-content-center">
		<section id="arrPHP" class="container shadow p-4 mb-4 border rounded  m-3 w-45">
			<h2>Operaciones Javascript <hr></h2>
			<script type="text/javascript">
				const numeros = [1,3,5,2,78,65,0,-1,56];
				const numerosOrdenados = numeros.sort((a, b) => a - b);
				document.write("Números ordenados Ascendentemente: <br>")
				for(var numero of numerosOrdenados){
					document.write(numero);
					document.write("<br>")

				}
				document.write("<br><hr>");

				const datos = ['Pedro','Abraham','Leticia','Alejandra','Gerardo','Santiago'];
				const datosOrdenadosDesc = datos.sort((a, b) => b - a);
				document.write("Datos ordenados Descscendentemente: <br>")
				for(var dato of datosOrdenadosDesc){
					document.write(dato);
					document.write("<br>")

				}

				document.write("<br><hr>");

				document.write("Datos ordenados bubbleSort: <br>");

				var datosOrdenadosDc = bubbleSort(datos);

				for(var dato of datosOrdenadosDc){
					document.write(dato);
					document.write("<br>")

				}

				function bubbleSort(arr) {
				  let n = arr.length;
				  let swapped;
				  do {
				    swapped = false;
				    for (let i = 0; i < n - 1; i++) {
				      if (arr[i] > arr[i + 1]) {
				        [arr[i], arr[i + 1]] = [arr[i + 1], arr[i]]; // Intercambio de elementos
				        swapped = true;
				      }
				    }
				  } while (swapped);
				  return arr;
				}

				

			</script>
		</section>

		<section id="arrJS" class="container shadow p-4 mb-4 border rounded m-3 w-45">
			<h2>Operaciones PHP <hr></h2>

			<?php 

			$arreglo = [1,3,5,2,78,65,0,-1,56];
			$datos = ['Pedro','Abraham','Leticia','Alejandra','Gerardo','Santiago'];

			// Ordenar el array en orden ascendente
			   sort($datos);

			 // Ordenar el array en orden descendente
			    rsort($arreglo);
			   
			echo "Datos en orden Ascendente: <br>";
			foreach ($datos as $dato) {
				echo $dato . "<br>";
			}

			echo "<hr><br>";
			echo "Datos en orden Descendente: <br>";
			foreach ($arreglo as $dato) {
				echo $dato . "<br>";
			}




			?>
		</section>
	</div>
	<div class="container d-flex flex-wrap justify-content-end">
		<form action="cpostales.php">
			<button class="btn btn-outline-success">Codigos postales</button>
		</form>
	</div>
</body>
</html>