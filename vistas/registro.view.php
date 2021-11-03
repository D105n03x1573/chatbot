<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="bg-image">
    <div class="container">
        <!-- Con el htmlspecialchars se evita que se inyecte codigo-->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="input-group">
                <i class="fa fa-user-o icons" aria-hidden="false"></i>
                <input type="text" name="usuario" placeholder="Usuario" class="form-control">
            </div>

            <div class="input-group">
                <i class="fa fa-lock icons" aria-hidden="false"></i>
                <input type="password" name="pass" placeholder="Contraseña" class="form-control">
            </div>

            <div class="input-group">
                <select name="rol" class="form-control">
                    <option value="">Selecciona un privilegio</option>
                    <option value="administrador">Administrador</option>
                    <option value="usuario">Usuario</option>
                </select>
            </div>

            <?php if(!empty($errores)): ?>
                <ul>
                    <?php echo $errores; ?>
                </ul>
            <?php endif; ?>

            <button type="submit"  name="submit" class="btn btn-flat-green" >Ingresar</button>
        </form>
    </div>
</body>
</html>