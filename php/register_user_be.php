<?php
    include ("conexion_be.php");

    $id= $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    //encriptar contraseña

    $contraseña = hash('sha512', $contraseña);

    



    



    $query = "INSERT INTO users(id, nombre, correo, usuario, contraseña) VALUES('$id', '$nombre', '$correo', '$usuario', '$contraseña')";
    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM users WHERE correo = '$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo"
            <script>
                alert('Este correo ya está registrado, intenta con otro diferente');
                window.location = '../index.php';
            </script>
        ";
        exit();
    }

    //bueno...pasemos a la siguiente verificación, el usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM users WHERE usuario = '$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo"
            <script>
                alert('Este usuario ya está registrado, intenta con otro diferente');
                window.location = '../index.php';
            </script>
        ";
        exit();
    }

    






    //no se porque cuando le doy en el boton register se registra un usuario sin datos, pero bueno, esto lo arregla
    if( $id == "" || $nombre == "" || $correo == "" || $usuario == "" || $contraseña == "" ){
        echo"
            <script>
                alert('Por favor rellena todos los campos');
                window.location = '../index.php';
            </script>
        ";
        exit();
    } 

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo"
            <script>
                alert('Usuario registrado exitosamente');
                window.location = '../index.php';
            </script>
        ";
    } else {
        echo"
            <script>
                alert('Inténtalo de nuevo, usuario no registrado');
                window.location = '../index.php';
            </script>
        ";
    }
    mysqli_close($conexion);

?>