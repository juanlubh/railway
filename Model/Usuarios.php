<?php
require_once 'railwayDB.php';

class Usuario {
    private $id_usuario;
    private $nombre_usuario;
    private $email;
    private $clave;
    private $telefono;
    private $localidad;
    private $rol;

    public function __construct($id_usuario, $nombre_usuario, $email, $clave, $telefono, $localidad, $rol) {
        $this->id_usuario = $id_usuario;
        $this->nombre_usuario = $nombre_usuario;
        $this->email = $email;
        $this->clave = $clave;
        $this->telefono = $telefono;
        $this->localidad = $localidad;
        $this->rol = $rol;
    }

    // Getters
    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getNombreUsuario() {
        return $this->nombre_usuario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getLocalidad() {
        return $this->localidad;
    }

    public function getRol() {
        return $this->rol;
    }

    // Setters
    public function setNombreUsuario($nombre_usuario) {
        $this->nombre_usuario = $nombre_usuario;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setLocalidad($localidad) {
        $this->localidad = $localidad;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function insert() {
        $conexion = railwayDB::connectDB();
        $insercion = "INSERT INTO usuarios (nombre_usuario, email, clave, telefono, localidad, rol) VALUES ('$this->nombre_usuario','$this->email','$this->clave','$this->telefono','$this->localidad',$this->rol)";
        $conexion->exec($insercion);
    }

    public function delete() {
        $conexion = railwayDB::connectDB();
        $borrado = "DELETE FROM usuarios WHERE id_usuario=$this->id_usuario";
        $conexion->exec($borrado);
    }

    public function update() {
        $conexion = railwayDB::connectDB();
        $actualiza = "UPDATE usuarios SET nombre_usuario='$this->nombre_usuario', email='$this->email', clave='$this->clave', telefono='$this->telefono', localidad='$this->localidad', rol=$this->rol WHERE id_usuario=$this->id_usuario";
        $conexion->exec($actualiza);
    }

    public function getanimales() {
        $conexion = railwayDB::connectDB();
        $actualiza = "UPDATE usuarios SET nombre_usuario='$this->nombre_usuario', email='$this->email', clave='$this->clave', telefono='$this->telefono', localidad='$this->localidad', rol=$this->rol WHERE id_usuario=$this->id_usuario";
        $conexion->exec($actualiza);
    }

}
?>
