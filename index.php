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
    <section class="bg-black text-white py-3">
        <div class="mb-md-1 d-flex justify-content-center">
            <h3 class="display-4 text-white mb-0">Menú</h3>
        </div>
        <div id="menu" class="d-flex flex-row full-height">
            <img src="assets/img/carta_1.png" />
            <img src="assets/img/carta_2.png" />
            <img src="assets/img/carta_3.png" />
            <img src="assets/img/carta_4.png" />
            <img src="assets/img/carta_5.png" />
            <img src="assets/img/carta_6.png" />
            <img src="assets/img/carta_7.png" />
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
    <section class="bg-black text-white py-5 full-height">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h3 class="display-4 text-white mb-1">Ubicación</h3>
            </div>
            <div class="row">
                <a class="btn btn-mapa p-2" href="https://goo.gl/maps/nGCEtR23io2ngjES8" target="_blank">
                    <img src="assets/icons/mapa.png"></img>
                    <span class="h6 font-weight-bold text-white">Abrir Mapa</span>
                </a>
            </div>
            <div id="mapa" class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d836.366946090561!2d-71.54637070367019!3d-33.01780433939609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689ddddd7a0b2df%3A0xc15319dd2d54538b!2zMzPCsDAxJzA0LjEiUyA3McKwMzInNDYuNyJX!5e0!3m2!1ses-419!2sve!4v1642464470935!5m2!1ses-419!2sve" width="600" height="450" allowfullscreen="true" loading="lazy" style="border:0; margin-left:auto; margin-right:auto; width:100vw; height:90vh;">
                </iframe>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer id="footer" class="bg-primary text-white">
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
    <!-- <script src="assets/js/map.js"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlbo7CZSPjM_lKNcP4Df5tvR9AoMM594E&callback=iniciarMap"></script> -->
</body>

</html>