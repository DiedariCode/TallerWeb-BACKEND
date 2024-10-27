<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <h2>Recuperar Contraseña</h2>
    <form action="enviar_recuperacion.php" method="post">
        <label for="correo">Ingresa tu correo</label>
        <input type="email" id="correo" name="correo" required>
        <button type="submit">Enviar enlace de recuperación</button>
    </form>
</body>
</html>
