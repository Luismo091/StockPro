<?php
// Ruta al archivo de la base de datos SQLite
$dbFile = '../db/panadb.db';

try {
    // Conexión a la base de datos SQLite
    $conn = new PDO("sqlite:$dbFile");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
    phpinfo();
}
?>
