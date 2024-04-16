<?php
require 'conect.php';

if (isset($_GET['id'])) {
    $ventaId = $_GET['id'];
    $fechaActual = date('Y-m-d');

    // Verificar si ya existe un registro con la fecha actual en la tabla Dinero_Disponible
    $checkQuery = "SELECT COUNT(*) AS count FROM Dinero_Disponible WHERE fecha = ?";
    $checkStmt = $conn->prepare($checkQuery);
    $checkStmt->execute([$fechaActual]);
    $result = $checkStmt->fetch(PDO::FETCH_ASSOC);

    if ($result['count'] > 0) {
        // Ya existe un registro con la fecha actual, entonces el día está cerrado y no se puede registrar la venta
        // Obtener la fecha del siguiente día
        $fechaSiguiente = date('Y-m-d', strtotime($fechaActual . ' +1 day'));

        // Actualizar el estado de la venta a confirmado (0) y la fecha de registro con la fecha del siguiente día
        $sql = "UPDATE Ventas SET estado = 0, fecha = '$fechaSiguiente' WHERE id = $ventaId";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(['success' => true, 'message' => 'El día actual está cerrado. La venta se registrará con la fecha del siguiente día.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Hubo un error al actualizar la venta.']);
        }
    } else {
        // No existe un registro con la fecha actual, entonces se puede registrar la venta con la fecha actual
        $sql = "UPDATE Ventas SET estado = 0, fecha = '$fechaActual' WHERE id = $ventaId";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(['success' => true, 'message' => 'La venta ha sido confirmada exitosamente.']);
        } else {
            echo json_encode(['success' => true, 'message' => 'Hubo un error al actualizar la venta. pero si se registro']);
        }
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No se proporcionó un ID de venta válido.']);
}
?>
