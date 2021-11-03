<?php
include('db.php');
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
$codigoEstudiante = "";
$consulta = "SELECT*FROM alumnos where nombreAlumno='$usuario' and carrera='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);


if ($filas) {
  while($row = $resultado->fetch_assoc()){
    $codigoAlumno = $row['codigoAlumno'];
  }
  $query = "SELECT codigoTutores FROM relaciontutoralumno WHERE codigoAlumno = '$codigoAlumno'";
  $cons = mysqli_query($conexion, $query);
  while($array = $cons->fetch_assoc()){
    $codigoTutor = $array['codigoTutores'];
    $_SESSION['tutor'] = $codigoTutor;
  }
  
  header("location:bot.html");
  
} else {
  ?>
  <?php
  include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>