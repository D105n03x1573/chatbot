<?php

function conn($bd_config){
    try{
        $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];
        $conexion = new PDO('mysql:host=bzuqqebz7dygx0fzwoft-mysql.services.clever-cloud.com; dbname='.$bd_config['db_name'],$bd_config['user'],$bd_config['pass'], $option);
        return $conexion;
    }catch(PDOException $e){
        return false;
    }
}

function limparDatos($datos){
    //evita que ingresen un espacio en el input de usuario
    $datos= trim($datos);
    //nos transforma cualquier signo de mayor o menor en texto
    $datos = htmlspecialchars($datos);
    //borra todos los mayor y menor que y todo lo que tengan dentro
    $datos = filter_var($datos, FILTER_SANITIZE_STRING);

    return $datos;
}

function iniciarSesion($table, $conexion){
    $statement = $conexion->prepare("SELECT * FROM $table WHERE usuario = :usuario");
    $statement->execute([':usuario' => $_SESSION['usuario']]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function insertar_datos($cod,$nombreA,$PiApe,$SeAp,$correoA,$carrera,$pass,$tipo,$semestre){
	$pass = hash('sha512', $pass);
 		global $conexio;
 	$sentencia = "insert into alumnos (codigoAlumno,nombreAlumno,primerApellido,segundoApellido,correoAlumno,carrera,password,tipo_usuario,semestre) values ($cod,'$nombreA','$PiApe','$SeAp','$correoA','$carrera','$pass','$tipo','$semestre')";
 	$ejecutar = mysqli_query($conexio,$sentencia);
 	return $ejecutar;
 }

 function actualizar_datos($cod,$nombreA,$PiApe,$SeAp,$correoA,$carrera,$pass,$tipo,$semestre){
	$pass = hash('sha512', $pass);
 		global $conexio;
 	$sentencia = "update alumnos set nombreAlumno='$nombreA', primerApellido='$PiApe', segundoApellido='$SeAp', correoAlumno='$correoA', carrera='$carrera', password='$pass', tipo_usuario='$tipo', semestre='$semestre' WHERE codigoAlumno='$cod'";
 	$ejecutar = mysqli_query($conexio,$sentencia);
 	return $ejecutar;
 }

 function obtener_codigo(){
    $array_codigos = array();
		$query = "select * from alumnos";
		$conexio = mysqli_connect("bzuqqebz7dygx0fzwoft-mysql.services.clever-cloud.com", "u0mt1l3vyqfvwppr", "zU6ukR0FW40qXLFDKalV", "bzuqqebz7dygx0fzwoft");
		$codigos = mysqli_query($conexio, $query);
		if($codigos->num_rows > 0){
			while($row = $codigos->fetch_assoc()){
				
				array_push($array_codigos,  $row['codigoAlumno']);
				
			}
		}
        return $array_codigos;
 }
