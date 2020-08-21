<div class="wrapper">
</div>
<?php
foreach($articulo as $posicion => $articulo):
?>
<div class="wrapper">
  <div id="intro">
    <ul>
     <?php     
     if ($articulo->getEstado()== "Disponible"):
     ?>    
      <li>
        <h2><?=$articulo->getNombre();?></h2>
        <div class="imgholder"><a href="#"><img height="400px" src="data:image/jpg;base64,<?php echo base64_encode($articulo->getImagen());?>"/></a></div>
        <td><a href="index.php?controller=compra&action=formularioComprar&codigo=<?=$articulo->getCodigo();?>">Comprar</a></td><br>
        <?php if(isset($_SESSION['artesanoLogueado'])):?>
        <td><a href="index.php?controller=articulos&action=eliminar&codigo=<?=$articulo->getCodigo();?>">Eliminar</a></td>    
        <td><a href="index.php?controller=articulos&action=fomularioEditar&codigo=<?=$articulo->getCodigo();?>">Editar</a></td><br>
        <?php endif;?>
        <label>Artesano:</label>
        <p><?=$articulo->getArtesano();?></p>
        <label>Descripcion:</label>
        <p><?=$articulo->getDescripcion();?></p>
        <label>Precio:</label>
        <p><?=$articulo->getPrecio();?></p>
        <label>Estado:</label>
        <p><?=$articulo->getEstado();?></p>
      </li>
      <?php endif;?>
    </ul>
    <br class="clear" />
  </div>
</div>
<?php 
                        endforeach;                  
?>
