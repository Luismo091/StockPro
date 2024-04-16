<?php
try {
    // Crear una nueva instancia de PDO
    require 'conect.php';

    // Obtener las fechas de inicio y fin de la semana actual
    $fechaInicio = date('Y-m-d', strtotime('last Sunday'));
    $fechaFin = date('Y-m-d', strtotime('next Saturday'));

    // Consulta SQL para obtener la suma de los tipos de gastos de la semana
    $query = "SELECT tg.nombre AS categoria, SUM(g.monto) AS total
              FROM Gastos g
              INNER JOIN Tipos_Gasto tg ON g.id_tipo_gasto = tg.id
              WHERE g.fecha BETWEEN :fechaInicio AND :fechaFin
              GROUP BY tg.nombre";

    // Preparar la consulta
    $stmt = $conn->prepare($query);

    // Vincular los parámetros a la consulta
    $stmt->bindParam(':fechaInicio', $fechaInicio);
    $stmt->bindParam(':fechaFin', $fechaFin);

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