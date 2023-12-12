<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Usuario</title>
</head>
<body>

<h1>Hola mundo</h1>

<?php

try {
    $conexion = new PDO("mysql:host=roundhouse.proxy.rlwy.net;dbname=railway;charset=utf8", "root", "GFB2ED-ggd5AB16h14FFgGG-A2a44a32");
    echo "Conectado";
} catch (PDOException $e) {
    echo "Error de Conectamos";
    die("Error: " . $e->getMessage());
}

?>

</body>
</html>
