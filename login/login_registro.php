<?php
/* Aquí irían las conexiones y lógica PHP necesaria */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión o Registrarse</title>
    <link rel="stylesheet" href="login_registro.css">
    <link rel="stylesheet" href="../css/headeryfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="../js/login.js"></script>
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
                        <li><a class="dropdown-item" href="login_registro.php">Iniciar Sesion y/o Registrarme</a></li>
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
            <a class="nav-link text-white" href="../html/nosotros.php">La empresa</a>
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
            <a class="nav-link text-white" href="../html/productos.php">
              Productos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../html/contacto.php">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="tarjeta">
    <main class="autenticacion">
        <nav class="autenticacion__navegacion">
            <a href="#" class="autenticacion__enlace autenticacion__enlace--activo">INICIAR SESIÓN</a>
            <a href="#" class="autenticacion__enlace">REGISTRARME</a>
        </nav>
        
        <!-- Formulario de Inicio de Sesión -->
        <form class="autenticacion__formulario" method="POST" action="procesar_login.php">
            <div class="autenticacion__grupo">
                <label class="autenticacion__etiqueta" for="correo">
                    Nombre de usuario o correo electrónico *
                </label>
                <input 
                    class="autenticacion__input" 
                    type="text" 
                    id="correo" 
                    name="correo" 
                    required
                    autocomplete="username"
                >
            </div>
            
            <div class="autenticacion__grupo">
                <label class="autenticacion__etiqueta" for="contrasena">
                    Contraseña *
                </label>
                <input 
                    class="autenticacion__input" 
                    type="password" 
                    id="contrasena" 
                    name="contrasena" 
                    required
                    autocomplete="current-password"
                >
            </div>
            
            <div class="autenticacion__recordar">
                <input type="checkbox" id="recordar" name="recordar">
                <label for="recordar">Recordarme</label>
            </div>
            
            <button type="submit" class="autenticacion__boton">
                Iniciar sesión
            </button>
            
            <div class="autenticacion__recuperar">
                <a href="#" class="autenticacion__recuperar-enlace">
                    ¿Perdiste tu contraseña?
                </a>
            </div>
        </form>

        <!-- Formulario de Registro (Oculto por defecto) -->
        <form class="autenticacion__formulario autenticacion__formulario--oculto" method="POST" action="procesar_registro.php">
            
            <div class="autenticacion__grupo">
                <label class="autenticacion__etiqueta" for="nuevo_usuario">
                    Usuario *
                </label>
                <input 
                    class="autenticacion__input" 
                    type="text" 
                    id="nuevo_usuario" 
                    name="nuevo_usuario" 
                    required
                >
            </div>
            
            <div class="autenticacion__grupo">
                <label class="autenticacion__etiqueta" for="nuevo_correo">
                    Correo electrónico *
                </label>
                <input 
                    class="autenticacion__input" 
                    type="email" 
                    id="nuevo_correo" 
                    name="nuevo_correo" 
                    required
                >
            </div>
            
            <div class="autenticacion__grupo">
                <label class="autenticacion__etiqueta" for="nueva_contrasena">
                    Contraseña *
                </label>
                <input 
                    class="autenticacion__input" 
                    type="password" 
                    id="nueva_contrasena" 
                    name="nueva_contrasena" 
                    required
                >
            </div>
        
            <button type="submit" class="autenticacion__boton">
                Registrarse
            </button>
        </form>
    </main>
</div>

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
            Ofrecemos repuestos y accesorios de alta calidad para un rendimiento superior. Confiamos en nuestras marcas y experiencia para brindarte el mejor servicio y satisfacción. Tu moto está en buenas manos con nosotros.
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
    <a class="text-reset fw-bold" href="Politicas.html#terminos-condiciones" target="_blank">JIMDUR Repuestos</a>
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
</body>
</html>