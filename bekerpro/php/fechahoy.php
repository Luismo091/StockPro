<?php
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

echo "Fecha: $date<br>";
echo "Hora: $time<br>";
?>
