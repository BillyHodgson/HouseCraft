<?php
function autocargar($nombreClase){
    require_once 'controller/'.$nombreClase.'.php';
}
spl_autoload_register('autocargar');