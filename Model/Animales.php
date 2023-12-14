<?php
require_once 'railwayDB.php';

class Animal {
    private $id_animal;
    private $nombre;
    private $edad;
    private $tiempo;
    private $sexo; // Corregí a minúscula para ser consistente
    private $tamaño; // Corregí a minúscula para ser consistente
    private $tipo;
    private $imagen;

    private $protectora;
    private $usuario;
    private $estado;

    public function __construct($id_animal, $nombre, $edad, $tiempo, $sexo, $tamaño, $tipo, $imagen) {
        $this->id_animal = $id_animal;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->tiempo = $tiempo;
        $this->sexo = $sexo;
        $this->tamaño = $tamaño;
        $this->tipo = $tipo;
        $this->imagen = $imagen;
    }

    // Getters
    public function getIdAnimal() {
        return $this->id_animal;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getTiempo() {
        return $this->tiempo;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getTamaño() {
        return $this->tamaño;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getImagen() {
        return $this->imagen;
    }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function setTiempo($tiempo) {
        $this->tiempo = $tiempo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setTamaño($tamaño) {
        $this->tamaño = $tamaño;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function insert() {
        $conexion = railwayDB::connectDB();
        $insercion = "INSERT INTO animales (nombre, edad, tiempo, sexo, tamaño, tipo, imagen) VALUES ('$this->nombre','$this->edad','$this->tiempo','$this->sexo','$this->tamaño','$this->tipo','$this->imagen')";
        $conexion->exec($insercion);
    }

    public function delete() {
        $conexion = railwayDB::connectDB();
        $borrado = "DELETE FROM animales WHERE id_animal=$this->id_animal";
        $conexion->exec($borrado);
    }

    public function update() {
        $conexion = railwayDB::connectDB();
        $actualiza = "UPDATE animales SET nombre='$this->nombre', edad='$this->edad', tiempo='$this->tiempo', sexo='$this->sexo', tamaño='$this->tamaño', tipo='$this->tipo', imagen='$this->imagen' WHERE id_animal=$this->id_animal";
        $conexion->exec($actualiza);
    }
}
?>