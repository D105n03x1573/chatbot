<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="static/css/normalize.css">
    
    <link rel="stylesheet" href="./static/css/alumno.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h2>Bienvenido</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Nombre</th>
			<th>Primer Apellido</th>
			<th>Correo</th>
        </tr>
        </thead>
        <tbody>
        <?php 
            $conn = mysqli_connect("bzuqqebz7dygx0fzwoft-mysql.services.clever-cloud.com", "u0mt1l3vyqfvwppr", "zU6ukR0FW40qXLFDKalV", "bzuqqebz7dygx0fzwoft") or die("database Error");
            
            
            if (mysqli_connect_errno()) {
                printf("Conexion Fallida: %s\n", mysqli_connect_error());
                exit();
            }
            

            $usuarioAlumno  = $_SESSION['usuario'];

            
            $query = "SELECT nombreTutor, Apellido1Tutor, correoTutor FROM tutores where codigoTutor like (SELECT codigoTutor FROM relaciontutoralumno where codigoAlumno like '$usuarioAlumno')";
            $result_task = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result_task)){ ?>
                <tr>
                    <td><?php echo $row['nombreTutor'] ?></td>
                    <td><?php echo $row['Apellido1Tutor'] ?></td>
                    <td><?php echo $row['correoTutor'] ?></td>
                </tr>
            <?php } ?>
        <tbody>
    </table>
</div>
<p class="centrar"> 
    <a class="enlace" href="<?php echo RUTA . 'close.php' ?>">Cerrar sesion</a>
</p>
    <div class="chat-bar-collapsible">
        <div class="wrapper">
            <button id="chat-button" type="button" class="collapsible">
                <img src='img/Liston1.png' class='image' />
            </button>
            <div class="content">
                <div class="form">
                    <div class="bot-inbox inbox">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="msg-header">
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>

                        </div>
                    </div>
                </div>
                <form action="message.php" method="post">
                    <div class="typing-field">
                        <div class="input-data">
                            <input class="letras" id="dt" type="text" required placeholder="Escribe algo aquí..." name="pregunta" >
                            <button id="btn-enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#btn-enviar").on("click", function () {
                $value = $("#dt").val();
                $msg = '<div class="usuario-inbox inbox"><div class="userText"><p><span>' + $value + '</span></p></div></div>';
                $(".form").append($msg);
                $("#dt").val('');

                //se inicia ajax
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function (result) {
                        if (result != "") {
                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p class="botText"><span>' + result + '</span></p></div></div>';
                            $(".form").append($replay);

                            $(".form").scrollTop($(".form")[0].scrollHeight);
                        } else {
                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p class="botText"><span>' + "No te entiendo, puedes repetir la pregunta?" + '</span></p></div></div>';
                            $(".form").append($replay);

                            $(".form").scrollTop($(".form")[0].scrollHeight);
                        }
                    }
                });
            });
        });
    </script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/chat.js"></script>
</html>