let data = [];

fetch('http://localhost/chatbot/tutor.php')
    .then(datos=>datos.json())
    .then(datos => {
        usuarios = datos;
        console.log(usuarios.nombreTutor);
        dataEnter(usuarios);
    })
    function dataEnter(tutor){
        let h1  = document.querySelector('#titulo-tutor');
        datosTutor = document.createElement('h4');
        h1.innerHTML = "Tu tutor es: " + tutor.nombreTutor + " y su correo es: " + tutor.correo; 

    }