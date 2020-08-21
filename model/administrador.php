<?php

class administrador {
    private $cedula;
    private $nombre;
    private $apellido;
    private $telefono;
    private $correo;
    private $contraseña;
 
    function __construct($cedula, $nombre, $apellido, $telefono, $correo, $contraseña) {
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }


}
