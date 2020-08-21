<body id="top">
<div class="wrapper">
<div id="container">
<div id="respond">
        <form action="index.php?controller=administrador&action=login" method="post">
             <label class=" col-sm-2 control-label" for="txt_genero">Tipo de Usuario:</label>
                <select name="tipoUsuario">                    
                    <option>Administrador</option>
                    <option>Artesano</option>
                </select>  
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="">Correo</label>
                <input type="text" class="form-control" name="correo">
            </div>
          </p>
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="">Contraseña</label>
                <input type="password" class="form-control" name="contraseña">
            </div>
          </p>
          <div class="">
               <input type="submit" name="accion" value="Iniciar Sesion">
               <input type="submit" name="accion" value="Cancelar">   
          </div>    
          </p>
        </form>
</div>
</div>
</div>
</body>