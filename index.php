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
         <p class="logo">Personajes de México</p>
         <nav>
           <ul>
             <li><a href="">Sobre el sitio</a></li>
             <li><a href="">Artículos</a></li>
             <li><a href="">Panel del administrador</a></li>
           </ul>
         </nav>
       </div>
     </div>

     <div class="contenedor" id="contenedor-titulo-flex">
       <div class="contenedor-titulo">
         <h1>Historia de México</h1>
          <h2>Principales personajes Mexicanos</h2>
          <a href="">Ver articulos</a>
       </div>
     </div>
   </header>

<main>
<section id="sobre-el-sitio">
  <div class="contenedor">
    <h3>Sobre el sitio</h3>
    <div class="contenedor-sobre-sitio">
       <div class="personajes_img">
         <img src="imagenes/personajes.jpg">
       </div>
       <div class="texto">
         <p>Pues bien, sabemos que cada uno de nosotros tendrá su propia lista de mexicanos famosos, la cual seguramente es muy diferente de una persona a otra. Para de alguna forma homologar criterios, te presentamos un estudio realizado por el Grupo Macroconnections del Instituto Tecnológico de Massachusetts (MIT) cuyo resultado puede consultarse en la página web Pantheon.</p>
         <p>En dicho estudio se analizó la producción cultural de la humanidad del año 4000 a.C. hasta el 2010, basándose en varias fuentes que van desde Wikipedia hasta el libro Human Accomplishment de Charles Murray (recopilación de lo más notable en las ciencias y las artes hasta 1950).</p>
         <p>Con la información reunida y una metodología específica, el grupo de trabajo del MIT fueron jerarquizando los resultados a nivel mundial. Por ejemplo, en Wikipedia únicamente tomaban en cuenta a quienes en su entrada tienen 15 versiones en distintos idiomas, con lo que en cierta forma se justifica su popularidad mundial y peso histórico.</p>
         <a href="">Ver articulos</a>
       </div>
    </div>
  </div>
</section>

<section id="articulos">
<div class="contenedor">
  <h3>Articulos</h3>
  <div class="contenedor-articulos">
    <div class="articulo violeta">
      <h4>Diseño web</h4>
      <p>El próximo domingo, los ciudadanos tendrán ocasión de hacer política, de participar en la toma de decisiones públicas, cuando depositen su voto para elegir a 194 diputados de mayoría y tal vez cincuenta de partido</p>
      <img class="icono" src="imagenes/icon.png">
      <img class="ondas" src="imagenes/waves.png">
    </div>
    <div class="articulo celeste">
      <h4>Diseño web</h4>
      <p>El próximo domingo, los ciudadanos tendrán ocasión de hacer política, de participar en la toma de decisiones públicas, cuando depositen su voto para elegir a 194 diputados de mayoría y tal vez cincuenta de partido</p>
      <img class="icono" src="imagenes/icon.png">
      <img class="ondas" src="imagenes/waves.png">
    </div>
    <div class="articulo violeta">
      <h4>Diseño web</h4>
      <p>El próximo domingo, los ciudadanos tendrán ocasión de hacer política, de participar en la toma de decisiones públicas, cuando depositen su voto para elegir a 194 diputados de mayoría y tal vez cincuenta de partido</p>
      <img class="icono" src="imagenes/icon.png">
      <img class="ondas" src="imagenes/waves.png">
    </div>
    <div class="articulo celeste">
      <h4>Diseño web</h4>
      <p>El próximo domingo, los ciudadanos tendrán ocasión de hacer política, de participar en la toma de decisiones públicas, cuando depositen su voto para elegir a 194 diputados de mayoría y tal vez cincuenta de partido</p>
      <img class="icono" src="imagenes/icon.png">
      <img class="ondas" src="imagenes/waves.png">
    </div>
    <div class="articulo violeta">
      <h4>Diseño web</h4>
      <p>El próximo domingo, los ciudadanos tendrán ocasión de hacer política, de participar en la toma de decisiones públicas, cuando depositen su voto para elegir a 194 diputados de mayoría y tal vez cincuenta de partido</p>
      <img class="icono" src="imagenes/icon.png">
      <img class="ondas" src="imagenes/waves.png">
    </div>
    <div class="articulo celeste">
      <h4>Diseño web</h4>
      <p>El próximo domingo, los ciudadanos tendrán ocasión de hacer política, de participar en la toma de decisiones públicas, cuando depositen su voto para elegir a 194 diputados de mayoría y tal vez cincuenta de partido</p>
      <img class="icono" src="imagenes/icon.png">
      <img class="ondas" src="imagenes/waves.png">
    </div>
  </div>
</div>
</section>


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

<section id="mis-notas">
 <div class="contenedor">
   <h3>Mis articulos</h3>
   <div class="owl-carousel owl-theme insertar-items">
     <?php
         include("php/conexion.php");
         $consulta = "SELECT id, titulo, link_imagen FROM `articulo`";
         if($resultado = mysqli_query($enlace, $consulta)) {
             while ($row = mysqli_fetch_assoc($resultado)) {
                  $id = $row['id'];
                  echo "<div class='item'><img src='".$row['link_imagen']."' onclick='reemplazar(".$id.")'><p>".$row['titulo']."</p></div>";
             }
         }
         mysqli_close($enlace);
      ?>
     <!--<div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>
     <div class="item"><img src="imagenes/hidalgo.jpg"><p>Miguel Hidalgo</p></div>-->
 </div>
 </div>
</section>

<section id="sobre-el-sitio">
  <div class="contenedor">
    <h3 id="articulo_titulo">La revolución mexicana</h3>
    <div class="autor_fecha">
       <p id="articulo_autor_fecha">Autor 00/00/1562</p>
    </div>
    <div class="contenedor-sobre-sitio">
       <div class="personajes_img">
         <img src="imagenes/personajes.jpg" id="imagen-muestra">
       </div>
       <div class="texto">
         <p id="articulo_cuerpo">Pues bien, sabemos que cada uno de nosotros tendrá su propia lista de mexicanos famosos, la cual seguramente es muy diferente de una persona a otra. Para de alguna forma homologar criterios, te presentamos un estudio realizado por el Grupo Macroconnections del Instituto Tecnológico de Massachusetts (MIT) cuyo resultado puede consultarse en la página web Pantheon.
         </p>
       </div>
    </div>
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
<script src="owl/owl.carousel.min.js"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>
  </body>
</html>
