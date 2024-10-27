<?php
// db.php
$servername = "localhost";
$username = "root"; // Cambia según tu configuración
$password = "";     // Cambia según tu configuración
$dbname = "repuestos_jimdur"; // Cambia según el nombre de tu BD

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
