<div class="wrapper">
  <div id="container">
    <div id="content">
      <h2>Artesanos Registrados</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Contraseña</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Fecha de Ingreso</th>
            <th>Estado</th>
            <th></th>
            <th></th>
            
          </tr>
        </thead>
        <tbody>
            <?php foreach($artesanos as $key => $artesano):
                
            ?>
          <tr class="light">
            <td><?=$artesano->getCodigo();?></td>
            <td><?=$artesano->getContraseña();?></td>
            <td><?=$artesano->getNombre();?></td>
            <td><?=$artesano->getApellido();?></td>
            <td><?=$artesano->getCorreo();?></td>
            <td><?=$artesano->getTelefono();?></td>
            <td><?=$artesano->getFechaIngreso();?></td>
            <td><?=$artesano->getEstado();?></td>
            <td><a href="index.php?controller=artesano&action=fomularioEditar&codigo=<?=$artesano->getCodigo();?>">Editar</a></td>>
            <td><a href="index.php?controller=artesano&action=eliminar&codigo=<?=$artesano->getCodigo();?>">Eliminar</a></td>>
          </tr>
          
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
    <br class="clear" />
  </div>
</div>