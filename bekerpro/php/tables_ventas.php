<?php

require 'conect.php';

$stmt = $conn->prepare("SELECT * FROM ventas ORDER BY fecha DESC");
$stmt->execute();

// Fetch all expenses
$ventas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return the expenses as JSON
header('Content-Type: application/json');
echo json_encode($ventas);