<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Usuario</title>
</head>
<body>

<h1>Hola mundo</h1>

<?php

// Cerrar la conexión
$mysqli->close();

?>


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

</body>
</html>
