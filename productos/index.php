<?php
// index.php
include '../includes/db.php'; // Incluir la conexión a la base de datos
include 'funciones.php';

// Configuración de la paginación
$items_per_page = 16; // Total de productos por página
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $items_per_page;

// Obtener productos
$result = obtenerProductos($conn, $offset, $items_per_page);
$total_products = contarProductos($conn);
$total_pages = ceil($total_products / $items_per_page);
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="producto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="icon" href="">
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
                        <li><a class="dropdown-item" href="../login/index.php">Iniciar Sesion y/o Registrarme</a></li>
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
                        <a class="nav-link text-white" href="index.php">
                            Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../contacto/index.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="container mt-5">
            <div class="row">
            <aside class="col-md-2">
    <h2 class="h4 font-weight-bold mb-4">Categorías</h2>
    <div class="btn-group-vertical" role="group" aria-label="Categorías">
        <button type="button" class="btn btn-danger btn-lg mb-2" onclick="filtrarCategoria('kits')">Kits en promoción</button>
        <button type="button" class="btn btn-danger btn-lg mb-2" onclick="filtrarCategoria('repuestos')">Repuestos</button>
        <button type="button" class="btn btn-danger btn-lg mb-2" onclick="filtrarCategoria('lubricantes')">Lubricantes</button>
        <button type="button" class="btn btn-danger btn-lg mb-2" onclick="filtrarCategoria('baterias')">Baterías</button>
        <button type="button" class="btn btn-danger btn-lg mb-2" onclick="filtrarCategoria('accesorios')">Accesorios</button>
        <button type="button" class="btn btn-danger btn-lg mb-2" onclick="filtrarCategoria('aros')">Aros y neumáticos</button>
        <button type="button" class="btn btn-danger btn-lg mb-2" onclick="filtrarCategoria('iluminacion')">Iluminación</button>
        <button type="button" class="btn btn-danger btn-lg mb-2" onclick="filtrarCategoria('insumos')">Insumos</button>
    </div>
</aside>

                <section class="col-md-9">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span>Mostrando 1-12 de <?php echo $result->num_rows; ?> resultados</span>
                        <select class="form-select w-auto">
                            <option>Orden por defecto</option>
                        </select>
                    </div>
                    <div class="container mt-5">
                        <div class="row">
                            <?php if ($result->num_rows > 0): ?>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <div class="col-md-3 mb-4">
                                        <div class="card border rounded-lg product-card">
                                            <div class="position-relative">
                                                <img alt="<?php echo htmlspecialchars($row['nombre']); ?>" class="card-img-top" src="<?php echo htmlspecialchars($row['imagen']); ?>" height="180" />
                                                <button class="btn btn-light position-absolute top-0 end-0 m-2">
                                                    <i class="far fa-heart"></i>
                                                </button>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-truncate"><?php echo htmlspecialchars($row['nombre']); ?></h5>
                                                <p class="card-text text-danger font-weight-bold">S/<?php echo number_format($row['precio'], 2); ?></p>
                                                <?php if (isset($row['precio_anterior'])): ?>
                                                    <p class="text-muted text-decoration-line-through">S/<?php echo number_format($row['precio_anterior'], 2); ?></p>
                                                <?php endif; ?>
                                                <div class="d-flex align-items-center">
                                                    <?php if (isset($row['stock']) && $row['stock'] > 0): ?>
                                                        <span class="text-success"><i class="fas fa-box"></i> En Stock</span>
                                                    <?php else: ?>
                                                        <span class="text-danger"><i class="fas fa-box"></i> Agotado</span>
                                                    <?php endif; ?>
                                                </div>
                                                <button class="btn btn-danger w-100 mt-3"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <div class="col-12">
                                    <p>No se encontraron productos.</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <?php if ($current_page > 1): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <li class="page-item <?php if ($i == $current_page) echo 'active'; ?>">
                                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php endfor; ?>

                                <?php if ($current_page < $total_pages): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="?page=<?php echo $current_page + 1; ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </section>
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
</body>

</html>