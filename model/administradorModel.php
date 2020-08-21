<?php

require_once 'baseDatos/ConexionDB.php';
require_once 'administrador.php';

class administradorModel {
    
        private $db;
    
    function __construct() {
        $this->db = new ConexionDB();
    }
    
    public function listar(){
        $administradores = array();
        $this->db->getConeccion();
        $sql="SELECT * FROM ADMINISTRADORES";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        foreach ($registros as $row){
            $administrador = new administrador($row['cedula'],$row['nombre'],$row['apellido'],$row['telefono'],$row['correo'],$row['contraseña']);
            array_push($administradores, $administrador);
        }
        
        return $administradores;
    }
    
     public function registrar($administrador){
        $this->db->getConeccion();
        $sql="INSERT INTO ADMINISTRADORES (CEDULA,NOMBRE,APELLIDO,TELEFONO,CORREO,CONTRASEÑA) VALUES(?,?,?,?,?,?)";
        $paramType= 'ississ';
        $paramValue= array($administrador->getCedula(),
                           $administrador->getNombre(),
                           $administrador->getApellido(),
                           $administrador->getTelefono(),
                           $administrador->getCorreo(),
                           $administrador->getContraseña());
                           
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();        
    }
    
       public function buscarAdministrador($cedula){
        $this->db->getConeccion();
        $sql="SELECT * FROM ADMINISTRADORES WHERE CEDULA =$cedula";        
        $registros = $this->db->executeQueryReturnData($sql);  
        $this->db->cerrarConeccion();
        
        if($registros !=null){
            $cedula = $registros[0]['cedula'];
            $nombre = $registros[0]['nombre'];
            $apellido = $registros[0]['apellido'];
            $telefono= $registros[0]['telefono'];
            $correo= $registros[0]['correo'];
            $contraseña = $registros[0]['contraseña'];
            
            $administrador = new administrador($cedula, $nombre, $apellido, $telefono, $correo, $contraseña);
            return $administrador;
        }else{
           return null;   
        }
    }
    
    public function editar($administrador){
        $this->db->getConeccion();
        $sql="UPDATE ADMINISTRADORES SET NOMBRE=?, APELLIDO=?, TELEFONO=?, CORREO=?, CONTRASEÑA=? WHERE CEDULA=?";
        $paramType= 'ssissi';
        $paramValue= array($administrador->getNombre(),
                           $administrador->getApellido(),
                           $administrador->getTelefono(),
                           $administrador->getCorreo(),
                           $administrador->getContraseña(),
                           $administrador->getCedula());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();           
    }
    
    public function eliminar($cedula){
        $this->db->getConeccion();
        $sql="DELETE FROM ADMINISTRADORES WHERE CEDULA=?";
        $paramType='i';
        $paramValue= array($cedula);
         $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
        
    }
    
       public function login($correo,$contraseña){

       $this->db->getConeccion();
       
       $sql="SELECT * FROM ADMINISTRADORES WHERE CORREO='$correo' AND CONTRASEÑA='$contraseña'";
       $registros = $this->db->executeQueryReturnData($sql);
       $this->db->cerrarConeccion();
       
       if($registros !=null){
           $cedula=$registros[0]['cedula'];
           $nombre=$registros[0]['nombre'];
           $apellido=$registros[0]['apellido'];
           $telefono= $telefono[0]['telefono'];
           $correo= $registros[0]['correo'];
           $contraseña= $registros[0]['contraseña'];
           
           
           $administrador = new administrador($cedula, $nombre,$apellido, $telefono, $correo, $contraseña);
           
           return $administrador;           
       } else {
           return null;
       }    
   }
   
   
    
}
