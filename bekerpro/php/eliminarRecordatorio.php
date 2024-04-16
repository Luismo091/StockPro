<?php
require 'conect.php';

if (isset($_GET['id'])) {
    $recordatorioId = $_GET['id'];

    try {
        $stmt = $conn->prepare("DELETE FROM Recordatorios_Pagos WHERE id = ?");
        $stmt->execute([$recordatorioId]);

        if ($stmt->rowCount() > 0) {
            $response = [
                'success' => true,
                'message' => 'Recordatorio eliminado exitosamente'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'No se encontró el recordatorio'
            ];
        }
    } catch (PDOException $e) {
        $response = [
            'success' => false,
            'message' => 'Error al eliminar el recordatorio: ' . $e->getMessage()
        ];
    }
} else {
    $response = [
        'success' => false,
        'message' => 'ID de recordatorio no proporcionado'
    ];
}

header('Content-Type: application/json');
echo json_encode($response);
?>
