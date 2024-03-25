<?php
require 'conect.php';

// Recibir los datos del formulario
$description = $_POST['sale_description'];
$amount = $_POST['sale_amount'];
$fecha = date('Y-m-d'); // Fecha actual

// Verificar si ya existe un registro en Dinero_Disponible con la fecha actual
$checkQuery = "SELECT COUNT(*) AS count FROM Dinero_Disponible WHERE fecha = ?";
$checkStmt = $conn->prepare($checkQuery);
$checkStmt->execute([$fecha]);
$result = $checkStmt->fetch(PDO::FETCH_ASSOC);

if ($result['count'] > 0) {
    // Ya existe un registro con la fecha actual, devolver un mensaje de error
    echo json_encode(['status' => 'error', 'message' => 'No se puede agregar la venta. El día ya ha sido cerrado.']);
} else {
    // No existe un registro con la fecha actual, proceder con la inserción de la venta
    $query = "INSERT INTO Ventas (fecha, descripcion, monto) VALUES (:fecha, :descripcion, :monto)";
    $stmt = $conn->prepare($query);

    // Vincular los parámetros y ejecutar la consulta
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':descripcion', $description);
    $stmt->bindParam(':monto', $amount);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Venta guardada correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al guardar la venta']);
    }
}
?>