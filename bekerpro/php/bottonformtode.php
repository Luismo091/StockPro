<?php

require 'conect.php';

$url = "https://timeapi.io/api/Time/current/zone?timeZone=America/Bogota";
$json = file_get_contents($url);

// Decodificar el JSON
$data = json_decode($json, true);

// Obtener la fecha y hora
$year = $data['year'];
$month = $data['month'];
$day = $data['day'];
$hour = $data['hour'];
$minute = $data['minute'];
$seconds = $data['seconds'];

// Formatear la fecha y hora según tus necesidades
$date = sprintf("%02d/%02d/%04d", $month, $day, $year);
$time = sprintf("%02d:%02d:%02d", $hour, $minute, $seconds);

$fechaHoy = $date;

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
