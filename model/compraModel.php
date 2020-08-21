<?php

    require_once 'baseDatos/ConexionDB.php';
    require_once 'compra.php';
    
    
class compraModel {
    private $db;
    
    function __construct() {
        $this->db = new ConexionDB();
    }
    
    public function listar($codigoArtesano){
        $compras = array();
        $this->db->getConeccion();
        $sql="SELECT * FROM COMPRAS WHERE CODIGOARTESANO LIKE '%$codigoArtesano%'";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        foreach ($registros as $row){
            $compra = new compra($row['id'],$row['nombreComprador'], $row['telefono'],$row['direccion'],$row['tarjeta'],$row['articulo'],$row['monto'],$row['codigoArtesano']);
            array_push($compras, $compra);
        }
        
        return $compras;
    }
    
         public function registrar($compra){
        $this->db->getConeccion();
        $sql="INSERT INTO COMPRAS (ID,NOMBRECOMPRADOR, TELEFONO, DIRECCION, TARJETA, ARTICULO, MONTO, CODIGOARTESANO) VALUES(?,?,?,?,?,?,?,?)";
        $paramType= 'isisisii';
        $paramValue= array($compra->getId(),
                           $compra->getNombreComprador(),
                           $compra->getTelefono(),
                           $compra->getDireccion(),
                           $compra->getTarjeta(),
                           $compra->getArticulo(),
                           $compra->getMonto(),
                           $compra->getCodigoArtesano());
                           
                    
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();        
    }
    
    public function buscarCompra($id){
        $this->db->getConeccion();
        $sql="SELECT * FROM COMPRAS WHERE ID=$id";        
        $registros = $this->db->executeQueryReturnData($sql);  
        $this->db->cerrarConeccion();
        
        if($registros !=null){
            $id = $registros[0]['id'];
            $nombreComprador = $registros[0]['nombreComprador'];
            $telefono = $registros[0]['telefono'];
            $direccion = $registros['0']['direccion'];
            $tarjeta = $registros[0]['tarjeta'];
            $articulo = $registros['0']['articulo'];
            $monto= $registros['0']['monto'];
            $codigoArtesano= $registros['0']['codigoArtesano'];
            
            $compra = new compra($id, $nombreComprador, $telefono, $direccion, $tarjeta, $articulo,$monto,$codigoArtesano);
            return $compra;
        }else{
           return null;   
        }
    }
    
    public function editar($compra){
        $this->db->getConeccion();
        $sql="UPDATE COMPRAS SET NOMBRECOMPRADOR=?, TELEFONO=?, DIRECCION=?, TARJETA=?, ARTICULO=?, MONTO=?, CODIGOARTESANO=? WHERE ID=?";
        $paramType= 'sisiiii';
        $paramValue= array($compra->getNombreComprador(),
                           $compra->getTelefono(),
                           $compra->getDireccion(),
                           $compra->getTarjeta(),
                           $compra->getArticulo(),
                           $compra->getMonto(),
                           $compra->getCodigoArtesano(),
                           $compra->getId());
                           
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();           
    }
    
    public function eliminar($id){
        $this->db->getConeccion();
        $sql="DELETE FROM COMPRAS WHERE ID=?";
        $paramType='i';
        $paramValue= array($id);
         $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
        
    }
    
    
}
