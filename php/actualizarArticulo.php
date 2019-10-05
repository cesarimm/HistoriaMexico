<?php
    // Incluir el archivo de conexión a la BD
    include("conexion.php");
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $fecha = $_POST['fecha'];
    $imagen = $_POST['imagen_art'];
    $cuerpo_articulo = $_POST['descripcion'];
    $cadenaError = "Ha ocurrido un error desconocido";

    //Se crea la consulta para crear un nuevo articulo en la base de datos
    /*INSERT INTO `articulo` (`id`, `titulo`, `cuerpo_articulo`, `fecha_publicacion`,
    `autor`, `link_imagen`) VALUES (NULL, 'La revolución', 'Es un hecho muy importante ocurrido hace más de 100 años,
     en donde la toma de Zacatecas fue uno de los sucesos más importantes.',
    '2019-10-02', 'Israel Campos', 'google.com');*/
    $consulta = "UPDATE `articulo` SET `titulo` = '".$titulo."', `cuerpo_articulo` = '".$cuerpo_articulo."', `fecha_publicacion` = '".$fecha."', `autor` = '".$autor."', `link_imagen` = '".$imagen."' WHERE `articulo`.`id`='".$id."';";
    //ejecutar query
    $resultado = mysqli_query($enlace, $consulta);
    //Cerrar la conexión
    mysqli_close($enlace);
?>
