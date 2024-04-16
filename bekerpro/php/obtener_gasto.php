<?php
require 'conect.php';

$gastoId = $_GET['id'];

$sql = "SELECT * FROM Gastos WHERE id = $gastoId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $gasto = $result->fetch_assoc();
    echo json_encode($gasto);
} else {
    echo "[]";
}

?>