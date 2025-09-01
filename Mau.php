<?php
   //Conexion a la base de datos
   $Conexion =new mysqli ("localhost","root","","sherazade");

    //Verificar la Conexion
    if($conexion->connect_error){
        die("Conexion Fallida: " . $conexion->connect_error);
    }
    //Extraer los Datos
    $Nombre =$_POST['nombre'];
    $Apellido =$_POST['Apellido'];
    $Fechanacimiento =$_POST['Fechanacimiento'];
    $Identificacion =$_POST['Identificacion'];
    $CedulaCiudadania=$_POST['Cedulaciudadania'];
    $CedulaExtranjera =$_POST['Cedulaextranjera'];
    $Celular =$_POST['Celular'];
    $Email =$_POST['Email'];
    $Direccion =$_POST['Direccion'];
    $IDCiudadEmail =$_POST['IDCiudad'];
    $IDDepartamento =$_POST['IDDepartamento'];

    //Insertar los datos a la BD
    $sql = "INSERT  INTO usuarios(Nombre, Apellido, FechaNacimiento, Identificacion, CedulaCiudadania, CedulaExtranjera, Celular, Email, Direccion, IDCiudad, IDDepartamento ) VALUES(?,?,?,?,?,?,?,?,?,?,')";
    $stm =$conexion->prepare($sql);
    $stml->bind_param("sss",$Nombre, $Apellido, $FechadeNacimiento, $Identificacion, $TarjetadeIdentidad, $CeduladeCiudadania, $CedulaExtranjera, $Celular, $Email, $Direccion, $IDCiudad, $IDDepartamento );

    if($stmt->execute()){
        echo "Registro Exitoso";
         }else{
        echo "Error". $stmt->error;
    }
        $stmt->close();
        $conexion->close();
?> 
    