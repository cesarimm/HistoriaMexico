<?php
    include("conexion.php");

 $id = $_GET['id'];
  $consulta = "SELECT * FROM articulo WHERE id=".$id;
  $resultados = mysqli_query($enlace, $consulta);
  $valor = mysqli_fetch_assoc($resultados);

  $myObj = new stdClass();
  $myObj->id = $valor['id'];
  $myObj->titulo = $valor['titulo'];
  $myObj->cuerpo_articulo = $valor['cuerpo_articulo'];
  $myObj->fecha_publicacion = $valor['fecha_publicacion'];
  $myObj->autor = $valor['autor'];
  $myObj->link_imagen = $valor['link_imagen'];

  $myJSON = json_encode($myObj);

  echo $myJSON;
  mysqli_close($enlace);
?>
