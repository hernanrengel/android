<?php
    include('conexion.php');
    $nombre=trim($_POST['nombre']);
    $apellidos=trim($_POST['apellidos']);
    $correo=trim($_POST['correo']);
    $telefono=trim($_POST['telefono']);
    $institucion=trim($_POST['institucion']);
    $departamento=trim($_POST['departamento']);

    $sql="INSERT INTO participante(id,nombre,apellidos,correo,telefono,institucion,departamento) 
    VALUES(null,'$nombre','$apellidos','$correo','$telefono','$institucion','$departamento')";

    mysql_query($sql,$con);
    mysql_close($con);
?>