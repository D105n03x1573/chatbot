
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrador</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="./static/css/admin-menu.css">
</head>

<body>
	<div class="container">
	<h1>
		<a href="#menu">Bienvenido Administrador</a>
	</h1>
	<div class="popover" id="menu">
		<div class = 'content'>
				<a href="#" class="close"></a>
			<div class = 'nav'>
				<form action="admin.php">
					<ul class = 'nav_list'>
						<div class = 'nav_list_item'>
							<li><a href="vistas/actualizar.datos.php">Actualizar Datos</a></li>
						</div>
						<div class = 'nav_list_item'>
							<li><a href="vistas/insertar.datos.view.php">Insertar Datos Nuevos</a></li>
						</div>
						<div class = 'nav_list_item'>
							<li><a href="<?php echo RUTA . 'close.php' ?>">Cerrar sesion</a></li>
						</div>
					</ul>
				</form>	
			</div>
		</div>
 	</div>
</div>
</body>

</html>