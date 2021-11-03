<?php session_start();

require 'admin/config.php';
require 'function.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = limparDatos($_POST['usuario']);
    $password = limparDatos($_POST['pass']);
    $password = hash('sha512', $password);
    $rol = $_POST['rol'];

    $errores = '';

    //validando campos
    if(empty($usuario) || empty($password) || empty($rol)){
        $errores .= '<li class="error">Por favor rellene todos los campos</li>';
    }else {
        $conn = conn($bd_config);
        $statement = $conn->prepare('SELECT * FROM users WHERE usuario = :usuario LIMIT 1');
        $statement->execute([':usuario' => $usuario]);

        $resultado =$statement->fetch();

        if($resultado!=false){
            $errores .= '<li class="error">Este usuario ya existe</li>';
        }
    }

    if($errores == ''){
        $conn = conn($bd_config);
        $statement =  $conn->prepare('INSERT INTO users (id, usuario, pass, tipo_usuario) VALUES(null, :usuario, :pass, :tipo_usuario)');
        $statement->execute([':usuario' =>$usuario, ':pass' =>$password, ':tipo_usuario' =>$rol]);

        header('Location: '.RUTA.'login.php');
    }
}

require 'vistas/registro.view.php';
?>