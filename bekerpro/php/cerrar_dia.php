<?php
require 'conect.php';

if (isset($_POST['fecha']) && isset($_POST['monto'])) {
    $fechaUltimoSaldo = $_POST['fecha'];
    $montoUltimoSaldo = $_POST['monto'];
    $fechaActual = date('Y-m-d');

    try {
        // Calcular la diferencia de días entre el último día y el día actual
        $diferenciaDias = floor((strtotime($fechaActual) - strtotime($fechaUltimoSaldo)) / (60 * 60 * 24));


        $stmt = $conn->prepare("INSERT INTO Dinero_Disponible (fecha, cantidad, fecha_f) VALUES (?, ?, ?)");
        $stmt->execute([$fechaUltimoSaldo, $montoUltimoSaldo, $fechaActual]);
        // Insertar el restante en la tabla de ventas del día actual
        $descripcion = "Restante del día anterior " . $fechaUltimoSaldo . " (Desfase de " . $diferenciaDias . " días)";
        $stmt = $conn->prepare("INSERT INTO Ventas (fecha, descripcion, monto, tip_al, estado) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$fechaActual, $descripcion, $montoUltimoSaldo, '2', '0']);

        echo json_encode(array(
            "success" => true,
            "mensaje" => "El restante del día " . $fechaUltimoSaldo . " se ha trasladado al día actual."
        ));
    } catch (PDOException $e) {
        echo json_encode(array(
            "success" => false,
            "mensaje" => "Error al cerrar el día: " . $e->getMessage()
        ));
    }
} else {
    echo json_encode(array(
        "success" => false,
        "mensaje" => "Fecha y monto no proporcionados"
    ));
}

