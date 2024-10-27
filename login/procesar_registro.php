<?php
include '../includes/db.php';

$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (correo, contrasena) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $correo, $contrasena);

if ($stmt->execute()) {
    echo "Registro exitoso. Ahora puedes iniciar sesión.";
} else {
    echo "Error en el registro.";
}

$stmt->close();
$conn->close();
?>
