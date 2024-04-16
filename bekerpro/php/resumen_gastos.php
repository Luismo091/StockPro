<?php

require 'conect.php';

// Obtener las fechas de inicio y fin de la semana actual
$fechaInicio = date('Y-m-d', strtotime('last Sunday'));
$fechaFin = date('Y-m-d', strtotime('next Saturday'));

// Consulta para obtener los gastos detallados de la semana actual
$sql = "SELECT DATE(fecha) AS dia, descripcion, monto 
        FROM Gastos
        WHERE fecha BETWEEN :fechaInicio AND :fechaFin
        ORDER BY fecha";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':fechaInicio', $fechaInicio);
$stmt->bindParam(':fechaFin', $fechaFin);
$stmt->execute();

// Crear un array para almacenar los gastos por día
$gastosPorDia = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $dia = $row["dia"];
    if (!isset($gastosPorDia[$dia])) {
        $gastosPorDia[$dia] = array();
    }
    $gastosPorDia[$dia][] = array(
        "descripcion" => $row["descripcion"],
        "monto" => $row["monto"]
    );
}

// Devolver los gastos por día en formato JSON
echo json_encode($gastosPorDia);

