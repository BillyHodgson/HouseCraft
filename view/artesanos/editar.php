<html>
<body>    
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Editar</h2>
      <form action="index.php?controller=artesano&action=editar" method="post">
          <legend>Editar</legend>
          <label>Codigo</label><br>
          <input type="text" readonly="" value="<?=$artesano->getCodigo();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="codigo">
          <label>Contraseña</label><br>
          <input type="text" value="<?=$artesano->getContraseña();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="contraseña">
          <label>Nombre</label><br>
          <input type="text" value="<?=$artesano->getNombre();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="nombre">
          <label>Apellido</label><br>
          <input type="text" value="<?=$artesano->getApellido();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="apellido">
          <label>Correo</label><br>
          <input type="text" value="<?=$artesano->getCorreo();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="correo">
          <label>Telefono:</label><br>
          <input type="text" value="<?=$artesano->getTelefono();?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="telefono">
          <label>Fecha:</label><br>
          <input type="date"  name="fecha" value="<?=$artesano->getFechaIngreso();?>"><br>
          <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_genero">Estado:</label>
                <select name="estado" value="<?=$artesano->getEstado();?>">                    
                    <option>Activo</option>
                    <option>Inactivo</option>
                </select>
            </div>
          <input type="submit" name="accion" value="Guardar">
          <input type="submit" name="accion" value="Cancelar">
      </form> 
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>