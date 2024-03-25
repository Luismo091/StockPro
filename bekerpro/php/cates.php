<?php
require 'conect.php';
try {
    // Consulta para obtener las categorías
    $sql = "SELECT id, nombre,imagen FROM Tipos_Gasto";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch all categories
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Devolver los resultados en formato JSON
    echo json_encode($categories);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>