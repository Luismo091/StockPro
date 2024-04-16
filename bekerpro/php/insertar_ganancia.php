<?php
require 'conect.php';

$fechaActual = date('Y-m-d');
$fechaSiguiente = date('Y-m-d', strtotime('+1 day'));

try {
    // Iniciar una transacción
    $conn->beginTransaction();

    // Preparar la consulta SQL para obtener la suma de los gastos del día
    $sqlGastos = "SELECT COALESCE(SUM(monto), 0) AS total_gastos FROM Gastos WHERE fecha = ?";
    $stmtGastos = $conn->prepare($sqlGastos);
    $stmtGastos->execute([$fechaActual]);
    $gastos = $stmtGastos->fetch(PDO::FETCH_ASSOC);
    $totalGastos = $gastos['total_gastos'];

    // Preparar la consulta SQL para obtener la suma de las ventas del día
    $sqlVentas = "SELECT COALESCE(SUM(monto), 0) AS total_ventas FROM Ventas WHERE fecha = ? AND estado = '0'";
    $stmtVentas = $conn->prepare($sqlVentas);
    $stmtVentas->execute([$fechaActual]);
    $ventas = $stmtVentas->fetch(PDO::FETCH_ASSOC);
    $totalVentas = $ventas['total_ventas'];

    // Calcular la ganancia neta
    $gananciaNeta = $totalVentas - $totalGastos;

    // Verificar si ya existen datos para el día actual en Dinero_Disponible
    $consultaExistencia = $conn->prepare("SELECT COUNT(*) FROM Dinero_Disponible WHERE fecha = ?");
    $consultaExistencia->execute([$fechaActual]);
    $existe = $consultaExistencia->fetchColumn();

    if ($existe == 0) {
        // Solo insertar en Dinero_Disponible si no hay registros del día actual
        $stmt = $conn->prepare("INSERT INTO Dinero_Disponible (fecha, cantidad, fecha_f) VALUES (?, ?, ?)");
        $stmt->execute([$fechaActual, $gananciaNeta, $fechaSiguiente]);

        // Insertar en Ventas con la fecha del día siguiente
        $descripcion = "Restante del día anterior " . $fechaActual;
        $stmt = $conn->prepare("INSERT INTO Ventas (fecha, descripcion, monto, tip_al, estado) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$fechaSiguiente, $descripcion, $gananciaNeta, '3', '0']);

        // Confirmar la transacción
        $conn->commit();

        // Devolver una respuesta de éxito en formato JSON
        echo json_encode(['success' => true, 'message' => 'La ganancia neta ha sido registrada. '.$gananciaNeta.' Al siguiente dia']);
    } else {
        // Si ya existen datos para el día actual, devolver un mensaje de error en formato JSON
        echo json_encode(['error' => 'Ya se ha registrado la ganancia neta para el día actual.']);
    }
} catch (PDOException $e) {
    // En caso de error, deshacer la transacción y devolver un mensaje de error en formato JSON
    $conn->rollBack();
    echo json_encode(['error' => 'Error al insertar en la base de datos: ' . $e->getMessage()]);
}
?>
