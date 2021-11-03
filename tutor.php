<?php
include('db.php'); 
session_start();
$codigoTutor = $_SESSION['tutor'];
$nombreTutor = "";
$correoTutor = ""; 

$query = "SELECT * FROM `tutores` WHERE codigoTutores = '$codigoTutor'";
$response = mysqli_query($conexion, $query);
if($response->num_rows > 0){
    while($elemento = $response->fetch_assoc()){
        $nombreTutor = $elemento['nombreTutor'] . " " . $elemento['Apellido1Tutor'] . " " . $elemento['Aplellido2Tutor'];
        $correoTutor = $elemento['correoTutor'];
    }
    $data = array('nombreTutor' => "$nombreTutor", 'correo' => "$correoTutor");
    $json = json_encode($data);
    print_r($json);
    
    //echo "Tu tutor es: " . $nombreTutor;
    //echo "<br> Su correo es: " . $correoTutor;
}
?>
