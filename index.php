<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzajon</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-lux.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/all.min.css">
    <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container px-2 px-md-0">
            <a href="#header" class="navbar-brand nav-link-scroll">Pizzajon</a>
            <button class="navbar-toggler" id="navbar-toggler" data-toggle="collapse" data-target="#navbar-content" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav ml-auto px-3 px-md-0">
                    <!-- <li class="nav-item"><a href="#header" class="nav-link">Inicio</a></li> -->
                    <li class="nav-item"><a href="#menu" class="nav-link nav-link-scroll"><i class="fa fa-book-open mr-1"></i>Menú</a></li>
                    <li class="nav-item"><a href="#contacto" class="nav-link nav-link-scroll"><i class="fab fa-whatsapp mr-1"></i>Contacto</a></li>
                    <li class="nav-item"><a href="#mapa" class="nav-link nav-link-scroll"><i class="fa fa-map-marker-alt mr-1"></i>Ubicación</a></li>
                    <!-- <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                Acceder
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Iniciar Sesión</a>
                                <a class="dropdown-item" href="#">Registrarse</a>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header id="header" class="py-1 full-height">
        <img src="assets/img/logo.jpg"></img>
    </header>
    <!-- Comentario -->
    <section id="section" class="bg-primary">
        <div class="container text-center p-5">
            <p class="h4 text-white">
                ¡Disfruta de las mejores Pizzas!
            </p>
            <cite class="h5 text-white">- Pizzajon</cite>
        </div>
    </section>
    <!-- Menú -->
    <section class="py-3 ">
        <div class="container">
            <div class="row mb-md-5 d-flex justify-content-center">
                <h3 class="display-4 mb-0">Menú</h3>
            </div>
            <div id="menu" class="row full-height">
                <div class="col-md-6">
                    <div class="noticia-img d-flex justify-content-center">
                        <img src="assets/img/celular 1.png" alt="Smartphone" width="100%">
                    </div>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="noticia-descripcion">
                        <h3>Lo más nuevo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eligendi recusandae
                            eaque rem alias, enim, omnis amet dicta cupiditate sapiente, explicabo quod corrupti est
                            voluptatum nulla tenetur accusantium repudiandae. Necessitatibus!</p>
                        <a href="#1" class="btn btn-outline-primary px-3 py-2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contacto -->
    <section id="contacto" class="bg-primary py-3 text-white p-1">
        <div class="container my-3 ">
            <div class="row d-flex justify-content-center align-items-center">
                <a class="btn btn-whatsapp m-1 p-2" href="https://wa.me/584261587389/?text=¡Hola Pizzajon!" target="_blank">
                    <img src="assets/icons/whatsapp.png"></img>
                    <span class="h6 font-weight-bold text-white">¡Haz tu Pedido!</span>
                </a>
                <a class="btn btn-instagram m-1 p-2" href="https://www.instagram.com/pizzajonrestobar/" target="_blank">
                    <img src="assets/icons/instagram.png"></img>
                    <span class="h6 font-weight-bold text-white">¡Síguenos!</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Mapa -->
    <section id="mapa" class="py-5 full-height">
        <div class="container">
            <div class="row mb-md-5 d-flex justify-content-center">
                <h3 class="display-4 mb-0">Ubicación</h3>
            </div>
            <div id="map" class="row">

            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer id="footer" class="bg-black text-white">
        <div class="container p-4">
            <p class="lead text-center">Pizzajon - Copyright &copy; 2021</p>
            <div class="d-flex justify-content-center">
                <i class="fab fa-facebook fa-2x mx-1"></i>
                <i class="fab fa-instagram fa-2x mx-1"></i>
                <i class="fab fa-twitter fa-2x mx-1"></i>
                <i class="fab fa-youtube fa-2x mx-1"></i>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="assets/js/navbar.js"></script> 
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/map.js"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCedg2aWimiiG13uUtrriVMqFbMibZCJhk&callback=iniciarMap"></script>
</body>

</html>