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
         <h1>Sección de artículos</h1>
          <h2>Desliza el slide para ver todos los artículos disponibles y da click sobre la imagen para visualizarlo en el panel inferior.</h2>
       </div>
     </div>
   </header>

<main>
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
