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
    $conexion = new PDO("mysql:host=localhost;dbname=amigos_peludos;charset=utf8", "root", "");
    echo "Conectado";
} catch (PDOException $e) {
    echo "Error de Conectamos";
    die("Error: " . $e->getMessage());
}

?>

</body>
</html>
