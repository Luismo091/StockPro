<?php

require 'conect.php';

$fechaHoy = date('Y-m-d');

try {
    $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM Dinero_Disponible WHERE fecha = ?");
    $stmt->execute([$fechaHoy]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $result['count'];

    if ($count > 0) {
        echo json_encode(array("existe_registro" => true));
    } else {
        echo json_encode(array("existe_registro" => false));
    }
} catch (PDOException $e) {
    echo json_encode(array("error" => $e->getMessage()));
}
