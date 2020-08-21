<?php

require_once 'model/categoriaModel.php';
require_once 'model/articuloModel.php';

class categoriaController {
    private $model;
    private $model2;
    
    
    function __construct(){
        $this->model = new categoriaModel();
        $this->model2 = new articuloModel();
      }
      
      
      public function listar(){
        $categorias = $this->model->listar();
        require_once 'view/include/header.php';
        require_once 'view/categorias/listar.php';
        require_once 'view/include/footer.php';
    }
    
    public function formularioregistrar(){
        //util::administradorLogin();
        //$listaArticulos = $this->model2->listar();
        require_once 'view/include/header.php';
        require_once 'view/categorias/registrar.php';
        require_once 'view/include/footer.php';
        
    }
    
    
     public function registrar(){
        //util::administradorLogin();
        $descripcion= $_POST['descripcion'];
        $fechaCreacion= $_POST['fecha'];
        
        $categoria = new categoria(0,$descripcion,$fechaCreacion);
        
        $this->model->registrar($categoria);
        
        header("location:index.php?controller=categoria&action=listar");
        
    }
    
      public function fomularioEditar(){
         //util::administradorLogin();
        $codigo=$_GET['codigo'];    
        $categoria = $this->model->buscarCategoria($codigo);
        require_once 'view/include/header.php';
        require_once 'view/categorias/editar.php';
        require_once 'view/include/footer.php';
    }


    public function editar(){
        //util::administradorLogin();
        $codigo= $_POST['codigo'];
        $descripcion= $_POST['descripcion'];
        $fechaCreacion = $_POST['fechaCreacion'];
        
        $categoria = new categoria($codigo, $descripcion, $fechaCreacion);
        
        $this->model->editar($categoria);
        
        header("location:index.php?controller=categoria&action=listar");
    }
    
    public function eliminar(){
        //util::administradorLogin();
        $codigo=$_GET['codigo'];
        $categoria = $this->model->buscarCategoria($codigo);
        $articulos= $this->model2->listar("");
        $x=0;
        
        foreach($articulos as $articulo){
            if ($articulo->getCategoria() == $categoria->getDescripcion()){
                $x= 1;          
            } 
        }  
         if ($x ==1){
             
              echo '<script type="text/javascript">alert("No es posible eliminar esta categoria");
                            window.location.href="index.php?controller=categoria&action=listar";
                            </script>';    
            }else{
                $this->model->eliminar($codigo);
                header("location:index.php?controller=categoria&action=listar");
            }
    }
}
