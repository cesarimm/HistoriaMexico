<?php
    include("conexion.php");

    if(isset($_GET['id'])) {
        $queryEliminar = "DELETE FROM articulo WHERE id=".$_GET['id'];
        if($resultado = mysqli_query($enlace, $queryEliminar))
            echo "Se ha eliminado correctamente";
        else {
            $error = mysqli_error($enlace);
            echo "Hubo un error al tratar de eliminar ";
        }
    }
    mysqli_close($enlace);

    /*UPDATE `articulo` SET `titulo` = 'La revolución 1910', `cuerpo_articulo` = 'Es un hecho muy importante ocurrido hace más de 100 años, en donde la toma de Zacatecas fue uno de los sucesos más importantes de México.', `fecha_publicacion` = '2019-10-03', `autor` = 'Israel Campos Garcia', `link_imagen` = 'google.com.mx' WHERE `articulo`.`id` = 1; */
    /*SELECT * FROM `articulo` where id='1'*/
?>
