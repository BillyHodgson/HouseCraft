<?php
 session_start();
  require_once 'autoload.php';
  require_once 'utils/util.php';
 
  if(isset($_GET['controller'])){
      $nombreControlador = $_GET['controller'].'Controller';
      $controller = new $nombreControlador();
  }else{
      $controller = new articulosController();
  }
  if(!isset($_GET['action'])){
      $controller->listar();
  }else{
      $metodo = $_GET['action'];
      $controller->$metodo();
  }  
   
  
?>