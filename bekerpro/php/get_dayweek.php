<?php

date_default_timezone_set('America/Bogota');

// Obtiene el día de la semana actual (0 (para domingo) hasta 6 (para sábado))
$dayOfWeek = date('w');

// Obtiene la fecha actual
$fechaActual = date('Y-m-d');

// Obtiene el día de la semana actual (0 (para domingo) hasta 6 (para sábado))
$dayOfWeek = date('w');

// Calcula la fecha del domingo de esta semana
$fechaDomingo = date('Y-m-d', strtotime($fechaActual . " - " . $dayOfWeek . " days"));

// Calcula la fecha del sábado de esta semana
$fechaSabado = date('Y-m-d', strtotime($fechaDomingo . " + 6 days"));



// Comprueba si hoy es sábado (6)
if ($dayOfWeek == 6) {
    // Si es sábado, devuelve un mensaje de éxito
    echo json_encode(array("success" => true, "message" => "Tus reportes de gastos semanales están listos Esta semana es desde el " . $fechaDomingo . " hasta el " . $fechaSabado . "."));
} else {
    // Si no es sábado, devuelve un mensaje de fracaso
    echo json_encode(array("success" => false));
}



