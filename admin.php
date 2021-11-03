<?php session_start();

require 'admin/config.php';
require 'function.php';


//Comprobar sesion
if(!isset($_SESSION['usuario'])){
    header('Location: '.RUTA.'login.php');
}


$conn = conn($bd_config);
$admin = iniciarSesion('users',$conn);


if($admin['tipo_usuario'] == 'administrador'){
    require 'vistas/admin.view.php';
}else{
    header('Location: '.RUTA.'index.php');
}




?>