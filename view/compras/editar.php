<html>
<body>    
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Registre su Compra</h2>
      <form action="index.php?controller=compra&action=editar" method="post">
          <legend>Registro de Compra</legend>
          <label>ID</label><br>
          <input type="text" value="<?=$compra->getid()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="id">
          <label>Nombre del Comprador</label><br>
          <input type="text" value="<?=$compra->getNombreComprador()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="nombreComprador">
          <label>Telefono</label><br>
          <input type="text" value="<?=$compra->getTelefono()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="telefono">
          <label>Direccion</label><br>
          <input type="text" value="<?=$compra->getDireccion()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="direccion">
          <label>Numero de Tarjeta</label><br>
          <input type="text" value="<?=$compra->getTarjeta()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="tarjeta">
          <label>Articulo Codigo</label><br>
          <input type="text" readonly="" value="<?=$compra->getArticulo()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="articulo">
          <label>Monto:</label><br>
          <input type="text" value="<?=$compra->getMonto()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="monto">
          <input type="submit" name="accion" value="Guardar">
          <input type="submit" name="accion" value="Cancelar">
      </form> 
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>