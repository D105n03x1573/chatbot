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

    }elseif ($usuario['tipo_usuario'] == 'usuario'){

        header('Location: '.RUTA.'usuario.php');

    }elseif ($usuario['tipo_usuario'] == 'tutor'){
        header('Location: '.RUTA.'tutor.php');
    }
    }else{
        header('Location: '.RUTA.'login.php');
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="static/css/login.css">
    <link rel="stylesheet" href="static/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
    <input type="checkbox" id="click">
    <label for="click">
        <i class="fab fa-facebook-messenger"></i>
        <i class="fas fa-times"></i>
    </label>
    <div class="wrapper">
        <div class="head-text">
            Necesitas ayuda?
        </div>
        <div class="chat-box">
            <div class="desc-text">
                Por favor, inicia sesion para que cut-bot pueda ayudarte.
            </div>
            <form action="validar.php" method="post">
                <div class="field">
                    <input type="text" placeholder="Ingresa su usuario" name="usuario" required>
                </div>
                <div class="field">
                    <input type="password" placeholder="Ingrese su contraseña" name="contraseña" required>
                </div>
                <div class="field">
                    <button type="submit" value="Ingresar">Iniciar Chat</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>