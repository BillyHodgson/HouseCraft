<?php

require_once 'model/artesanoModel.php';

class artesanoController {
      private $model;
    
    
    function __construct(){
        $this->model = new artesanoModel();
       
    }
    
    public function listar(){
        $artesanos = $this->model->listar();
        require_once 'view/include/header.php';
        require_once 'view/artesanos/listar.php';
        require_once 'view/include/footer.php';
    }
    
    public function formularioregistrar(){
        //util::administradorLogin();
        //$listaArticulos = $this->model2->listar();
        require_once 'view/include/header.php';
        require_once 'view/artesanos/registrar.php';
        require_once 'view/include/footer.php';
        
    }
    
    
     public function registrar(){
        //util::administradorLogin();
        $contraseña="12345";
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $correo= $_POST['correo'];
        $telefono= $_POST['telefono'];      
        $fechaIngreso =$_POST['fecha'];
        $estado="Activo";
        
        $artesano = new artesano(0, $contraseña, $nombre, $apellido, $correo, $telefono,$fechaIngreso,$estado);
        
        $this->model->registrar($artesano);
        
        header("location:index.php");
        
    }
    
         public function fomularioEditar(){
         //util::administradorLogin();
        $codigo=$_GET['codigo'];    
        $artesano = $this->model->buscarArtesano($codigo);
        require_once 'view/include/header.php';
        require_once 'view/artesanos/editar.php';
        require_once 'view/include/footer.php';
    }


    public function editar(){
        //util::administradorLogin();
        $codigo= $_POST['codigo'];
        $contraseña = $_POST['contraseña'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $correo=$_POST['correo'];
        $telefono=$_POST['telefono'];
        $fechaIngreso=$_POST['fecha'];
        $estado=$_POST['estado'];
        
        $artesano = new artesano($codigo, $contraseña, $nombre, $apellido, $correo, $telefono, $fechaIngreso, $estado);
        
        $this->model->editar($artesano);
        
        header("location:index.php");
    }
    
    public function eliminar(){
        //util::administradorLogin();
        $codigo=$_GET['codigo'];    
        $this->model->eliminar($codigo);
        
         header("location:index.php?controller=artesano&action=listar");
    }
    
    public function editarDatos(){
        $codigo = $_SESSION['codigoArtesano'];
        $artesano = $this->model->buscarArtesano($codigo);
        require_once 'view/include/header.php';
        require_once 'view/artesanos/editar.php';
        require_once 'view/include/footer.php';
        
        
    }
    
    
}
