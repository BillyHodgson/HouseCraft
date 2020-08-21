<html>
<body>    
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Registro de Articulo</h2>
      <p>Ingrese la informacion de el articulo</p>
      <form action="index.php?controller=articulos&action=editar" method="post" enctype="multipart/form-data">
        <fieldset>
          <legend>Registro</legend>
          <label>Codigo</label><br>
          <input type="text" readonly="" value="<?=$articulo->getCodigo()?>" name="codigo" onfocus="this.value=(this.value=='')? '' : this.value;">
          <label>Nombre</label><br>
          <input type="text" value="<?=$articulo->getNombre()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="nombre">
          <label>Descripcion</label><br>
          <input type="text" value="<?=$articulo->getDescripcion()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="descripcion">
          <label>Categoria</label><br>
          <input type="text" value="<?=$articulo->getCategoria()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="categoria">
          <label>Precio:</label><br>
          <input type="number" value="<?=$articulo->getPrecio()?>"  onfocus="this.value=(this.value=='')? '' : this.value;" name="precio">
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_genero">Estado:</label>
                <select name="estado">                    
                    <option>Disponible</option>
                    <option>Agotado</option>
                </select>
            </div>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_genero">Artesano:</label>
                <select name="artesano">                    
                        <?php foreach($listaArtesanos as $row => $artesano): ?>
                    <option><?=$artesano->getNombre()." ".$artesano->getApellido();?></option>
                    <?php endforeach; ?>
                </select>
            </div>
          <label>Imagen</label><br>
          <input type="file" class="imgholder" name="imagen" value=""><br>
          <div class="imgholder"><a href="#"><img height="400px" src="data:image/jpg;base64,<?php echo base64_encode($articulo->getImagen());?>"/></a></div>
        </fieldset>
      <input type="submit" name="accion" value="Guardar">
      <input type="submit" name="accion" value="cancelar">  
      </form>
      
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>