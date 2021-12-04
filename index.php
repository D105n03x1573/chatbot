<?php session_start();

    require 'admin/config.php';
    require 'function.php';

    //comprobar la sesion
    if(isset($_SESSION['usuario'])){
        //Validar los datos por privilegios
    $conn = conn($bd_config);
    $usuario = iniciarSesion('users', $conn);

    if($usuario['tipo_usuario'] == 'administrador'){

        header('Location: '.RUTA.'admin.php');

    }elseif ($usuario['tipo_usuario'] == 'alumno'){

        header('Location: '.RUTA.'usuario.php');

    }elseif ($usuario['tipo_usuario'] == 'tutor'){
        header('Location: '.RUTA.'tutor.php');
    }
    }else{
        header('Location: '.RUTA.'login.php');
    }
?>