<?php
    session_start();


    if(!isset($_SESSION['usuario'])) {
        echo '<script>
            alert("Por favor, inicie sesión para acceder a esta página.");
            window.location.href = "index.php";
            </script>';

        session_destroy();
        die();

        
    }
    //aqui debo asegurarme de que tengo que poner session_destroy();


?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css?v=<?php echo filemtime(__DIR__ . '/assets/css/estilos.css'); ?>">
</head>




<body class="home">

    <nav class="navbar navbar-dark navbar-expand-lg px-2">
        
        
        <a class="navbar-brand fw-bold text-gradient" href="welcome.php" style="color: orange;"> 
            <img src="assets/images/ICON.png" class="img-logo" alt="Logo de EV" >
        </a>
        <div class="ms-auto text-white">
            Bienvenido, <strong>Usuario</strong>
            <a href="php/cerrar_sesion.php" class="btn btn-sm btn-outline ms-3" style="background: orangered;">Cerrar sesión</a>
        </div>
    </nav>

    <div class="container-fluid px-2 py-5">

        <div class="home-card text-center p-5 mb-5">
            <h1 class="fw-bold">Bienvenido👋</h1>
            <p class="text" style="color: white">Listo para continuar tu progreso</p>
            <button class="btn btn-warning px-4 mt-3 glow-btn">Empezar</button>  
        </div>

        <div class="row g-2" style="text-align: center;">
            <div class="col-md-4">
                <div class="dashboard-card-1 p-4" >
                    <i class="bi bi-folder-fill fs-1 text-info"></i>
                    <h4 class="mt-3">Mis Registros</h4>
                    <p class="text" style="color: rgb(3, 191, 238);">Administra tu información</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card-2 p-4">
                    <i class="bi bi-bar-chart-fill fs-1 text-primary"></i>
                    <h4 class="mt-3">Estadísticas</h4>
                    <p class="text" style="color: hsl(209, 100%, 51%);" >Visualiza tu actividad</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card-3 p-4">
                    <i class="bi bi-gear-fill fs-1 text-warning"></i>
                    <h4 class="mt-3">Configuración</h4>
                    <p class="text" style="color: rgb(255, 218, 11);">Ajusta tu perfil</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card-4 p-4">
                    <i class="bi bi-shield-fill-plus fs-1 text-success"></i>
                    <h4 class="mt-3">Shields</h4>
                    <p class="text" style="color: rgb(42, 216, 114);">Configura datos de seguridad</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card-5 p-4">
                    <i class="bi bi-file-text-fill fs-1 text-ligt"></i>
                    <h4 class="mt-3">Reportes</h4>
                    <p class="text" style="color: rgb(255, 79, 255);">Visualiza las novedades del sistema</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card-6 p-4">
                    <i class="bi-database-fill fs-1 text-danger"></i>
                    <h4 class="mt-3">Base de datos</h4>
                    <p class="text" style="color: rgb(255, 117, 117);">Administracion y estructuracion logica</p>         
                </div>
            </div>
        </div>

    </div>
    
     <script src="assets/js/script.js"></script>
</body>
</html>