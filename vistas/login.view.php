<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/font-awesome.min.css">
    <link rel="stylesheet" href="./static/css/style.css">
    <link rel="stylesheet" href="./static/css/login.css">
    <link rel="stylesheet" href="./static/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Document</title>
</head>

<body class="bg-image">


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
                Por favor, inicia sesion para que el TutorBot pueda ayudarte.
            </div>
            <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="field">
                    <input type="text" placeholder="Ingresa su usuario" name="usuario" required>
                </div>
                <div class="field">
                    <input type="password" placeholder="Ingrese su contraseña" name="pass" required>
                </div>
                <ul>
                <?php if(!empty($errores)): ?>
                    <?php echo $errores; ?>
                <?php endif; ?>
                </ul>
                <div class="field">
                    <button type="submit" value="Ingresar">Iniciar Chat</button>
                </div>
            </form>
        </div>
    </div>


</body>
</html>