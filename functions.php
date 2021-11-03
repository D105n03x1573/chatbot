<?php
 function insertar_datos($cod,$nombreA,$PiApe,$SeAp,$correoA,$carrera,$contra,$tipo){
 		global $conexio;
 	$sentencia = "insert into alumnos (codigoAlumno,nombreAlumno,primerApellido,segundoApellido,correoAlumno,carrera,contrasena,tipo_usuario) values ($cod,'$nombreA','$PiApe','$SeAp','$correoA','$carrera','$contra','$tipo')";
 	$ejecutar = mysqli_query($conexio,$sentencia);
 	return $ejecutar;
 }
?>