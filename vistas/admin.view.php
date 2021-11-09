<?php

if (isset($_POST["enviar"])) { //nos permite recepcionar una variable que si exista y que no sea null


	require_once("function.php");
	require_once("conexion.php");

	$archivo = $_FILES["archivo"]["name"];
	$archivo_copiado = $_FILES["archivo"]["tmp_name"];


	$archivo_guardado = "copia_" . $archivo;



	echo $archivo . " esta en la ruta temporal: " . $archivo_copiado;

	if (copy($archivo_copiado, $archivo_guardado)) {
		echo " se copio correctamente el archivo temporal a nuestra carpeta de trabajo <br/>";
	} else {
		echo " hubo un error <br/>";
	}

	if (file_exists($archivo_guardado)) {

		$fp = fopen($archivo_guardado, "r"); //abrir un archivo
		$rows = 0;
		while ($datos = fgetcsv($fp, 1000, ";")) {
			$rows++;
			// echo $datos[0] ." ".$datos[1] ." ".$datos[2]." ".$datos[3] ."<br/>";
			if ($rows > 1) {
				$resultado = insertar_datos($datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $datos[5], $datos[6], $datos[7], $datos[8]);
				if ($resultado) {
					echo "se inserto los datos correctamnete<br/>";
				} else {
					echo " no se inserto <br/>";
				}
			}
		}
	} else {
		echo " no existe el archivo copiado <br/>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div class="formulario">
		<form action="admin.php" class="formulariocompleto" method="post" enctype="multipart/form-data">
			<input type="file" name="archivo" class="form-control" />
			<input type="submit" value="SUBIR ARCHIVO" class="form-control" name="enviar">
		</form>
	</div>
	<h1>bienvenido administrador</h1>
	<a href="<?php echo RUTA . 'close.php' ?>">Cerrar sesion</a>
</body>

</html>