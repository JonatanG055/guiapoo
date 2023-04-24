<!DOCTYPE html>
<html>
<head>
	<title>Mostrar imágenes según número</title>
</head>
<body>
	<h1>Mostrar imágenes según número</h1>
	<form method="post">
		<label for="numero">Ingrese un número:</label>
		<input type="number" name="numero" id="numero" required>
		<button type="submit">Mostrar imágenes</button>
	</form>

	<?php
	// Clase para generar imágenes
	class GeneradorImagenes {
		// Método para generar un número dado de imágenes
		public static function generar($cantidad) {
			// Mostrar un máximo de 10 imágenes para evitar sobrecargar la página
			$cantidad = min($cantidad, 10);

			for ($i = 0; $i < $cantidad; $i++) {
				// Generar una imagen de mono
				$imagen = "img/monkey.png";

				// Mostrar la imagen en la página
				echo '<img src="'.$imagen.'" style="display: inline-block; width: 200px; margin-right: 10px;">';

			}
		}
	}

	// Procesar el formulario cuando se envíe
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Obtener el número ingresado por el usuario
		$cantidad = $_POST['numero'];

		// Generar las imágenes utilizando la clase GeneradorImagenes
		GeneradorImagenes::generar($cantidad);
	}
	?>
</body>
</html>
