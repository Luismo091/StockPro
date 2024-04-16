<?php
require 'conect.php';
// Obtener el ID del gasto a eliminar
$idGasto = $_POST['id'];

// Preparar la consulta SQL
$stmt = $conn->prepare("DELETE FROM Gastos WHERE id = :id");

// Ejecutar la consulta
$stmt->execute([':id' => $idGasto]);

// Verificar si la eliminación fue exitosa
if ($stmt->rowCount() > 0) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}