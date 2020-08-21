<?php

class artesano {
    private $codigo;
    private $contraseña;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $fechaIngreso;
    private $estado;
    
    function __construct($codigo, $contraseña, $nombre, $apellido, $correo, $telefono, $fechaIngreso, $estado) {
        $this->codigo = $codigo;
        $this->contraseña = $contraseña;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->fechaIngreso = $fechaIngreso;
        $this->estado = $estado;
    }
    function getCodigo() {
        return $this->codigo;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getFechaIngreso() {
        return $this->fechaIngreso;
    }

    function getEstado() {
        return $this->estado;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setFechaIngreso($fechaIngreso) {
        $this->fechaIngreso = $fechaIngreso;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }


}
