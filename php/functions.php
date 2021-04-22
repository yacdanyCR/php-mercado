<?php

//productos seccion productos
    function mostrarProductos($conexion){
        $registros=array();
        $sql="SELECT id,nombre,precio,imagen FROM productos";

        $result=$conexion->prepare($sql);
        $result->execute();

        while($row=$result->fetchObject()){
            $registros[]=$row;
        }

        return $registros;
    }

//producto seleccionado
?>