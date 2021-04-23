<?php

//productos seccion productos
    function mostrarProductos($conexion){
        $registros=array();
        $sql="SELECT id,nombre,precio,imagen,categoria FROM productos";

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

    //function seleccionarUsuario
    function obtenerUsuario($conexion,$email){
        $sql="SELECT usuario FROM usuario WHERE correo=:correo";

        $result=$conexion->prepare($sql);
        $result->bindParam(':correo',$email,PDO::PARAM_STR);
        $result->execute();

        return $row=$result->fetchObject();
    }

    //CerrarSession
    function cerrarSession(){
        session_destroy();
        header('Location:login.php');
    }

    //guardarProductos
    function guardarProducto($conexion,$nombre,$precio,$categoria,$imagen){
       $nombre_img=$_FILES['file']['name'];
       $formato_img=$_FILES['file']['type'];
       $ubicacion=$_FILES['file']['tmp_name'];

       $uploads_img='img/productos';

       $sql="INSERT INTO productos (nombre,precio,categoria,imagen) VALUES 
       (:nombre,:precio,:categoria,:imagen)";

       $result=$conexion->prepare($sql);
       $result->bindParam(':nombre',$nombre,PDO::PARAM_STR);
       $result->bindParam(':precio',$precio,PDO::PARAM_STR);
       $result->bindParam(':categoria',$categoria,PDO::PARAM_STR);
       $result->bindParam(':imagen',$nombre_img,PDO::PARAM_STR);
       
       if($result->execute()){
           move_uploaded_file($ubicacion,"$uploads_img/$nombre_img");
           return true;
       }else{
           return false;
       }
    }
?>