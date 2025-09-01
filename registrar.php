<?php
    //Conexion a la base de datos
    $conexion = new mysqli("localhost","root","","sherazade");

  //Verificar la conexion
  if($conexion->connect_error){
        die("Conexion Fallida: " . $conexion->connect_error);
    }

    //Extraer los datos
    $nombre =$_POST['nombre'];
    $email =$_POST['email'];
    $contrasena =$_POST['contrasena'];

    //Insertar datos a la BD
    $sql = "INSERT  INTO usuarios(Nombre, Email, Contrasena) VALUES(?,?,?)";
    $stm =$conexion->prepare($sql);
    $stml->bind_param("sss", $nombre, $email, $contrasena);   

     if($stmt->execute()){
        echo "Registro Exitoso";
    }else{
        echo "Error". $stmt->error;
    }
        $stmt->close();
        $conexion->close();
?> 