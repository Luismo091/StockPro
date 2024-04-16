<?php
require 'conect.php';

$fechaActual = date('Y-m-d');


try {
    // Buscar el último registro de saldo restante anterior a la fecha actual
    $stmt = $conn->prepare("SELECT * FROM Ventas WHERE descripcion LIKE 'Restante del día anterior%' AND fecha < ? ORDER BY fecha DESC LIMIT 1");
    $stmt->execute([$fechaActual]);
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        $fechaUltimoSaldo = $resultado['fecha'];
        $montoUltimoSaldo = $resultado['monto'];

        // Verificar si ya existe un registro de saldo para la fecha actual
        $stmt = $conn->prepare("SELECT COUNT(*) FROM Ventas WHERE descripcion LIKE 'Restante del día anterior%' AND fecha = ?");
        $stmt->execute([$fechaActual]);
        $existe = $stmt->fetchColumn();

        if ($existe == 0) {
            // Verificar si el día con el último saldo restante está sin cerrar
            $stmt = $conn->prepare("SELECT COUNT(*) FROM Ventas WHERE fecha = ? AND estado = 0");
            $stmt->execute([$fechaUltimoSaldo]);
            $ventasSinCerrar = $stmt->fetchColumn();

            $stmt = $conn->prepare("SELECT COUNT(*) FROM Gastos WHERE fecha = ?");
            $stmt->execute([$fechaUltimoSaldo]);
            $gastosSinCerrar = $stmt->fetchColumn();

            if ($ventasSinCerrar > 0 || $gastosSinCerrar > 0) {
                // Calcular la suma total de las ventas activas del día sin cerrar
                $stmt = $conn->prepare("SELECT SUM(monto) AS total_ventas FROM Ventas WHERE fecha = ? AND estado = 0");
                $stmt->execute([$fechaUltimoSaldo]);
                $totalVentas = $stmt->fetchColumn();

                // Calcular la suma total de los gastos del día sin cerrar
                $stmt = $conn->prepare("SELECT SUM(monto) AS total_gastos FROM Gastos WHERE fecha = ?");
                $stmt->execute([$fechaUltimoSaldo]);
                $totalGastos = $stmt->fetchColumn();

                if(empty($totalGastos)){
                    $totalGastos = '0';
                }

                $restante = $totalVentas - $totalGastos;

                echo json_encode(array(
                    "success" => true,
                    "mensaje" => "He encontrado este dia " . $fechaUltimoSaldo . " parece ser un dia no cerrado o feriado quieres traer esta valor a hoy?",
                    "fecha_ultimo_saldo" => $fechaUltimoSaldo,
                    "monto_ultimo_saldo" => $montoUltimoSaldo,
                    "restante" => $restante,
                    "totalVentas" => $totalVentas,
                    "totalGastos" => $totalGastos,
                ));
            } else {
                echo json_encode(array(
                    "success" => true,
                    "mensaje" => "Se encontró un saldo restante del día " . $fechaUltimoSaldo . " por un monto de " . $montoUltimoSaldo
                ));
            }
        } else {
            echo json_encode(array(
                "success" => false,
                "mensaje" => "Ya existe un saldo para la fecha actual"
            ));
        }
    } else {
        echo json_encode(array(
            "success" => false,
            "mensaje" => "No se encontraron saldos restantes anteriores a la fecha actual"
        ));
    }
} catch (PDOException $e) {
    echo json_encode(array(
        "success" => false,
        "mensaje" => "Error en la consulta: " . $e->getMessage()
    ));
}
