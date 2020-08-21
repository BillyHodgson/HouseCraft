<html>
<body>    
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Registre un Administrador</h2>
      <form action="index.php?controller=administrador&action=registrar" method="post">
          <legend>Registro</legend>
          <label>Cedula</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="cedula">
          <label>Nombre</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="nombre">
          <label>Apellido</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="apellido">
          <label>Telefono:</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="telefono">
          <label>Correo</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="correo">
          <input type="submit" name="accion" value="Registrar">
          <input type="submit" name="accion" value="Cancelar">
      </form> 
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>
