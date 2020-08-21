<html>
<body>    
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Registre su Compra</h2>
      <form action="index.php?controller=compra&action=registrar" method="post">
          <legend>Registro de Compra</legend>
          <label>Nombre del Comprador</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="nombreComprador">
          <label>Telefono</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="telefono">
          <label>Direccion</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="direccion">
          <label>Numero de Tarjeta</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="tarjeta">
          <label>Articulo Codigo</label><br>
          <input type="text" readonly="" value="<?=$articulo->getCodigo()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="articulo">
          <label>Precio:</label><br>
          <input type="text" readonly="" value="<?=$articulo->getPrecio()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="monto">
          <label>Codigo Artesano:</label><br>
          <input type="text" readonly="" value="<?=$articulo->getCodigoArtesano()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="codigoArtesano">
          <input type="submit" name="accion" value="Registrar">
          <input type="submit" name="accion" value="Cancelar">
      </form> 
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>