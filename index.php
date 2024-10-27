<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/headeryfooter.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>JIMDUR EIRL</title>
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
        /* Header | MODO CELULAR */
        @media (max-width: 768px) {
        .containerHeader {
            flex-direction: column;
            align-items: flex-start;
        }

        .input-group {
            width: 100%;
            margin: 10px;
        }

        .btn.position-relative.me-3 {
            margin-right: 0;
        }
    }
    </style>
</head>

<body>
<!-- Header -->
<header class="bg-white shadow py-3">
    <div class="containerHeader d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <div class="d-flex align-items-center">
            <img src="img/Logo Jimdur/logo_Jimdur_pequeno.png" alt="Logo Jimdur" style="width: 100px;">
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
                    10
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
                        <li><a class="dropdown-item" href="includes/cerrar_sesion.php">Cerrar sesión</a></li>
                    <?php else: ?>
                        <li><a class="dropdown-item" href="login/login_registro.php">Iniciar Sesion y/o Registrarme</a></li>
                        <li><a class="dropdown-item" href="#">Mi cuenta</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header -->
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
                        <a class="nav-link text-white" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="html/nosotros.php">La empresa</a>
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
                        <a class="nav-link text-white" href="html/productos.php">
                            Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="html/contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- SECCIÓN MOTOCICLETA -->
        <div class="seccion-moto">
            <div class="seccion-moto__contenedor">
                <h2 class="seccion-moto__contenedor --titulo">REPUESTOS ORIGINALES Y DE CALIDAD</h2>
                <p class="seccion-moto__contenedor --descripcion">
                    Ofrecemos una amplia gama de repuestos originales diseñados para maximizar el rendimiento <br
                        class="salto-linea"> y la vida útil de tu moto para que disfrutes de la carretera con total
                    confianza
                </p>
                <button onclick="location.href='html/productos.html'" class="seccion-moto__contenedor --boton">VER
                    PRODUCTOS</button>
            </div>
        </div>

        <!-- SUB ENCABEZADO-->
        <nav class="sub-encabezado">
            <a href="#ventajas">VENTAJAS</a>
            <a href="#servicios">SERVICIOS</a>
            <a href="#reseñas">RESEÑAS</a>
            <a href="#proveedores">PROVEEDORES</a>
        </nav>

        <!-- SECCIÓN NUESTRAS VENTAJAS CON CSS GRID -->
        <section class="ventajas" id="ventajas">
            <h2 class="ventajas__titulo">NUESTRAS <span>VENTAJAS</span></h2>
            <p class="ventajas__descripcion">
                Encuentra todo lo que necesitas para tu moto, con la confianza de estar eligiendo lo mejor.
            </p>
            <div class="ventajas__grid">
                <div class="ventaja">
                    <div class="ventaja__icono">
                        <img src="img/iconos/calidad.png" alt="Calidad">
                    </div>
                    <h3 class="ventaja__titulo">CALIDAD</h3>
                    <p class="ventaja__texto">
                        Repuestos originales que <br> garantizan un rendimiento <br>
                        y durabilidad <br> excepcionales.
                    </p>
                </div>
                <div class="ventaja">
                    <div class="ventaja__icono --circulo-rojo">
                        <img src="img/iconos/experiencia.png" alt="Experiencia">
                    </div>
                    <h3 class="ventaja__titulo">EXPERIENCIA</h3>
                    <p class="ventaja__texto">
                        Más de 5 años dedicados <br> al motociclismo, con un <br>
                        equipo experto que <br> conoce cada detalle.
                    </p>
                </div>
                <div class="ventaja">
                    <div class="ventaja__icono --circulo-rojo">
                        <img src="img/iconos/satisfaccion.png" alt="Satisfacción">
                    </div>
                    <h3 class="ventaja__titulo">SATISFACCIÓN</h3>
                    <p class="ventaja__texto">
                        Nuestro compromiso es <br> superar tus expectativas <br>
                        en cada compra.
                    </p>
                </div>
                <div class="ventaja">
                    <div class="ventaja__icono --circulo-rojo">
                        <img src="img/iconos/soporte.png" alt="Soporte">
                    </div>
                    <h3 class="ventaja__titulo">SOPORTE</h3>
                    <p class="ventaja__texto">
                        Asesoría personalizada y <br> atención postventa para <br>
                        asegurarte la mejor <br> experiencia.
                    </p>
                </div>
            </div>
        </section>

        <!-- SECCIÓN 'NUESTROS SERVICIOS' CON CSS GRID -->
        <section class="servicios" id="servicios">
            <h2 class="servicios__titulo">NUESTROS <span>SERVICIOS</span></h2>
            <p class="servicios__descripcion">
                Ofrecemos una amplia gama de servicios diseñados para cubrir todas las necesidades de tu moto.
            </p>

            <div class="servicios__grid">
                <div class="servicio">
                    <img src="img/respuestos.jpg" class="img-servicios" alt="Venta de Repuestos y Accesorios">
                    <h4 class="titulo-serv">Venta de Repuestos y <br> Accesorios </h4>
                    <p class="descrip-serv">
                        Surtido amplio de piezas y <br> accesorios originales y de <br>
                        calidad para diferentes <br> modelos de motos.
                    </p>
                </div>

                <div class="servicio">
                    <img src="img/asesoria.jpg" class="img-servicios" alt="Asesoría Técnica Especializada">
                    <h4 class="titulo-serv">Asesoría Técnica <br> Especializada</h4>
                    <p class="descrip-serv">
                        Asesoramiento profesional <br> para elegir los repuestos y <br>
                        accesorios más adecuados <br> según las necesidades de <br> tu moto.
                    </p>
                </div>

                <div class="servicio">
                    <img src="img/instlacion.jpg" class="img-servicios" alt="Instalación de Repuestos">
                    <h4 class="titulo-serv">Instalación de <br> Repuestos</h4>
                    <p class="descrip-serv">
                        Instalación profesional de <br> piezas y accesorios para <br>
                        asegurar un rendimiento <br> óptimo.
                    </p>
                </div>

                <div class="servicio">
                    <img src="img/envio.jpg" class="img-servicios" alt="Servicio de Envío">
                    <h4 class="titulo-serv">Servicio de Envío</h4>
                    <p class="descrip-serv">
                        Entrega a domicilio de <br> repuestos y accesorios, <br>
                        con opciones de envío <br> rápido y seguro.
                    </p>
                </div>
            </div>
        </section>

        <!-- SECCIÓN 'RESEÑAS DE CLIENTES' -->
        <section class="reseñas" id="reseñas">
            <h2 class="reseñas__titulo"> <span>RESEÑAS</span> DE CLIENTES </h2>
            <p class="reseñas__descripcion">Lo que más nos motiva es la satisfacción de nuestros clientes</p>
            <div class="reseñas__grid">
                <div class="reseñas__item">
                    <div class="img-reseñas --carlos"></div>
                    <p class="nombres">Carlos Ramírez</p>
                    <div class="estrellas"></div>
                    <div class="opiniones">
                        "Compré varios repuestos para <br> mi moto y quedé impresionado <br>
                        con la calidad. Además, el equipo <br> fue muy atento y me ayudó a <br>
                        elegir las piezas adecuadas. <br> Definitivamente volveré a <br>
                        comprar aquí."
                    </div>
                </div>
                <div class="reseñas__item">
                    <div class="img-reseñas --laura"></div>
                    <p class="nombres">Laura Gonzáles</p>
                    <div class="estrellas"></div>
                    <div class="opiniones">
                        "La atención al cliente es <br> excepcional. Me asesoraron en <br>
                        todo momento y me enviaron los <br> repuestos rápidamente. Mi moto <br>
                        quedó como nueva, muy <br> recomendable."
                    </div>
                </div>
                <div class="reseñas__item">
                    <div class="img-reseñas --javier"></div>
                    <p class="nombres">Javier López</p>
                    <div class="estrellas"></div>
                    <div class="opiniones">
                        "Lo mejor es la variedad y la <br> disponibilidad de piezas. <br>
                        originales. Encontré todo lo que <br> necesitaba en un solo lugar, y a <br>
                        precios justos. El servicio de <br> instalación también fue <br>
                        excelente."
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN 'NUESTROS PROVEEDORES' -->
        <section class="proveedores" id="proveedores">
            <h2 class="proveedores__titulo">NUESTROS <span>PROVEEDORES</span></h2>
            <p class="proveedores__descripcion">
                Trabajamos con proveedores líderes en la industria para asegurarte repuestos y accesorios de la <br
                    class="salto-linea"> más alta calidad
            </p>
            <div class="proveedores__grid">
                <div class="proveedores__marca"><img src="img/marcas/yamaha.png" class="img-marcas"></div>
                <div class="proveedores__marca"><img src="img/marcas/Honda.png" class="img-marcas"></div>
                <div class="proveedores__marca"><img src="img/marcas/ktm.png" class="img-marcas"></div>
                <div class="proveedores__marca"><img src="img/marcas/Kawasaki.png" class="img-marcas"></div>
                <div class="proveedores__marca"><img src="img/marcas/BAJAJ.png" class="img-marcas"></div>
                <div class="proveedores__marca"><img src="img/marcas/Hero.png" class="img-marcas"></div>
            </div>
        </section>

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
                            nuestras marcas y experiencia para brindarte el mejor servicio y satisfacción. Tu moto está
                            en buenas manos con nosotros.
                        </p>
                        <p style="font-size: 12px;">&copy; Jimdur 2024</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">ENLACES</h6>
                        <p>
                            <a href="index.html" class="text-reset">Inicio</a>
                        </p>
                        <p>
                            <a href="html/productos.html" class="text-reset">Productos</a>
                        </p>
                        <p>
                            <a href="html/nosotros.html" class="text-reset">Nosotros</a>
                        </p>
                        <p>
                            <a href="html/contacto.html" class="text-reset">Contáctanos</a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</body>

</html>