<?php
try{
    $conexion=new pdo('mysql:host=localhost;dbname=restaurante;','root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "estoy conextado";

}catch(Exception $e){
    echo ("Error ".$e->getMessage());
}
?>