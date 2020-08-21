<?php

require_once 'model/administradorModel.php';
require_once 'model/artesanoModel.php';

class administradorController {
         private $model;
         private $model2;
    
    
    function __construct(){
        $this->model = new administradorModel();
        $this->model2 = new artesanoModel();
       
    }
    
    public function listar(){
        $administradores = $this->model->listar();
        require_once 'view/include/header.php';
        require_once 'view/administradores/listar.php';
        require_once 'view/include/footer.php';
    }
    
    public function formularioregistrar(){
        //util::administradorLogin();
        //$listaArticulos = $this->model2->listar();
        require_once 'view/include/header.php';
        require_once 'view/administradores/registrar.php';
        require_once 'view/include/footer.php';
        
    }
    
    
     public function registrar(){
        //util::administradorLogin();
        $cedula=$_POST['cedula'];
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $telefono= $_POST['telefono'];      
        $correo= $_POST['correo'];
        $contraseña="12345";
        
        $administrador = new administrador($cedula, $nombre, $apellido, $telefono, $correo, $contraseña);
        
        $this->model->registrar($administrador);
        
        header("location:index.php?controller=administrador&action=listar");
        
    }
    
         public function fomularioEditar(){
         //util::administradorLogin();
        $cedula=$_GET['cedula'];    
        $administrador = $this->model->buscarAdministrador($cedula);
        require_once 'view/include/header.php';
        require_once 'view/administradores/editar.php';
        require_once 'view/include/footer.php';
    }


    public function editar(){
        //util::administradorLogin();
        $cedula= $_POST['cedula'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $contraseña = $_POST['contraseña'];
        
        $administrador = new administrador($cedula, $nombre, $apellido, $telefono, $correo, $contraseña);
        
        $this->model->editar($administrador);
        
        header("location:index.php?controller=administrador&action=listar");
    }
    
    public function eliminar(){
        //util::administradorLogin();
        $cedula=$_GET['cedula'];    
        $this->model->eliminar($cedula);
        
         header("location:index.php?controller=administrador&action=listar");
    }
    
    public function login(){
        $tipoUsuario=$_POST['tipoUsuario'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        
        if($tipoUsuario == "Administrador"){
        $administrador = $this->model->login($correo,$contraseña);

            if ($administrador != null){
                $_SESSION['administradorLogueado'] = $administrador;          
                header("location:index.php");
            }else{
                header("location:index.php?controller=administrador&action=mostrarLogin");
            }
        }else{
                $artesano = $this->model2->login($correo,$contraseña);  
                if ($artesano != null){
                    if($artesano->getEstado()=="Activo"){
                            $_SESSION['artesanoLogueado'] = $artesano;
                            $_SESSION['codigoArtesano']= $artesano->getCodigo();
                            $_SESSION['nombre']= $artesano->getNombre()." ". $artesano->getApellido();
                            header("location:index.php");
                    }else{
                            echo "<script>alert('Usuario Inactivo');
                            window.location= 'login.php'
                            </script>";
                            header("location:index.php");
                    }
              }else{
                  header("location:index.php?controller=administrador&action=mostrarLogin");
              }  
        }
    }
    
    public function mostrarLogin(){
        require_once 'view/include/header.php';
        require_once 'view/administradores/login.php';
        require_once 'view/include/footer.php';

    }
    
    public function cerrarSesion(){
        session_destroy();
        header("location:index.php?controller=administrador&action=mostrarLogin");
    }
}
