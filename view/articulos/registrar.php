<html>
<body>  
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Registro de Articulo</h2>
      <p>Ingrese la informacion de el articulo</p>
      <form action="index.php?controller=articulos&action=registrar" method="post" enctype="multipart/form-data">
        <fieldset>
          <legend>Registro</legend>
          <label>Nombre</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="nombre">
          <label>Descripcion</label><br>
          <input type="text" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="descripcion">
          <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_genero">Categoria:</label>
                <select name="categoria">                    
                        <?php foreach($listaCategorias as $row => $categoria): ?>
                    <option><?=$categoria->getDescripcion();?></option>
                    <?php endforeach; ?>
                </select>
            </div>
          <label>Precio</label><br>
          <input type="number" value=""  onfocus="this.value=(this.value=='')? '' : this.value;" name="precio">
          <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_genero">Estado:</label>
                <select name="estado">                    
                    <option>Disponible</option>
                    <option>Agotado</option>
                </select>
            </div>
          <label>Imagen</label><br>
          <input type="file" class="" name="imagen"><br>
        </fieldset>
      <input type="submit" name="accion" value="registrar">
      <input type="submit" name="accion" value="cancelar">  
      </form>
      
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>