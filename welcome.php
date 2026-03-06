<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tu CSS -->
    <link rel="stylesheet" href="assets/css/">
</head>


<style>
    .welcome {
        background-image: url(assets/images/bg13.jpg); 
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        
    }

    .navbar-welcome {
        background-color: #1d1c1ca9 !important;
        backdrop-filter: blur(8px);
        color:  #ffffff;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;


    }

    .welcome-content {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;

        padding-top: 80px; /* Para evitar que el contenido quede debajo de la navbar */
        
        /* Anm fade*/
        text-align: center;
        color: white;
        opacity: 0;
        animation: fadeIn 1.5s ease-in-out forwards;
    }

    .card-dark {
        background-color: #343a40;
        color: #fff;
        border: none;
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-dark:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .dropdown-menu {
        background: #1c1c1c;
        border-radius: 12px;
    }

    .dropdown-item {
        color: #ccc;
    }

    .dropdown-item:hover {
        background: transparent;
        color: #ffc107;
    }

    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }
    @keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px); /* opcional: pequeño movimiento */
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}



</style>

<body class="welcome">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-welcome px-2 fixed-top">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand fw-bold d-flex align-items-center " href="welcome.php">
                <img src="assets/images/ICON.png" alt="Icon" style="height: 30px;"> 
            </a>

            <!-- Botón responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="background-color: orangered;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  " style="background-color: #3533339c; border-radius: 10px" id="navbarNav">

                <!-- 👇 IZQUIERDA (pegado al logo) -->
                <ul class="navbar-nav ms-3">
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" style="color: orangered; border-radius: 5px; padding: 5px 10px;">
                            Individuals
                        </a>

                        <div class="dropdown-menu w-100 mt-0 border-0 shadow">
                            <div class="container py-4">
                                <div class="row">

                                    <div class="col-md-4">
                                        <h6 class="fw-bold" style="color: orangered">Individuals</h6>
                                        <a class="dropdown-item" href="#">What we do</a>
                                        <a class="dropdown-item" href="#">Try for free</a>
                                        <a class="dropdown-item" href="#">View all plans</a>
                                    </div>

                                    <div class="col-md-4">
                                        <h6 class="fw-bold" style="color: orangered">Plans</h6>
                                        <a class="dropdown-item" href="#">Core Tech</a>
                                        <a class="dropdown-item" href="#">AI+</a>
                                        <a class="dropdown-item" href="#">Cloud+</a>
                                    </div>

                                    <div class="col-md-4">
                                        <h6 class="fw-bold" style="color: orangered">Features</h6>
                                        <a class="dropdown-item" href="#">Skill assessments</a>
                                        <a class="dropdown-item" href="#">Labs</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <!-- 👇 DERECHA (empujado automáticamente) -->
                <div class="ms-auto">
                    <a href="index.php" class="btn px-4" style="background-color: rgb(255, 98, 7); color: black; border-radius: 5px; color: white;">
                        Iniciar sesión
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <!-- CONTENIDO -->
    <section class="welcome-content">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Bienvenido 👋</h1>
            <p class="lead mb-4">Tu panel ya está listo para comenzar.</p>

            <div class="row g-4 mt-3">
                <div class="col-md-4">
                    <div class="card card-dark p-4">
                        <h5>Gestión</h5>
                        <p>Administra tus datos fácilmente.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-dark p-4">
                        <h5>Reportes</h5>
                        <p>Visualiza estadísticas en tiempo real.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-dark p-4">
                        <h5>Configuración</h5>
                        <p>Personaliza tu experiencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>