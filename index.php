<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Usuario</title>
</head>
<body>

<h1>Hola mundo</h1>

<?php

// Datos de conexión a la base de datos
$host = 'roundhouse.proxy.rlwy.net';
$port = 50983;
$user = 'root';
$password = 'GFB2ED-ggd5AB16h14FFgGG-A2a44a32';
$database = 'railway';

// Crear la conexión
$mysqli = new mysqli($host, $user, $password, $database, $port);

// Verificar si hay errores en la conexión
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

// Ahora puedes realizar consultas a la base de datos utilizando $mysqli

// Ejemplo de consulta
$query = "SELECT * FROM usuarios";
$result = $mysqli->query($query);

// Manejar el resultado
if ($result) {
    // Procesar los resultados
    while ($row = $result->fetch_assoc()) {
        // Haz algo con cada fila
        echo $row['id_usuario'] . ' ' . $row['nombre_usuario'] . '<br>';
    }

    // Liberar el resultado
    $result->free();
} else {
    // Manejar el error en la consulta
    echo "Error en la consulta: " . $mysqli->error;
}

// Cerrar la conexión
$mysqli->close();

?>

<b>cambio</b>

</body>
</html>
