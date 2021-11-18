<?php session_start();

require 'admin/config.php';
require 'function.php';


//Comprobar sesion
if(!isset($_SESSION['usuario'])){
    header('Location: '.RUTA.'login.php');
}


$conn = conn($bd_config);
$user = iniciarSesion('users',$conn);


if($user['tipo_usuario'] == 'usuario'){
    require 'vistas/usuario.view.php';
}else{
    header('Location: '.RUTA.'index.php');
}




?>