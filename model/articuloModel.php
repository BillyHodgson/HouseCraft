<?php
require_once 'baseDatos/ConexionDB.php';
require_once 'articulo.php';

class articuloModel {
    
     private $db;
    
    function __construct() {
        $this->db = new ConexionDB();
    }

    public function listar($codigoArtesano){
        $articulos = array();
        $this->db->getConeccion();
        $sql="SELECT * FROM ARTICULOS WHERE CODIGOARTESANO LIKE '%$codigoArtesano%'";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        foreach ($registros as $row){
            $articulo = new articulo($row['codigo'],$row['nombre'],$row['descripcion'],$row['categoria'],$row['precio'],$row['imagen'],$row['estado'],$row['artesano'],$row['codigoArtesano']);
            array_push($articulos, $articulo);
        }
        
        return $articulos;
    }
    
    
    public function listarTodo(){
        $articulos = array();
        $this->db->getConeccion();
        $sql="SELECT * FROM ARTICULOS";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        foreach ($registros as $row){
            $articulo = new articulo($row['codigo'],$row['nombre'],$row['descripcion'],$row['categoria'],$row['precio'],$row['imagen'],$row['estado'],$row['artesano'],$row['codigoArtesano']);
            array_push($articulos, $articulo);
        }
        
        return $articulos;
    }
    
    
    public function registrar($articulo){
        $this->db->getConeccion();
        $sql="INSERT INTO ARTICULOS (CODIGO,NOMBRE,DESCRIPCION,CATEGORIA,PRECIO,IMAGEN,ESTADO,ARTESANO,CODIGOARTESANO) VALUES(?,?,?,?,?,?,?,?,?)";
        $paramType= 'isssisssi';
        $paramValue= array($articulo->getCodigo(),
                           $articulo->getNombre(),
                           $articulo->getDescripcion(),
                           $articulo->getCategoria(),
                           $articulo->getPrecio(),
                           $articulo->getImagen(),
                           $articulo->getEstado(),
                           $articulo->getArtesano(),
                           $articulo->getCodigoArtesano());
                           
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();        
    }
    
     public function buscarArticulo($codigo){
        $this->db->getConeccion();
        $sql="SELECT * FROM ARTICULOS WHERE CODIGO =$codigo";        
        $registros = $this->db->executeQueryReturnData($sql);  
        $this->db->cerrarConeccion();
        
        if($registros !=null){
            $codigo = $registros[0]['codigo'];
            $nombre = $registros[0]['nombre'];
            $descripcion = $registros[0]['descripcion'];
            $categoria = $registros[0]['categoria'];
            $precio= $registros[0]['precio'];
            $imagen= $registros[0]['imagen'];
            $estado= $registros[0]['estado'];
            $artesano= $registros[0]['artesano'];
            $codigoArtesano= $registros[0]['codigoArtesano'];
            
            $articulo = new articulo($codigo, $nombre, $descripcion, $categoria, $precio, $imagen, $estado,$artesano,$codigoArtesano);
            return $articulo;
        }else{
           return null;   
        }
    }
    
    public function editar($articulo){
        $this->db->getConeccion();
        $sql="UPDATE ARTICULOS SET NOMBRE=?, DESCRIPCION=?, CATEGORIA=?, PRECIO=?, IMAGEN=?, ESTADO=?, ARTESANO=? WHERE CODIGO=?";
        $paramType= 'sssisssi';
        $paramValue= array($articulo->getNombre(),
                           $articulo->getDescripcion(),
                           $articulo->getCategoria(),
                           $articulo->getPrecio(),
                           $articulo->getImagen(),
                           $articulo->getEstado(),
                           $articulo->getArtesano(),
                           $articulo->getCodigo());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();           
    }
    
    public function eliminar($codigo){
        $this->db->getConeccion();
        $sql="DELETE FROM ARTICULOS WHERE CODIGO=?";
        $paramType='i';
        $paramValue= array($codigo);
         $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
        
    }
    
    public function cambiarEstado($codigo){
        $estado="Agotado";
        $this->db->getConeccion();
        $sql="UPDATE ARTICULOS SET ESTADO=? WHERE CODIGO=?";
        $paramType='si';
        $paramValue= array($estado,$codigo);
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();

    }
}
