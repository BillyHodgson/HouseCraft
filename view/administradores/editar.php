<html>
<body>    
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Editar Administrador/h2>
      <form action="index.php?controller=administrador&action=editar" method="post">
          <legend>Editar</legend>
          <label>Cedula</label><br>
          <input type="text" value="<?=$administrador->getCedula();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="cedula">
          <label>Nombre</label><br>
          <input type="text" value="<?=$administrador->getNombre();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="nombre">
          <label>Apellido</label><br>
          <input type="text" value="<?=$administrador->getApellido();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="apellido">
          <label>Telefono:</label><br>
          <input type="text" value="<?=$administrador->getTelefono();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="telefono">
          <label>Correo</label><br>
          <input type="text" value="<?=$administrador->getCorreo();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="correo">
          <label>Contraseña</label><br>
          <input type="text" value="<?=$administrador->getContraseña();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="contraseña">
          <input type="submit" name="accion" value="Guardar">
          <input type="submit" name="accion" value="Cancelar">
      </form> 
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>