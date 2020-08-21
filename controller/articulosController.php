<?php
require_once 'model/articuloModel.php';
require_once 'model/categoriaModel.php';
require_once 'model/artesanoModel.php';

class articulosController {
    private $model;
    private $model2;
    private $model3;
    
    
    function __construct() {
        $this->model = new articuloModel();
        $this->model2= new categoriaModel();
        $this->model3= new artesanoMOdel();
       
    }
    
    public function listar(){
        $validarLista = "";
        if(isset($_SESSION['codigoArtesano'])){
            $validarLista = $_SESSION['codigoArtesano'];
        }
        $articulo = $this->model->listar($validarLista);
        require_once 'view/include/header.php';
        require_once 'view/articulos/listar.php';
        require_once 'view/include/footer.php';
    }
    
    public function formularioregistrar(){
        //util::administradorLogin();
        $listaCategorias = $this->model2->listar();
        $listaArtesanos= $this->model3->listar();
        require_once 'view/include/header.php';
        require_once 'view/articulos/registrar.php';
        require_once 'view/include/footer.php';
        
    }
    
     public function registrar(){
        //util::administradorLogin();
        $nombre= $_POST['nombre'];
        $descripcion= $_POST['descripcion'];
        $categoria= $_POST['categoria'];
        $precio= $_POST['precio'];      
        $imagen =file_get_contents($_FILES['imagen']['tmp_name']);
        $estado=("Disponible");
        $artesano= $_SESSION['nombre'];
        $codigoArtesano = $_SESSION['codigoArtesano'];
        
        $articulo = new articulo(0, $nombre, $descripcion, $categoria, $precio,$imagen,$estado,$artesano,$codigoArtesano);
        
        
        $this->model->registrar($articulo);
        
        header("location:index.php");
        
    }
    
        public function fomularioEditar(){
         //util::administradorLogin();
        $codigo=$_GET['codigo'];    
        $articulo = $this->model->buscarArticulo($codigo);
        $listaArtesanos= $this->model3->listar();
        require_once 'view/include/header.php';
        require_once 'view/articulos/editar.php';
        require_once 'view/include/footer.php';
    }


    public function editar(){
        //util::administradorLogin();
        $codigo= $_POST['codigo'];
        $nombre= $_POST['nombre'];
        $descripcion= $_POST['descripcion'];
        $categoria= $_POST['categoria'];
        $precio= $_POST['precio'];      
        $imagen =file_get_contents($_FILES['imagen']['tmp_name']);
        $estado=$_POST['estado'];
        $artesano=$_POST['artesano'];
        
        $articulo = new articulo($codigo,$nombre, $descripcion, $categoria, $precio,$imagen,$estado,$artesano);
        
        $this->model->editar($articulo);
        
        header("location:index.php?controller=articulos&action=listar");
    }
    
    public function eliminar(){
        //util::administradorLogin();
        $codigo=$_GET['codigo'];    
        $this->model->eliminar($codigo);
        
         header("location:index.php?controller=articulos&action=listar");
    }
    
  
    
}
