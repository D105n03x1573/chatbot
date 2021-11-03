<?php session_start();

require 'admin/config.php';
require 'function.php';

$errores = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['usuario'];
    $password = $_POST['pass'];
    $password = hash('sha512', $password);

    $conn = conn($bd_config);
    $statement = $conn->prepare('SELECT * FROM users WHERE usuario = :usuario AND pass = :pass');
    $statement->execute([':usuario' => $usuario, ':pass' => $password]);

    $resultado = $statement->fetch();

    if($resultado !== false){
        $_SESSION['usuario'] = $usuario;
        header('Location: '.RUTA.'index.php');
    }else{
        $errores .= '<li class="error">Tu usuario y/o contraseña son incorrectos</li>';
    }
}

require 'vistas/login.view.php';

?>