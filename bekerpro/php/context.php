<?php

require 'conect.php';

require 'conect.php';

$fechaInicioSemana = date('Y-m-d', strtotime('monday this week'));
$fechaFinSemana = date('Y-m-d', strtotime('sunday this week'));

$tablas = [
    'Dinero_Disponible' => [
        'consulta' => "SELECT * FROM Dinero_Disponible WHERE fecha BETWEEN '$fechaInicioSemana' AND '$fechaFinSemana'",
        'descripcion' => 'Registros del dinero disponible por fecha, incluyendo la cantidad y a qué día está destinado ese dinero.'
    ],
    'Facturas' => [
        'consulta' => "SELECT * FROM Facturas WHERE fecha_emision BETWEEN '$fechaInicioSemana' AND '$fechaFinSemana'",
        'descripcion' => 'Lista de facturas emitidas, incluyendo proveedor, fecha de emisión, vencimiento y monto.'
    ],
    'Recordatorios_Pagos' => [
        'consulta' => "SELECT * FROM Recordatorios_Pagos WHERE fecha_recordatorio BETWEEN '$fechaInicioSemana' AND '$fechaFinSemana'",
        'descripcion' => 'Recordatorios de pagos pendientes asociados a facturas específicas.'
    ],
    'Gastos' => [
        'consulta' => "SELECT * FROM Gastos INNER JOIN main.Tipos_Gasto TG on Gastos.id_tipo_gasto = TG.id WHERE fecha BETWEEN '$fechaInicioSemana' AND '$fechaFinSemana'",
        'descripcion' => 'Detalle de gastos, incluyendo la fecha, tipo de gasto, descripción y monto.'
    ],
    'Ventas' => [
        'consulta' => "SELECT * FROM Ventas inner join main.tipo_almapa ta on ta.idalama = Ventas.tip_al WHERE fecha BETWEEN '$fechaInicioSemana' AND '$fechaFinSemana'",
        'descripcion' => 'Registro de ventas, con detalles sobre la fecha, descripción y monto de cada venta. Si el estado es 0 entonces la venta está confirmada, si no, está pendiente.'
    ]
];

$resultados = ['descripcion_general' => 'Resumen de la base de datos de la panadería Insuperable de Valledupar solo desde '. $fechaInicioSemana . ' hasta '.$fechaFinSemana.'. Contiene información sobre el dinero disponible, facturas, recordatorios de pagos, gastos y ventas.'];

foreach ($tablas as $nombreTabla => $info) {
    $stmt = $conn->query($info['consulta']);
    $resultados['tablas'][$nombreTabla] = [
        'descripcion' => $info['descripcion'],
        'datos' => $stmt->fetchAll(PDO::FETCH_ASSOC)
    ];
}

$json = json_encode($resultados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo $json;
?>