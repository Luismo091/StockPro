<?php
require 'conect.php';

// Recibir los datos del formulario
$description = $_POST['sale_description'];
$amount = $_POST['sale_amount'];
$tip_al = $_POST['tip_al']; // Recibir el tipo de lugar seleccionado
$estado_venta = $_POST['estado_venta']; // Recibir el estado de la venta
$fecha = date('Y-m-d');// Fecha actual


if (empty($tip_al)){
    $tip_al = '1';
}
// Verificar si ya existe un registro en Dinero_Disponible con la fecha actual
$checkQuery = "SELECT COUNT(*) AS count FROM Dinero_Disponible WHERE fecha = ?";
$checkStmt = $conn->prepare($checkQuery);
$checkStmt->execute([$fecha]);
$result = $checkStmt->fetch(PDO::FETCH_ASSOC);

if ($result['count'] > 0) {
    // Ya existe un registro con la fecha actual, entonces ya esta cerrado el dia y no se puede registrar la venta entonces coger la fecha actual y añadir un dia
} else {
    // No existe un registro con la fecha actual, proceder con la inserción de la venta
    $query = "INSERT INTO Ventas (fecha, descripcion, monto, tip_al, estado) VALUES (:fecha, :descripcion, :monto, :tip_al, :estado_venta)";
    $stmt = $conn->prepare($query);


    // Vincular los parámetros y ejecutar la consulta
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':descripcion', $description);
    $stmt->bindParam(':monto', $amount);
    $stmt->bindParam(':tip_al', $tip_al); // Vincular el tipo de lugar seleccionado
    $stmt->bindParam(':estado_venta', $estado_venta);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Venta guardada correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al guardar la venta']);
    }
}
?>