<html>
<body>    
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Registre un Artesano</h2>
      <form action="index.php?controller=categoria&action=registrar" method="post">
          <legend>Registro de Categoria</legend>
          <label>Descripcion</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="descripcion">
          <label>Fecha de Creacion</label><br>
          <input type="date" placeholder="Fecha" name="fecha"><br>
          <input type="submit" name="accion" value="Registrar">
          <input type="submit" name="accion" value="Cancelar">
      </form> 
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>