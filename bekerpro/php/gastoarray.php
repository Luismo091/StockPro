<?php
require 'conect.php';

$fechaActual = date('Y-m-d');

// Preparar la consulta SQL para obtener los gastos
$sql = "SELECT g.id, g.fecha, g.descripcion, g.monto, tg.nombre AS tipo_gasto, tg.imagen 
        FROM Gastos g
        INNER JOIN Tipos_Gasto tg ON g.id_tipo_gasto = tg.id where g.fecha = '$fechaActual' order by g.id ASC";

// Ejecutar la consulta
$stmt = $conn->query($sql);

// Fetch all results
$gastos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Devolver los resultados en formato JSON
echo json_encode($gastos);

?>
