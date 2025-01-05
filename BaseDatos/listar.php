<?php
include("conexion.php");
$sql = "SELECT * FROM personas";
$consulta = mysqli_query($con,$sql);?>

<table border="1">
    <tr>
        <th>nombre</th>
        <th>apellidos</th>
        <th>direccion</th>
        <th>fecha de nacimiento</th>
        <th>sexo</th>
        <th>telefono</th>
        <th>profesion</th>
    </tr>
    <?php
        while($fila = mysqli_fetch_array($consulta))
        {
    ?>
        <tr>
            <td><?php  echo $fila["nombre"];?></td>
            <td><?php  echo $fila["apellido"];?></td>
            <td><?php  echo $fila["direccion"];?></td>
            <td><?php  echo $fila["fecha_nacimiento"];?></td>
            <td><?php  echo $fila["sexo"];?></td>
            <td><?php  echo $fila["telefono"];?></td>
            <td><?php  echo $fila["profesion_id"];?></td>
        </tr>
       <?php } ?>
</table>

<a href="form_insertar.html">Insertar</a>