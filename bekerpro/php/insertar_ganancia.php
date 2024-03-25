<?php
require 'conect.php';

// Asegúrate de que se está recibiendo la ganancia neta y la fecha actual
if (isset($_POST['ganancia_neta'])) {
    $gananciaNeta = $_POST['ganancia_neta'];
    $fechaActual = date('Y-m-d');
    $fechaSiguiente = date('Y-m-d', strtotime('+1 day'));

    try {
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
            $stmt = $conn->prepare("INSERT INTO Ventas (fecha, descripcion, monto) VALUES (?, ?, ?)");
            $stmt->execute([$fechaSiguiente, $descripcion, $gananciaNeta]);
        }else{
            echo json_encode(array("error" => "Ya hay ganancias en esta fecha"));
        }

        echo json_encode(array("success" => true));
    } catch (PDOException $e) {
        echo json_encode(array("error" => $e->getMessage()));
    }
} else {
    echo json_encode(array("error" => "Ganancia neta no proporcionada"));
}
