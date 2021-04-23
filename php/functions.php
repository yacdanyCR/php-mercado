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

    //mostrarProducto al seleccionar en la secion de productos
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

    //registrarUusarios
    function registrarUsuario($conexion,$correo,$usuario,$pass){
        $sql="INSERT INTO usuario (correo,usuario,contraseña) VALUES
        (:correo,:usuario,:contraseña)";

        $result=$conexion->prepare($sql);
        $result->bindParam(':correo',$_POST['correo'],PDO::PARAM_STR);
        $result->bindParam(':usuario',$_POST['usuario'],PDO::PARAM_STR);
        $result->bindParam(':contraseña',$_POST['pass'],PDO::PARAM_STR);

        $success=$result->execute();

        if($success){
            return true;
        }else{
            return false;
        }
    }
?>