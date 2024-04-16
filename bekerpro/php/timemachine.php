<?php
// Obtener la fecha actual
$fecha_actual = date("Y-m-d");

// Crear un objeto DateTime a partir de la fecha actual
$fecha = new DateTime($fecha_actual);

// Formatear la fecha en el formato deseado
$fecha_formateada = strftime("%a %e de %B", $fecha->getTimestamp());

// Reemplazar el nombre del día y del mes en español
$dias_es = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
$dias_es_full = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
$meses_es = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$meses_es_full = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");

$fecha_formateada = str_replace($dias_es, $dias_es_full, $fecha_formateada);
$fecha_formateada = str_replace($meses_es, $meses_es_full, $fecha_formateada);

// Imprimir la fecha formateada
echo $fecha_formateada;
?>