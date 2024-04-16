<?php

require 'conect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $proveedor = $_POST['proveedor'];
    $fechaEmision = $_POST['fechaEmision'];
    $fechaVencimiento = $_POST['fechaVencimiento'];
    $monto = $_POST['monto'];
    $fechaRecordatorio = $_POST['fechaRecordatorio'];
    $descripcion = $_POST['descripcion'];

    try {
        // Iniciar una transacción
        $conn->beginTransaction();

        // Insertar la factura en la tabla Facturas
        $facturaStmt = $conn->prepare("INSERT INTO Facturas (proveedor, fecha_emision, fecha_vencimiento, monto) 
                                        VALUES (?, ?, ?, ?)");
        $facturaStmt->execute([$proveedor, $fechaEmision, $fechaVencimiento, $monto]);

        // Obtener el ID de la factura recién insertada
        $facturaId = $conn->lastInsertId();

        // Insertar el recordatorio en la tabla Recordatorios_Pagos
        $recordatorioStmt = $conn->prepare("INSERT INTO Recordatorios_Pagos (id_factura, fecha_recordatorio, descripcion)
                                            VALUES (?, ?, ?)");
        $recordatorioStmt->execute([$facturaId, $fechaRecordatorio, $descripcion]);

        // Confirmar la transacción
        $conn->commit();

        // Devolver una respuesta exitosa
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        // Revertir la transacción en caso de error
        $conn->rollBack();

        // Devolver una respuesta de error
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}

