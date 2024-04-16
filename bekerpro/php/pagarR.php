<?php
require 'conect.php';

if (isset($_GET['id']) && isset($_GET['monto'])) {
    $recordatorioId = $_GET['id'];
    $monto = $_GET['monto'];

    try {
        // Obtener los detalles de la factura asociada al recordatorio
        $stmt = $conn->prepare("SELECT f.proveedor, f.fecha_emision, f.fecha_vencimiento, f.monto
                                FROM Recordatorios_Pagos r
                                INNER JOIN Facturas f ON r.id_factura = f.id
                                WHERE r.id = ?");
        $stmt->execute([$recordatorioId]);
        $factura = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($factura) {
            // Obtener la fecha actual utilizando date('Y-m-d')
            $fechaActual = date('Y-m-d');

            // Insertar el pago en la tabla de gastos
            $stmt = $conn->prepare("INSERT INTO Gastos (fecha, id_tipo_gasto, descripcion, monto) 
                                    VALUES (?, ?, ?, ?)");
            $descripcion = "Pago de factura #" . $recordatorioId . " - Proveedor: " . $factura['proveedor'] .
                " - Fecha de emisión: " . $factura['fecha_emision'] .
                " - Fecha de vencimiento: " . $factura['fecha_vencimiento'] .
                " - Monto: " . $factura['monto'];
            $stmt->execute([$fechaActual, 16, $descripcion, $monto]);

            // Eliminar el recordatorio después de registrar el pago
            $stmt = $conn->prepare("DELETE FROM Recordatorios_Pagos WHERE id = ?");
            $stmt->execute([$recordatorioId]);

            $response = [
                'success' => true,
                'message' => 'Pago registrado exitosamente'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'No se encontró la factura asociada al recordatorio'
            ];
        }
    } catch (PDOException $e) {
        $response = [
            'success' => false,
            'message' => 'Error al registrar el pago: ' . $e->getMessage()
        ];
    }
} else {
    $response = [
        'success' => false,
        'message' => 'ID de recordatorio o monto no proporcionado'
    ];
}

header('Content-Type: application/json');
echo json_encode($response);
?>
