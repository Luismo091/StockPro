<?php

require 'conect.php';

$stmt = $conn->prepare("SELECT * FROM Gastos ORDER BY fecha DESC");
$stmt->execute();

// Fetch all expenses
$gastos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return the expenses as JSON
header('Content-Type: application/json');
echo json_encode($gastos);