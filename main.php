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
    <main>
     <div class="contenedor" id="contenedor-titulo-flex">
       <div class="contenedor-titulo">
         <h1>Historia de México</h1>
          <h2>Principales personajes Mexicanos</h2>
          <a href="articulos.php">Ver articulos</a>
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
         <a href="articulos.php">Ver articulos</a>
       </div>
    </div>
  </div>
</section>

<section id="articulos">
<div class="contenedor">
  <h3>Principales artículos</h3>
  <div class="contenedor-articulos">
    <?php
        include("php/conexion.php");
        $consulta = "SELECT titulo, cuerpo_articulo FROM articulo LIMIT 6";
        $i=0;
        if($resultado = mysqli_query($enlace, $consulta)) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                $i++;
                if($i==1||$i==3||$i==5){
                   echo "<div class='articulo violeta'>";
                }
                else{
                   echo "<div class='articulo celeste'>";
                }
                 echo "<h4>".$row['titulo']."</h4>";
                 echo "<p>".$row['cuerpo_articulo']."</p>";
                 echo "<img class='icono' src='imagenes/icon.png'>";
                 echo "<img class='ondas' src='imagenes/waves.png'>";
                 echo "</div>";
            }
        }
        mysqli_close($enlace);
     ?>
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
  </body>
</html>
