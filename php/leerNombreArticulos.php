<?php
    include("conexion.php");

    $consulta = "SELECT id, titulo FROM `articulo`";
    if($resultado = mysqli_query($enlace, $consulta)) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            $id = $row['id'];
            $X = "<a href='javascript: void(0);' class='accion' onclick='eliminar(".$id.")'>
            <img src='imagenes/x-button.png' alt='X' title='Eliminar'>
            </a>";
            $A = "<a href='javascript: void(0);' class='accion' onclick='patch(".$id.")'>
            <img src='imagenes/pencil.png' alt='E' title='Editar'>
            </a>";
            echo "<tr>";
            echo "<td>".$row['titulo']."</td>";
            echo "<td>".$X.$A."</td>";
            echo "</tr>";
        }
    }
    mysqli_close($enlace);
?>
