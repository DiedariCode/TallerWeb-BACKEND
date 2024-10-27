<?php
session_start(); // Inicia la sesión

include '../includes/db.php'; // Incluye el archivo de conexión a la base de datos

// Verifica si se han enviado los datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Prepara la consulta para buscar al usuario
    $sql = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica si se encontró un usuario con el correo proporcionado
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        // Verifica la contraseña
        if (password_verify($contrasena, $usuario['contrasena'])) {
            // La contraseña es correcta, inicia la sesión
            $_SESSION['usuario_id'] = $usuario['id']; // Guarda el ID del usuario en la sesión
            $_SESSION['usuario_nombre'] = $usuario['Usuario']; // Guarda el nombre del usuario en la sesión
            $_SESSION['usuario_correo'] = $usuario['correo']; // Guarda el correo en la sesión

            // Redirige a la página de inicio o a la página deseada
            header("Location: ../index.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta. Intenta nuevamente.";
        }
    } else {
        // No se encontró el usuario
        echo "No se encontró un usuario con ese correo electrónico.";
    }

    $stmt->close();
}

$conn->close();
?>