<?php
require 'conect.php';

$fechaActual = date('Y-m-d');

// Preparar la consulta SQL para obtener los gastos
$sql = "SELECT * FROM Ventas INNER JOIN main.tipo_almapa ta on ta.idalama = Ventas.tip_al 
         WHERE fecha = '$fechaActual' AND estado = 0 order by id DESC";

// Ejecutar la consulta
$stmt = $conn->query($sql);

// Fetch all results
$ventas= $stmt->fetchAll(PDO::FETCH_ASSOC);

// Devolver los resultados en formato JSON
echo json_encode($ventas);
