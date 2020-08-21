<?php

require_once 'baseDatos/ConexionDB.php';
require_once 'artesano.php';

class artesanoModel {
   
    private $db;
    
    function __construct() {
        $this->db = new ConexionDB();
    }
    
    public function listar(){
        $artesanos = array();
        $this->db->getConeccion();
        $sql="SELECT * FROM ARTESANO";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        foreach ($registros as $row){
            $artesano = new artesano($row['codigo'],$row['contraseña'],$row['nombre'],$row['apellido'],$row['correo'],$row['telefono'],$row['fechaingreso'],$row['estado']);
            array_push($artesanos, $artesano);
        }
        
        return $artesanos;
    }
    
     public function registrar($artesano){
        $this->db->getConeccion();
        $sql="INSERT INTO ARTESANO (CODIGO,CONTRASEÑA,NOMBRE,APELLIDO,CORREO,TELEFONO,FECHAINGRESO,ESTADO) VALUES(?,?,?,?,?,?,?,?)";
        $paramType= 'issssiss';
        $paramValue= array($artesano->getCodigo(),
                           $artesano->getContraseña(),
                           $artesano->getNombre(),
                           $artesano->getApellido(),
                           $artesano->getCorreo(),
                           $artesano->getTelefono(),
                           $artesano->getFechaIngreso(),
                           $artesano->getEstado());
                           
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();        
    }
    
       public function buscarArtesano($codigo){
        $this->db->getConeccion();
        $sql="SELECT * FROM ARTESANO WHERE CODIGO =$codigo";        
        $registros = $this->db->executeQueryReturnData($sql);  
        $this->db->cerrarConeccion();
        
        if($registros !=null){
            $codigo = $registros[0]['codigo'];
            $contraseña = $registros[0]['contraseña'];
            $nombre = $registros[0]['nombre'];
            $apellido = $registros[0]['apellido'];
            $correo= $registros[0]['correo'];
            $telefono= $registros[0]['telefono'];
            $fechaIngreso = $registros[0]['fechaingreso'];
            $estado= $registros[0]['estado'];
            
            $artesano = new artesano($codigo, $contraseña, $nombre, $apellido, $correo, $telefono, $fechaIngreso, $estado);
            return $artesano;
        }else{
           return null;   
        }
    }
    
    public function editar($artesano){
        $this->db->getConeccion();
        $sql="UPDATE ARTESANO SET CONTRASEÑA=?, NOMBRE=?, APELLIDO=?, CORREO=?, TELEFONO=?, FECHAINGRESO=?, ESTADO=? WHERE CODIGO=?";
        $paramType= 'ssssissi';
        $paramValue= array($artesano->getContraseña(),
                           $artesano->getNombre(),
                           $artesano->getApellido(),
                           $artesano->getCorreo(),
                           $artesano->getTelefono(),
                           $artesano->getFechaIngreso(),
                           $artesano->getEstado(),
                           $artesano->getCodigo());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();           
    }
    
    public function eliminar($codigo){
        $this->db->getConeccion();
        $sql="DELETE FROM ARTESANO WHERE CODIGO=?";
        $paramType='i';
        $paramValue= array($codigo);
         $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
        
    }
    
     public function login($correo,$contraseña){

       $this->db->getConeccion();
       
       $sql="SELECT * FROM ARTESANO WHERE CORREO='$correo' AND CONTRASEÑA='$contraseña'";
       $registros = $this->db->executeQueryReturnData($sql);
       $this->db->cerrarConeccion();
       
       if($registros !=null){
            $codigo = $registros[0]['codigo'];
            $contraseña = $registros[0]['contraseña'];
            $nombre = $registros[0]['nombre'];
            $apellido = $registros[0]['apellido'];
            $correo= $registros[0]['correo'];
            $telefono= $registros[0]['telefono'];
            $fechaIngreso = $registros[0]['fechaingreso'];
            $estado= $registros[0]['estado'];
           
           
           $artesano = new artesano($codigo, $contraseña, $nombre, $apellido, $correo, $telefono, $fechaIngreso, $estado);
           
           return $artesano;           
       } else {
           return null;
       }    
    
}
}
