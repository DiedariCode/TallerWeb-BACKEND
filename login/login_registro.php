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
    <script src="../js/login.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="barra-navegacion">
                <div class="logo">
                    <a href="../index.html">
                        <img class="logo_jimdur" src="../img/Logo Jimdur/logo_Jimdur_pequeno.png" alt="">
                    </a>
                </div>
                <ul class="enlaces-navegacion">
                    <li><a href="../index.html">Inicio</a></li>
                    <li><a href="productos.html">Productos</a></li>
                    <li><a href="nosotros.html">Nosotros</a></li>
                    <li><a href="contacto.html" class="activo">Contacto</a></li>
                </ul>
                <form class="formulario-busqueda" action="#">
                    <input type="text" placeholder="Buscar...">
                    <button type="submit" class="boton-busqueda">
                        <img class="imagen-boton" src="../img/iconos/buscar.png" alt="Buscar">
                    </button>
                </form>
                <!-- Botón menú hamburguesa -->
                <div class="hamburguesa" onclick="alternarMenu()">
                    &#9776;
                </div>
            </div>
        </nav>
    </header>
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
                <label class="autenticacion__etiqueta" for="nueva_nombre">
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
                <label class="autenticacion__etiqueta" for="nuevo_usuario">
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
    <footer class="pie-pagina">
        <div class="pie-pagina__contenido">
            <section class="pie-pagina__seccion">
                <div class="pie-pagina__logo">
                    <h2 class="pie-pagina__titulo-logo">SOBRE JIMDUR</h2>
                    <img width="50px" src="../img/Logo Jimdur/logofooter-sinfondo.png" alt="JIMDUR Repuestos">
                    <p class="pie-pagina__descripcion">Nos dedicamos a ofrecerte una selección de repuestos y accesorios
                        de
                        la
                        más alta calidad para que disfrutes de un rendimiento superior en cada trayecto. Confiamos en
                        nuestras marcas y en nuestra experiencia para brindarte el mejor servicio y la satisfacción que
                        mereces. Tu moto está en buenas manos con nosotros.</p>
                    <p style="font-size: 12px;">&copy; Jimdur 2024</p>
                </div>
            </section>
            <div class="pie-pagina__linea-divisora"></div>
            <section class="pie-pagina__seccion">
                <div class="pie-pagina__enlaces">
                    <h3 class="pie-pagina__titulo">ENLACES</h3>
                    <ul class="pie-pagina__lista">
                        <li class="pie-pagina__lista-item"><a href="../index.html" class="pie-pagina__enlace">Inicio</a>
                        </li>
                        <li class="pie-pagina__lista-item"><a href="productos.html"
                                class="pie-pagina__enlace">Productos</a></li>
                        <li class="pie-pagina__lista-item"><a href="nosotros.html"
                                class="pie-pagina__enlace">Nosotros</a></li>
                        <li class="pie-pagina__lista-item"><a href="../html/contacto.html"
                                class="pie-pagina__enlace">Contactanos</a></li>
                        <li class="pie-pagina__lista-item"><a href="Politicas.html#terminos-condiciones"
                                class="pie-pagina__enlace" target="_blank">Terminos y condiciones</a></li>
                    </ul>
                </div>
            </section>
            <div class="pie-pagina__linea-divisora"></div>
            <section class="pie-pagina__seccion">
                <div class="pie-pagina__contactos">
                    <h3 class="pie-pagina__titulo">CONTACTOS</h3>
                    <ul class="pie-pagina__lista">
                        <li class="pie-pagina__lista-item">
                            <a href="tel:123456789" class="pie-pagina__enlace">
                                <i class="fas fa-phone"></i> 123456 789
                            </a>
                        </li>
                        <li class="pie-pagina__lista-item">
                            <a href="tel:987654321" class="pie-pagina__enlace">
                                <i class="fas fa-phone"></i> 987654 321
                            </a>
                        </li>
                        <li class="pie-pagina__lista-item">
                            <a href="mailto:jimdur@gmail.com" class="pie-pagina__enlace">
                                <i class="fas fa-envelope"></i> jimdur@gmail.com
                            </a>
                        </li>
                    </ul>
                    <h3 class="pie-pagina__titulo" style="padding-top: 20px; padding-bottom: 10px;">SÍGUENOS</h3>
                    <div class="pie-pagina__redes-sociales">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </footer>


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

    </script>
</body>
</html>