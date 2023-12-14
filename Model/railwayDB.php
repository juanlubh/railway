<?php

abstract class railwayDB{
    private static $host = 'roundhouse.proxy.rlwy.net';
    private static $port = '50983';
    private static $user = 'root';
    private static $password = 'GFB2ED-ggd5AB16h14FFgGG-A2a44a32';
    private static $database = 'railway';

    try {
        //$connection = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "");
        $mysqli = new mysqli($host, $user, $password, $database, $port);
        echo "se conecto";
        } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $e->getMessage());
        }

    return $mysqli;

}


?>