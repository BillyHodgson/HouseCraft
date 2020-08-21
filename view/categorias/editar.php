<html>
<body>    
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Registre un Artesano</h2>
      <form action="index.php?controller=categoria&action=editar" method="post">
          <legend>Registro de Categoria</legend>
          <label>Codigo</label><br>
          <input type="text" value="<?=$categoria->getCodigo()?>" name="codigo">
          <label>Descripcion</label><br>
          <input type="text" value="<?=$categoria->getDescripcion()?>"   name="descripcion">
          <label>Fecha de Creacion</label><br>
          <input type="date" value="<?=$categoria->getFechaCreacion()?>"  name="fechaCreacion"><br>
          <input type="submit" name="accion" value="Guardar">
          <input type="submit" name="accion" value="Cancelar">
      </form> 
    </div>
    <br class="clear" />
  </div>
</div>
</body>
</html>