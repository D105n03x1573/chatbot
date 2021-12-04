<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/font-awesome.min.css">
    <link rel="stylesheet" href="./static/css/login1.css">
    <link rel="stylesheet" href="./static/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Document</title>
</head>

<body>
    <div class="login-dark">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group">
                <input class="form-control" type="text" name="usuario" placeholder="Usuario" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="pass" placeholder="Contraseña" required>
            </div>
            <ul>
                <?php if(!empty($errores)): ?>
                    <?php echo $errores; ?>
                <?php endif; ?>
            </ul>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" value="Ingresar">Ingresar</button>
                <!-- </div><a href="#" class="forgot">Forgot your email or password?</a> --> 
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>