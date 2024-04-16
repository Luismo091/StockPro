<?php

require 'conect.php';

$stmt = $conn->prepare("SELECT r.id, r.id_factura, r.fecha_recordatorio, r.descripcion, 
                               f.proveedor, f.fecha_emision, f.fecha_vencimiento, f.monto
                        FROM Recordatorios_Pagos r
                        INNER JOIN Facturas f ON r.id_factura = f.id
                        ORDER BY r.fecha_recordatorio DESC");
$stmt->execute();

$recordatorios = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($recordatorios);

