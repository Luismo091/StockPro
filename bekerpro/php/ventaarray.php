<?php
require 'conect.php';

$fechaActual = date('Y-m-d');

// Preparar la consulta SQL para obtener los gastos
$sql = "SELECT * FROM ventas WHERE fecha = '$fechaActual' order by id desc";

// Ejecutar la consulta
$stmt = $conn->query($sql);

// Fetch all results
$ventas= $stmt->fetchAll(PDO::FETCH_ASSOC);

// Devolver los resultados en formato JSON
echo json_encode($ventas);
