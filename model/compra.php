<?php

class compra {
    
    private $id;
    private $nombreComprador;
    private $telefono;
    private $direccion;
    private $tarjeta;
    private $articulo;
    private $monto;
    private $codigoArtesano;
            
    function __construct($id, $nombreComprador, $telefono, $direccion, $tarjeta, $articulo, $monto, $codigoArtesano) {
        $this->id = $id;
        $this->nombreComprador = $nombreComprador;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->tarjeta = $tarjeta;
        $this->articulo = $articulo;
        $this->monto = $monto;
        $this->codigoArtesano = $codigoArtesano;
    }

    function getId() {
        return $this->id;
    }

    function getNombreComprador() {
        return $this->nombreComprador;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTarjeta() {
        return $this->tarjeta;
    }

    function getArticulo() {
        return $this->articulo;
    }

    function getMonto() {
        return $this->monto;
    }

    function getCodigoArtesano() {
        return $this->codigoArtesano;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombreComprador($nombreComprador) {
        $this->nombreComprador = $nombreComprador;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTarjeta($tarjeta) {
        $this->tarjeta = $tarjeta;
    }

    function setArticulo($articulo) {
        $this->articulo = $articulo;
    }

    function setMonto($monto) {
        $this->monto = $monto;
    }

    function setCodigoArtesano($codigoArtesano) {
        $this->codigoArtesano = $codigoArtesano;
    }



    
}
