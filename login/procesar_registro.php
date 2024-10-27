<?php
include '../includes/db.php';

$correo = $_POST['nuevo_correo'];
$contrasena = password_hash($_POST['nueva_contrasena'], PASSWORD_DEFAULT);
$nombre = $_POST['nuevo_usuario'];

$sql = "INSERT INTO usuarios (correo, contrasena, Usuario) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $correo, $contrasena, $nombre);

if ($stmt->execute()) {
    echo "Registro exitoso. Ahora puedes iniciar sesión.";
    header("Location: login_registro.php");
    exit();
} else {
    echo "Error en el registro.";
}

$stmt->close();
$conn->close();
?>
