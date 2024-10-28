<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/headeryfooter.css">
    <link rel="stylesheet" href="../css/nosotros.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>Nosotros - JIMDUR Repuestos</title>
    <style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    .search-button {
        background-color: #B22222;
        border-radius: 0 25px 25px 0;
        color: white;
    }

    .navbar-custom {
        background-color: #B22222;
    }

    .containerHeader {
        margin-left: 15px;
        margin-right: 15px;
        max-width: 100%;
    }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="bg-white shadow py-3">
        <div class="containerHeader d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <div class="d-flex align-items-center">
                <img src="../img/Logo Jimdur/logo_Jimdur_pequeno.png" alt="Logo Jimdur" style="width: 100px;">
            </div>

            <!-- Search Bar -->
            <div class="input-group w-50">
                <input type="text" class="form-control" placeholder="Buscar productos...">
                <button class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
            </div>

            <!-- Cart and Account -->
            <div class="d-flex align-items-center">
                <!-- Cart Icon -->
                <button class="btn position-relative me-3">
                    <i class="fas fa-shopping-cart fa-lg"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        1
                    </span>
                </button>

                <!-- Account Dropdown -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="accountDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle fa-lg me-2"></i>
                        <?php
                    session_start(); // Asegúrate de iniciar la sesión
                    if (isset($_SESSION['usuario_nombre'])) {
                        echo "Hola, " . htmlspecialchars($_SESSION['usuario_nombre']);
                    } else {
                        echo "Hola, Inicia sesión";
                    }
                    ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                        <?php if (isset($_SESSION['usuario_nombre'])): ?>
                        <li><a class="dropdown-item" href="#">Mi cuenta</a></li>
                        <li><a class="dropdown-item" href="../includes/cerrar_sesion.php">Cerrar sesión</a></li>
                        <?php else: ?>
                        <li><a class="dropdown-item" href="../login/login_registro.php">Iniciar Sesion y/o
                                Registrarme</a></li>
                        <li><a class="dropdown-item" href="#">Mi cuenta</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="nosotros.php">La empresa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="modeloDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Modelo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="modeloDropdown">
                            <li><a class="dropdown-item" href="#">Modelo 1</a></li>
                            <li><a class="dropdown-item" href="#">Modelo 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white" href="productos.php">
                            Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="banner">
            <div class="contenedor">
                <h2 class="titulo-caratula">SOBRE NOSOTROS</h2>
                <p class="titulo-caratula titulo--parrafo">Pasión por las motos, compromiso con calidad</p>
            </div>
        </section>
        <section class="nuestra-historia">
            <div class="contenedor">
                <h2><span class="negro">NUESTRA </span><span class="rojo">HISTORIA</span></h2>
                <P>"En Jimdur E.I.R.L. cada repuesto cuenta una historia y cada cliente es parte de la nuestra."</P>
                <div class="contenido-historia">
                    <div class="texto">
                        <p>Fundada en la ciudad de Piura, Jimdur E.I.R.L. nace con el compromiso de ofrecer productos de
                            calidad para los amantes de las motocicletas. Desde nuestros inicios, hemos centrado
                            nuestros esfuerzos en satisfacer las necesidades de nuestros clientes, brindando una amplia
                            gama de repuestos, piezas, y accesorios para todas las marcas y modelos del mercado. A lo
                            largo de los años, nos hemos consolidado como una empresa líder en el sector, destacándonos
                            por nuestra pasión por el servicio al cliente.</p>
                        <p>Luis Jimenez</p>
                        <p>Gerente General</p>
                    </div>
                    <div class="imagen">
                        <img src="../img/retrato-elegante.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="mision">
            <div class="contenedor">
                <div class="contenido">
                    <h2><span class="blanco">NUESTRA </span><span class="rojo">MISIÓN</span></h2>
                    <p>Guiados por la pasión y el compromiso, trabajamos cada día para ser la primera opción de nuestros
                        clientes
                    <p>
                    <p>"Nuestra misión es proporcionar a nuestros clientes productos de las mejores marcas, reconocidas
                        por su calidad y durabilidad, asegurando que encuentren exactamente lo que necesitan para sus
                        motocicletas. Nos esforzamos por brindar un servicio excepcional, personalizado y cercano, que
                        haga que cada visita a nuestra tienda sea una experiencia satisfactoria, basada en la confianza
                        y la excelencia."</p>
                </div>
                <div class="imagen">
                </div>
            </div>
        </section>
        <section class="vision">
            <div class="contenedor">
                <div class="imagen"></div>
                <div class="contenido">
                    <h2><span class="blanco">NUESTRA </span><span class="negro">VISIÓN</span></h2>
                    <p>Miramos al futuro con la determinación de seguir creciendo y liderando el mercado
                    <p>
                    <p>"Nos proyectamos como una de las empresas más competitivas del sector motero en nuestra región,
                        cumpliendo y superando las expectativas de nuestros clientes. Para el 2023, aspiramos a
                        consolidarnos como uno de los principales distribuidores mayoristas en el mercado piurano, y
                        para el 2028, convertirnos en importadores de productos con nuestra propia marca, expandiendo
                        nuestra presencia en diversos mercados a nivel nacional."</p>
                </div>
            </div>
            </div>
        </section>
        <div class="proveedores">
            <section class="proveedores__section">
                <div class="proveedores__contenedor">
                    <h2 class="proveedores__titulo"> <span class="proveedores__titulo-negrita">Nuestros</span>
                        proveedores</h2>
                    <p class="proveedores__texto">Trabajamos con proveedores líderes en la industria para asegurarte
                        repuestos y accesorios de la más alta calidad.</p>
                </div>
                <div class="proveedores__logos">
                    <div class="proveedores__tarjeta">
                        <img loading="lazy" src="../img/marcas/BAJAJ.png" alt="BAJAJ">
                    </div>
                    <div class="proveedores__tarjeta">
                        <img loading="lazy" src="../img/marcas/Hero.png" alt="Hero">
                    </div>
                    <div class="proveedores__tarjeta">
                        <img loading="lazy" src="../img/marcas/Honda.png" alt="Honda">
                    </div>
                    <div class="proveedores__tarjeta">
                        <img loading="lazy" src="../img/marcas/Kawasaki.png" alt="Kawasaki">
                    </div>
                    <div class="proveedores__tarjeta">
                        <img loading="lazy" src="../img/marcas/ktm.png" alt="KTM">
                    </div>
                    <div class="proveedores__tarjeta">
                        <img loading="lazy" src="../img/marcas/yamaha.png" alt="Yamaha">
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-light" style="background-color: rgb(35, 35, 35);">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Conéctate con nosotros en las redes sociales:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://www.facebook.com/" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/" class="me-4 text-reset">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://www.youtube.com/" class="me-4 text-reset">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">SOBRE JIMDUR</h6>
                        <p>
                            Ofrecemos repuestos y accesorios de alta calidad para un rendimiento superior. Confiamos en
                            nuestras
                            marcas y experiencia para brindarte el mejor servicio y satisfacción. Tu moto está en buenas
                            manos con
                            nosotros.
                        </p>
                        <p style="font-size: 12px;">&copy; Jimdur 2024</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">ENLACES</h6>
                        <p>
                            <a href="../index.html" class="text-reset">Inicio</a>
                        </p>
                        <p>
                            <a href="../html/productos.html" class="text-reset">Productos</a>
                        </p>
                        <p>
                            <a href="../html/nosotros.html" class="text-reset">Nosotros</a>
                        </p>
                        <p>
                            <a href="../html/contacto.html" class="text-reset">Contáctanos</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Contact -->
                        <h6 class="text-uppercase fw-bold mb-4">CONTACTOS</h6>
                        <p>
                            <i class="fas fa-phone me-3"></i>
                            <a href="tel:123456789" class="text-reset">123456 789</a>
                        </p>
                        <p>
                            <i class="fas fa-phone me-3"></i>
                            <a href="tel:987654321" class="text-reset">987654 321</a>
                        </p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="mailto:jimdur@gmail.com" class="text-reset">jimdur@gmail.com</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Derechos Reservados:
            <a class="text-reset fw-bold" href="Politicas.html#terminos-condiciones" target="_blank">JIMDUR
                Repuestos</a>
        </div>
        <style>
        .text-reset {
            text-decoration: none;
        }
        </style>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <div class="whatsapp">
        <div class="whatsapp__texto">
            <span class="whatsapp__ayuda">¿Necesitas ayuda?</span>
            <span class="whatsapp__status">Estamos en línea</span>
        </div>
        <a href="https://wa.me/968108776" target="_blank" class="whatsapp__boton">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <script>
    function alternarMenu() {
        const enlacesNavegacion = document.querySelector('.enlaces-navegacion');
        enlacesNavegacion.classList.toggle('nav-activo');
    }
    </script>
</body>

</html>