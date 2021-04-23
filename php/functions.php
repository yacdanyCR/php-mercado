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
        
        $passencrypt=password_hash($pass,PASSWORD_DEFAULT);

        $sql="INSERT INTO usuario (correo,usuario,contraseña) VALUES
        (:correo,:usuario,:pass)";

        $result=$conexion->prepare($sql);
        $result->bindParam(':correo',$correo,PDO::PARAM_STR);
        $result->bindParam(':usuario',$usuario,PDO::PARAM_STR);
        $result->bindParam(':pass',$passencrypt,PDO::PARAM_STR);

        $success=$result->execute();

        if($success){
            return true;
        }else{
            return false;
        }
    }

    //function IniciarSession
    function iniciarSession($conexion,$correo,$pass){

        $sql="SELECT usuario,contraseña FROM usuario WHERE correo=:correo";

        $result=$conexion->prepare($sql);
        $result->bindParam(':correo',$correo,PDO::PARAM_STR);
        $result->execute();

        $row=$result->fetchObject();

        if(password_verify($pass,$row->contraseña)){
            return true;
        }else{
            return false;
        }
    }
?>