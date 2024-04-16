<?php
try {
    // Crear una nueva instancia de PDO
    require 'conect.php';

    $query = "SELECT DATE(fecha) AS dia, SUM(monto) AS total
              FROM Ventas
              GROUP BY DATE(fecha)
              ORDER BY DATE(fecha)";

    // Preparar la consulta
    $stmt = $conn->prepare($query);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener los resultados como un array asociativo
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Devolver los resultados en formato JSON
    header('Content-Type: application/json');
    echo json_encode($resultados);
} catch (PDOException $e) {
    // Manejar errores de conexión o consulta
    echo json_encode(['error' => $e->getMessage()]);
}
?>