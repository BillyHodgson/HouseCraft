<?php

class util {
    
    public static function administradorLogin(){
        if(isset($_SESSION['usuarioLogueado'])){
            return true;
        }else{
            header("location:index.php?controller=administrador&action=mostrarLogin");
        }
    }
    
}
