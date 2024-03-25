<?php
require 'conect.php';

// Capturar los datos enviados desde el formulario
$descripcion = $_POST['descripcion'];
$tipoGasto = $_POST['tipoGasto'];
$monto = $_POST['monto'];

// Obtener la fecha actual en formato compatible con SQLite DATE
$fechaActual = date('Y-m-d');

// Verificar si ya existe un registro en Dinero_Disponible con la fecha actual
$checkQuery = "SELECT COUNT(*) AS count FROM Dinero_Disponible WHERE fecha = ?";
$checkStmt = $conn->prepare($checkQuery);
$checkStmt->execute([$fechaActual]);
$result = $checkStmt->fetch(PDO::FETCH_ASSOC);

if ($result['count'] > 0) {
    // Ya existe un registro con la fecha actual, devolver un mensaje de error
    echo json_encode(['status' => 'error', 'message' => 'No se puede agregar el gasto. El día ya ha sido cerrado.']);
} else {
    // No existe un registro con la fecha actual, proceder con la inserción del gasto
    $sql = "INSERT INTO Gastos (fecha, id_tipo_gasto, descripcion, monto) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo json_encode(['status' => 'error', 'message' => 'Error al preparar la consulta: ' . $conn->error]);
        exit;
    }

    // Vincular los parámetros y ejecutar
    $stmt->bindParam(1, $fechaActual);
    $stmt->bindParam(2, $tipoGasto, PDO::PARAM_INT);
    $stmt->bindParam(3, $descripcion);
    $stmt->bindParam(4, $monto);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Gasto guardado con éxito']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al guardar el gasto: ' . $stmt->error]);
    }
}
?>