<?php
require_once 'baseDatos/ConexionDB.php';
require_once 'categoria.php';

class categoriaModel {
    
    private $db;
    
    function __construct() {
        $this->db = new ConexionDB();
    }
    
    
    public function listar(){
        $categorias = array();
        $this->db->getConeccion();
        $sql="SELECT * FROM CATEGORIAS";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        foreach ($registros as $row){
            $categoria = new categoria($row['codigo'],$row['descripcion'], $row['fechaCreacion']);
            array_push($categorias, $categoria);
        }
        
        return $categorias;
    }
    
     public function registrar($categoria){
        $this->db->getConeccion();
        $sql="INSERT INTO CATEGORIAS (CODIGO,DESCRIPCION,FECHACREACION) VALUES(?,?,?)";
        $paramType= 'iss';
        $paramValue= array($categoria->getCodigo(),
                           $categoria->getDescripcion(),
                           $categoria->getFechaCreacion());
                           
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();        
    }
    
    public function buscarCategoria($codigo){
        $this->db->getConeccion();
        $sql="SELECT * FROM CATEGORIAS WHERE CODIGO =$codigo";        
        $registros = $this->db->executeQueryReturnData($sql);  
        $this->db->cerrarConeccion();
        
        if($registros !=null){
            $codigo = $registros[0]['codigo'];
            $descripcion = $registros['0']['descripcion'];
            $fechaCreacion = $registros['0']['fechaCreacion'];
            
            $categoria = new categoria($codigo, $descripcion, $fechaCreacion);
            return $categoria;
        }else{
           return null;   
        }
    }
    
    public function editar($categoria){
        $this->db->getConeccion();
        $sql="UPDATE CATEGORIAS SET DESCRIPCION=?, FECHACREACION=? WHERE CODIGO=?";
        $paramType= 'ssi';
        $paramValue= array($categoria->getDescripcion(),
                           $categoria->getFechaCreacion(),
                           $categoria->getCodigo());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();           
    }
    
    public function eliminar($codigo){
        $this->db->getConeccion();
        $sql="DELETE FROM CATEGORIAS WHERE CODIGO=?";
        $paramType='i';
        $paramValue= array($codigo);
         $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
        
    }
    
}
