<?php
// funciones.php
function obtenerProductos($conn, $offset, $items_per_page) {
    $sql = "SELECT * FROM productos LIMIT $items_per_page OFFSET $offset";
    return $conn->query($sql);
}

function contarProductos($conn) {
    $sql = "SELECT COUNT(*) as total FROM productos";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}

?>
