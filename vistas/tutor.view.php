<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./static/css/tutor.css">

    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	
</head>

<body>

<div id="page-wrap">
    <a href="<?php echo RUTA . 'close.php' ?>">Cerrar sesion</a>
	<h1>Bienvenido Tutor</h1>
	<table>
		<thead>
		<tr>
			<th>Nombre</th>
			<th>Primer Apellido</th>
			<th>Correo</th>
			<th>Semestre</th>
		</tr>
		</thead>
		<tbody>
        <?php 
            $conn = mysqli_connect("bzuqqebz7dygx0fzwoft-mysql.services.clever-cloud.com", "u0mt1l3vyqfvwppr", "zU6ukR0FW40qXLFDKalV", "bzuqqebz7dygx0fzwoft") or die("database Error");
            
            
            if (mysqli_connect_errno()) {
                printf("Conexion Fallida: %s\n", mysqli_connect_error());
                exit();
            }
            

            $usuarioTutor  = $_SESSION['usuario'];

            
            $query = "SELECT * FROM alumnos where codigoAlumno in (SELECT codigoAlumno FROM relaciontutoralumno where correoTutores like '$usuarioTutor')";
            $result_task = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result_task)){ ?>
                <tr>
                    <td><?php echo $row['nombreAlumno'] ?></td>
                    <td><?php echo $row['primerApellido'] ?></td>
                    <td><?php echo $row['correoAlumno'] ?></td>
                    <td><?php echo $row['semestre'] ?></td>
                </tr>
            <?php } ?>
		</tbody>
	</table>
 </div>

</body>

</html>