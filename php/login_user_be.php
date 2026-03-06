<?php
//hagamos un login de usuario, para eso necesitamos una base de datos, así que vamos a crear una base de datos llamada "place_bsd" y dentro de esa base de datos vamos a crear una tabla llamada "users" con los siguientes campos: id, nombre, correo, usuario y contraseña
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    //encriptar contraseña
    $contraseña = hash('sha512', $contraseña);


    $validar_login = mysqli_query($conexion, "SELECT * FROM users WHERE correo = '$correo' AND contraseña = '$contraseña' ");

    //necesito que el usuario se redirija a la página principal si el login es correcto, y si el login es incorrecto que se muestre un mensaje de error
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../home.php");
        exit();
    }else{
        echo"
            <script>
                alert('Correo o contraseña incorrectos, por favor intenta de nuevo');
                window.location = '../index.php';
            </script>
        ";
        exit();


        

    }

    //no me deja iniciar sesión, aunque el correo y la contraseña sean correctos, creo que el problema es que no estoy encriptando la contraseña, así que vamos a encriptar la contraseña con sha512 para que así el login funcione correctamente,
    







?>