<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("Location: home.php");
        die();
    }
?>      



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placetopay</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css?v=<?php echo filemtime(__DIR__ . '/assets/css/estilos.css'); ?>">
</head>
<body>  
    <main>

            <div class="contenedor__todo">
                
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                  
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>
                

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_user_be.php" method="POST" class="formulario__login">
                        <img src="assets/images/EVLOGO.png" alt="Logo de EV" style="width:  50px; height: 55px; margin-bottom: 20px; align-self: center;">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="correo" name="correo">
                        <input type="password" placeholder="contraseña" name="contraseña">
                        <button style="height: 40px; width: 100%;">Entrar</button>
                        <a href="welcome.php" class="btn btn-sm btn-outline mt-2" style="background: orangered; color: white; margin-left: 60px;"> Volver a la pagina de bienvenida</a>
                            
                        </a>
                    </form>

                    <!--Register-->
                    <form action="php/register_user_be.php" METHOD="POST" class="formulario__register">
                        <img src="assets/images/EVLOGO.png" alt="Logo de EV" style="width:  50px; height: 55px; margin-bottom: 20px; align-self: center;">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="identificacion" pattern="[0-9-]{1,20}" name="id">
                        <input type="text" placeholder="nombre" name="nombre">
                        <input type="email" placeholder="correo " name="correo">
                        <input type="text" placeholder="usuario" name="usuario">
                        <input type="password" placeholder="contraseña" name="contraseña">
                        <button style="height: 40px; width: 100%;">Regístrarse</button>
                        
                    </form>
                    
                </div>
            </div>

    </main>

<script src="assets/js/script.js"></script>
</body>
</html>