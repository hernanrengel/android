<?php
    include('conexion.php');
    $nombrec=trim($_POST['nombrec']);
    $correoc=trim($_POST['correoc']);
    $comentc=trim($_POST['comentc']);

    $sql="INSERT INTO contactos (id,nombre,correo,coment) VALUES(null,'$nombrec','$correoc','$comentc')";

    mysql_query($sql,$con);
    mysql_close($con);
?>