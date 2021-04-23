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

    function mostrarProductoSeleccionado($conexion,$id){
        $producto=array();
        $id_producto=$id;
        
        $sql="SELECT * FROM productos WHERE id=:id_producto";

        $result=$conexion->prepare($sql);
        $result->bindParam(':id_producto',$id_producto,PDO::PARAM_INT);
        $result->execute();

        while($row=$result->fetchObject()){
            $producto[]=$row;
        }

        return $producto;
    }

//producto seleccionado
?>