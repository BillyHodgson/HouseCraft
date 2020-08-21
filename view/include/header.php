<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Darkness
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>HouseCraft</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="./assets/layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="">HouseCraft</a></h1>
      <p>Artesanias unicas</p>
    </div>
    <div id="topnav">
      <ul>
        <li><a href="index.php?controller=articulos&action=listar">Home</a></li>
        <?php if(isset($_SESSION['artesanoLogueado'])):?>
        <li><a href="index.php?controller=articulos&action=formularioregistrar">Registrar Articulos</a></li>       
        <li><a href="index.php?controller=artesano&action=editarDatos">Modificar mis Datos</a></li>
        <li><a href="index.php?controller=compra&action=listar">Listar Compras</a></li>
        <?php elseif(isset($_SESSION['administradorLogueado'])): ?>  
        <li><a href="index.php?controller=categoria&action=formularioregistrar">Registrar Categorias</a></li>
        <li><a href="index.php?controller=artesano&action=formularioregistrar">Registrar Artesano</a></li>
        <li><a href="index.php?controller=artesano&action=listar">Listar Artesanos</a></li>
        <li><a href="index.php?controller=administrador&action=formularioregistrar">Registrar Administrador</a></li>
        <li><a href="index.php?controller=administrador&action=listar">Listar Administradores</a></li>  
        <li><a href="index.php?controller=categoria&action=listar">Listar Categorias</a></li>
        <li><a href="index.php?controller=compra&action=listar">Listar Compras</a></li>
         <?php endif;?>
        <?php if(isset($_SESSION['artesanoLogueado']) or (isset($_SESSION['administradorLogueado']))): ?>
        <li>   
         <a href="index.php?controller=administrador&action=cerrarSesion">Cerrar Sesion</a>
        </li>
        <?php else:?>
        <li>
        <a href="index.php?controller=administrador&action=mostrarLogin">Iniciar Sesion</a>    
        </li>
        <?php endif;?>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>