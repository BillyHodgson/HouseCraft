<?php

class categoria {
    private $codigo;
    private $descripcion;
    private $fechaCreacion;
    function __construct($codigo, $descripcion, $fechaCreacion) {
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->fechaCreacion = $fechaCreacion;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }


}
