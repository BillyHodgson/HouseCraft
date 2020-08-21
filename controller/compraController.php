<?php

require_once 'model/compraModel.php';
require_once 'model/articuloModel.php';

class compraController {
   private $model;
   private $model2;
    
    
    function __construct(){
        $this->model = new compraModel();
        $this->model2 = new articuloModel();
       
    }
    
    
    public function listar(){
        $validarLista = "";
        if(isset($_SESSION['codigoArtesano'])){
            $validarLista = $_SESSION['codigoArtesano'];
        }
        $compras = $this->model->listar($validarLista);
        require_once 'view/include/header.php';
        require_once 'view/compras/listar.php';
        require_once 'view/include/footer.php';
    }
    
     public function formularioComprar(){
         //util::administradorLogin();
        $codigo=$_GET['codigo'];    
        $articulo = $this->model2->buscarArticulo($codigo);
        require_once 'view/include/header.php';
        require_once 'view/compras/registrar.php';
        require_once 'view/include/footer.php';
    }
    
    
     public function registrar(){
        //util::administradorLogin();
        $nombreComprador= $_POST['nombreComprador'];
        $telefono= $_POST['telefono'];
        $direccion= $_POST['direccion'];
        $tarjeta= $_POST['tarjeta'];      
        $articulo =$_POST['articulo'];
        $monto = $_POST['monto'];
        $codigoArtesano= $_POST['codigoArtesano'];
        
        
        
        $compra = new compra(0, $nombreComprador, $telefono, $direccion, $tarjeta, $articulo,$monto,$codigoArtesano);
        
        $this->model->registrar($compra);
        $this->model2->cambiarEstado($articulo);
        
        header("location:index.php");
        
    }
    
         public function fomularioEditar(){
         //util::administradorLogin();
        $id=$_GET['id'];    
        $compra = $this->model->buscarCompra($id);
        require_once 'view/include/header.php';
        require_once 'view/compras/editar.php';
        require_once 'view/include/footer.php';
    }


    public function editar(){
        //util::administradorLogin();
        $id= $_POST['id'];
        $nombreComprador = $_POST['nombreComprador'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $tarjeta=$_POST['tarjeta'];
        $articulo=$_POST['articulo'];
        $monto=$_POST['monto'];
        $codigoArtesano= $_POST['codigoArtesano'];
        
        $compra = new compra($id, $nombreComprador, $telefono, $direccion, $tarjeta, $articulo,$monto,$codigoArtesano);
        
        $this->model->editar($compra);
        
        header("location:index.php?controller=compra&action=listar");
    }
    
    public function eliminar(){
        //util::administradorLogin();
        $id=$_GET['id'];    
        $this->model->eliminar($id);
        
         header("location:index.php?controller=compra&action=listar");
    }
    
    
}
