<?php

require 'conect.php';
// Obtener las fechas de inicio y fin de la semana actual
$fechaInicio = date('Y-m-d', strtotime('last Sunday'));
$fechaFin = date('Y-m-d', strtotime('next Saturday'));


// Consulta para obtener las ventas detalladas de la semana actual
$sql = "SELECT DATE(fecha) AS dia, descripcion, monto 
        FROM Ventas
        WHERE fecha BETWEEN :fechaInicio AND :fechaFin
        ORDER BY fecha";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':fechaInicio', $fechaInicio);
$stmt->bindParam(':fechaFin', $fechaFin);
$stmt->execute();

// Crear un array para almacenar las ventas por día
$ventasPorDia = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $dia = $row["dia"];
    if (!isset($ventasPorDia[$dia])) {
        $ventasPorDia[$dia] = array();
    }
    $ventasPorDia[$dia][] = array(
        "descripcion" => $row["descripcion"],
        "monto" => $row["monto"]
    );
}

// Devolver las ventas por día en formato JSON
echo json_encode($ventasPorDia);

?>