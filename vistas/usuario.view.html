<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="static/css/normalize.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h3 id="titulo-tutor">Tu tutor es</h3>
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
                            <input class="letras" id="dt" type="text" placeholder="Escribe algo aquí..." name="pregunta" required>
                            <button id="btn-enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="<?php echo RUTA.'close.php'?>">Cerrar sesion</a>
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
<script src="static/scripts/fetch.js"></script>
</html>