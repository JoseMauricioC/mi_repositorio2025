<?php
    include("conexion.php");

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellidos"];
    $direccion = $_POST["direccion"];
    $fechaNa = $_POST["fechaNacimiento"];
    $sexo = $_POST["sexo"];
    $telefono = $_POST["telefono"];

    $sql2 = "INSERT INTO (nombre,apellidos,direccion,fechaNacimiento,sexo,telefono)";
    $sql2 . "VALUES('$nombre','$apellido','$direccion','$fechaNa','$sexo',$telefono)";
    // $sql = "INSERT INTO persona VALUES('$nombre','$apellido','$direccion', '$fechaNa', '$sexo',$telefono)";
    mysqli_query($con,$sql2);

?>
<p>Se inserto con exito</p>
<meta http-equiv="refresh" content="2;url=listar.php">