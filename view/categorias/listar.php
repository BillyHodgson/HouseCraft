<div class="wrapper">
  <div id="container">
    <div id="content">
      <h2>Categorias Registradas</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Fecha de Creacion</th>
            <th></th>
            <th></th>
            
          </tr>
        </thead>
        <tbody>
            <?php 
            foreach($categorias as $key => $categoria):    
            ?>
          <tr class="light">
            <td><?=$categoria->getCodigo();?></td>
            <td><?=$categoria->getDescripcion();?></td>
            <td><?=$categoria->getFechaCreacion();?></td>          
            <td><a href="index.php?controller=categoria&action=fomularioEditar&codigo=<?=$categoria->getCodigo();?>">Editar</a></td>>
            <td><a href="index.php?controller=categoria&action=eliminar&codigo=<?=$categoria->getCodigo();?>">Eliminar</a></td>>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
    <br class="clear" />
  </div>
</div>