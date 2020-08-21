<div class="wrapper">
  <div id="container">
    <div id="content">
      <h2>Administradores Registrados</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th></th>
            <th></th>
            
          </tr>
        </thead>
        <tbody>
            <?php foreach($administradores as $key => $administrador):
                
            ?>
          <tr class="light">
            <td><?=$administrador->getCedula();?></td>
            <td><?=$administrador->getNombre();?></td>
            <td><?=$administrador->getApellido();?></td>
            <td><?=$administrador->getTelefono();?></td>
            <td><?=$administrador->getCorreo();?></td>
            <td><?=$administrador->getContraseña();?></td>
            <td><a href="index.php?controller=administrador&action=fomularioEditar&cedula=<?=$administrador->getCedula();?>">Editar</a></td>>
            <td><a href="index.php?controller=administrador&action=eliminar&cedula=<?=$administrador->getCedula();?>">Eliminar</a></td>>
          </tr>
          
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
    <br class="clear" />
  </div>
</div>