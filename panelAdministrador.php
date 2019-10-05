<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="estilos/estilos.css">
    <meta charset="utf-8">
    <title>Personajes de México</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="js/owl.carousel.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/articulos.js"></script>
  </head>
  <body>
   <header>
     <div class="menu">
       <div class="contenedor">
         <p class="logo">Sandra Edith Nava Montero</p>
         <nav>
           <ul>
             <li><a href="main.php">Inicio</a></li>
             <li><a href="articulos.php">Artículos</a></li>
             <li><a href="panelAdministrador.php">Panel del administrador</a></li>
           </ul>
         </nav>
       </div>
     </div>

     <div class="contenedor" id="contenedor-titulo-flex">
       <div class="contenedor-titulo">
         <h1>Historia de México</h1>
          <h2>Panel del administrador</h2>
       </div>
     </div>
   </header>

<main>
<section id="registro">
  <div class="contenedor">
    <h3>Agregar artículo</h3>
    <form enctype="multipart/form-data">
     <input type="text" name="titulo" id="titulo" value="" placeholder="Titulo del artículo" required>
     <input type="text" name="autor" id="autor" value="" placeholder="Autor del artículo" required>
     <input type="date" name="fecha" id="fecha" value="" required>
     <input type="text" name="imagen_art" id="imagen_art" value="" placeholder="Inserte el link de la imagen" required>
     <textarea name="descripcion" id="descripcion" placeholder="Cuerpo del artículo" required></textarea>
     <input type="button" name="btnEnviar" id="btnEnviar" value="Enviar" onclick="guardar();">
    </form>


    <p id="auxiliar"></p>
    <table class="tabla-registros">
        <thead>
            <th>Titulo</th>
            <th>Acciones</th>
        </thead>
        <tbody class="registros">
        </tbody>
    </table>

  </div>
</section>
</main>

<footer>
  <div class="contenedor">
    <div class="redes">
      <a href="#"><img src="imagenes/gmail.png"></a>
      <a href="#"><img src="imagenes/face.png"></a>
      <a href="#"><img src="imagenes/wsp.png"></a>
    </div>
    <div class="parrafo">
          <p>2019 Sandra Edith Nava Montero. Todos los derechos reservados</p>
    </div>
  </div>
</footer>


<script type="text/javascript">
    $(document).ready(function() {
        leerNombreArticulos();
    });
</script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  </body>
</html>
