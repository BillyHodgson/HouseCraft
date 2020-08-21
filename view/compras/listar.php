<div class="wrapper">
  <div id="container">
    <div id="content">
      <h2>Compras Realizadas</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre de Comprador</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Numero de Tarjeta</th>
            <th>Codigo del Articulo</th>
            <th>Precio</th>
            <th>Codigo Artesano</th>
            <th></th>
            <th></th>
            
          </tr>
        </thead>
        <tbody>
            <?php foreach($compras as $key => $compra):?>
          <tr class="light">
            <td><?=$compra->getId();?></td> 
            <td><?=$compra->getNombreComprador();?></td>
            <td><?=$compra->getTelefono();?></td>
            <td><?=$compra->getDireccion();?></td>
            <td><?=$compra->getTarjeta();?></td>
            <td><?=$compra->getArticulo();?></td>
            <td><?=$compra->getMonto();?></td>
            <td><?=$compra->getCodigoArtesano();?></td>
            <td><a href="index.php?controller=compra&action=fomularioEditar&id=<?=$compra->getId();?>">Editar</a></td>>
            <td><a href="index.php?controller=compra&action=eliminar&id=<?=$compra->getId();?>">Eliminar</a></td>>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
    <br class="clear" />
  </div>
</div>