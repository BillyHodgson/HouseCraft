<?php

class articulo {
    private $codigo;
    private $nombre;
    private $descripcion;
    private $categoria;
    private $precio;
    private $imagen;
    private $estado;
    private $artesano;
    private $codigoArtesano;
            
    function __construct($codigo, $nombre, $descripcion, $categoria, $precio, $imagen, $estado, $artesano, $codigoArtesano) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->imagen = $imagen;
        $this->estado = $estado;
        $this->artesano = $artesano;
        $this->codigoArtesano = $codigoArtesano;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getEstado() {
        return $this->estado;
    }

    function getArtesano() {
        return $this->artesano;
    }

    function getCodigoArtesano() {
        return $this->codigoArtesano;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setArtesano($artesano) {
        $this->artesano = $artesano;
    }

    function setCodigoArtesano($codigoArtesano) {
        $this->codigoArtesano = $codigoArtesano;
    }


    
}
