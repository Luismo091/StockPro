<?php
require 'conect.php';

$today = date('Y-m-d');
// Consulta para obtener el total de ingresos (ventas)
// Consulta para obtener el total de ingresos (ventas) de hoy
$queryIngresos = "SELECT SUM(monto) AS totalIngresos FROM Ventas WHERE fecha = :today";
$stmt = $conn->prepare($queryIngresos);
$stmt->bindParam(':today', $today);
$stmt->execute();
$ingresos = $stmt->fetch(PDO::FETCH_ASSOC);

// Consulta para obtener el total de egresos (gastos) de hoy
$queryEgresos = "SELECT SUM(monto) AS totalEgresos FROM Gastos WHERE fecha = :today";
$stmt = $conn->prepare($queryEgresos);
$stmt->bindParam(':today', $today);
$stmt->execute();
$egresos = $stmt->fetch(PDO::FETCH_ASSOC);

// Devolver los resultados en formato JSON
echo json_encode([
    'ingresos' => $ingresos['totalIngresos'] ?: '0.00', // Si no hay resultados, devuelve '0.00'
    'egresos' => $egresos['totalEgresos'] ?: '0.00' // Si no hay resultados, devuelve '0.00'
]);
?>