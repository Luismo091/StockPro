<?php
require 'conect.php';
try {

    $sql = "SELECT idalama, nombrepago, imagen FROM tipo_almapa";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>