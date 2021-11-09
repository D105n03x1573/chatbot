<?php

function conn($bd_config){
    try{
        $conexion = new PDO('mysql:host=bzuqqebz7dygx0fzwoft-mysql.services.clever-cloud.com; dbname='.$bd_config['db_name'],$bd_config['user'],$bd_config['pass']);
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

?>