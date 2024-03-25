<?php
require 'conect.php';

$fechaActual = date('Y-m-d');

try {
    // Preparar la consulta SQL para obtener la suma de los gastos del día
    $sqlGastos = "SELECT SUM(monto) AS total_gastos FROM Gastos WHERE fecha = ?";
    $stmtGastos = $conn->prepare($sqlGastos);
    $stmtGastos->execute([$fechaActual]);
    $gastos = $stmtGastos->fetch(PDO::FETCH_ASSOC);
    $totalGastos = $gastos['total_gastos'];

    // Preparar la consulta SQL para obtener la suma de las ventas del día
    $sqlVentas = "SELECT SUM(monto) AS total_ventas FROM Ventas WHERE fecha = ?";
    $stmtVentas = $conn->prepare($sqlVentas);
    $stmtVentas->execute([$fechaActual]);
    $ventas = $stmtVentas->fetch(PDO::FETCH_ASSOC);
    $totalVentas = $ventas['total_ventas'];

    // Calcular la ganancia neta
    $gananciaNeta = $totalVentas - $totalGastos;

    // Devolver la ganancia neta en formato JSON
    echo json_encode(array("ganancia_neta" => $gananciaNeta));
} catch (PDOException $e) {
    // En caso de error, devolver un mensaje de error en formato JSON
    echo json_encode(array("error" => $e->getMessage()));
}