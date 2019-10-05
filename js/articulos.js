function guardar() {
    // 1) Referencias a nuestros campos
    var varTitulo = $('#titulo');
      var varAutor = $('#autor');
        var varFecha = $('#fecha');
           var varImagen = $('#imagen_art');
             var varCuerpo = $('#descripcion');
    // 2) Mandar los datos al servidor
    // Usando AJAX con jQuery
  //console.log("TITULO "+varTitulo.val());
  //console.log("AUTOR "+varAutor.val());
  //console.log("FECHA "+varFecha.val());
  //En caso de que se necesite actualizar
if($('#btnEnviar').val() == 'Actualizar') return actualizar();
//Ajax para agregar un articulo nuevo
    $.ajax({
        url: "php/guardarArticulo.php",
        type: 'post',
        data: {
            titulo : varTitulo.val(),
            autor: varAutor.val(),
            fecha: varFecha.val(),
            imagen_art: varImagen.val(),
            descripcion: varCuerpo.val()
        },
        error: function(p1, p2, p3) {
            // Se regresa al estado anterior
            estadoDefault();
            alert("Error: " + p3);
        },
        success: function(respuesta, status, jqXHR) {
            alert("Articulo agregado correctamente");
             $('#titulo').val('');
             $('#autor').val('');
             $('#fecha').val('');
             $('#imagen_art').val('');
             $('#descripcion').val('');
             location.reload();
        }
    });
}

function leerNombreArticulos() {
    $.ajax({
        url: "php/leerNombreArticulos.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.registros').html(d);
        }
    });
}


function leerImagenArticulos() {
    $.ajax({
        url: "php/leerImagenArticulos.php",
        error: function(p1, p2, p3) {
            alert(p3);
        },
        success: function(d, status, jqXHR) {
            $('.insertar-items').html(d);
        }
    });
}


function eliminar(idEliminar) {
        $.ajax({
            url: "php/eliminarArticulo.php",
            data: {
                id: idEliminar
            },
            error: function(p1, p2, p3) {
                estadoDefault();
                alert("Error: " + p3);
            },
            success: function(respuesta, status, jqXHR) {
                 alert("Articulo eliminado correctamente");
                 location.reload();
            }
        });

}

/*<h3 id="articulo_titulo">La revolución mexicana</h3>
<div class="autor_fecha">
   <p id="articulo_autor_fecha">Autor 00/00/1562</p>
</div>
<div class="contenedor-sobre-sitio">
   <div class="personajes_img">
     <img src="imagenes/personajes.jpg" id="imagen-muestra">
   </div>
   <div class="texto">
     <p id="articulo_cuerpo">Pues bien, sabemos que cada uno de nosotros tendrá su propia lista de mexicanos famosos, la cual seguramente es muy diferente de una persona a otra. Para de alguna forma homologar criterios, te presentamos un estudio realizado por el Grupo Macroconnections del Instituto Tecnológico de Massachusetts (MIT) cuyo resultado puede consultarse en la página web Pantheon.
     </p>*/

function reemplazar(idActualizar) {
  $.ajax({
      url: "php/getArticulo.php",
      data: {id: idActualizar},
      error: function(p1, p2, p3) {
          estadoDefault();
          alert("Error: " + p3);
      },
      success: function(data, status, jqXHR) {
          var d = JSON.parse(data);
          $('#articulo_titulo').text(d.titulo);
          var auxAutFec = d.autor + " " + d.fecha_publicacion;
          $('#articulo_autor_fecha').text(auxAutFec);
          $('#articulo_cuerpo').text(d.cuerpo_articulo);
          $('#imagen-muestra').attr('src', d.link_imagen);
      }
  });

}


function patch(idEditar) {
    $.ajax({
        url: "php/getArticulo.php",
        data: {id: idEditar},
        error: function(p1, p2, p3) {
            estadoDefault();
            alert("Error: " + p3);
        },
        success: function(data, status, jqXHR) {
            var d = JSON.parse(data);
            $('#auxiliar').val(d.id);
            $('#titulo').val(d.titulo);
            $('#autor').val(d.autor);
            $('#fecha').val(d.fecha_publicacion);
            $('#descripcion').val(d.cuerpo_articulo);
            $('#imagen_art').val(d.link_imagen);
            $('#btnEnviar').val('Actualizar');
        }
    });
}

function actualizar() {
  var varTitulo = $('#titulo');
    var varAutor = $('#autor');
      var varFecha = $('#fecha');
         var varImagen = $('#imagen_art');
           var varCuerpo = $('#descripcion');
             var idEditar = $('#auxiliar');

    $.ajax({
        url: "php/actualizarArticulo.php",
        type: 'post',
        data: {
          id: idEditar.val(),
          titulo: varTitulo.val(),
          autor: varAutor.val(),
          fecha: varFecha.val(),
          imagen_art: varImagen.val(),
          descripcion: varCuerpo.val()
        },
        error: function(p1, p2, p3) {
            estadoDefault();
            alert("Error: " + p3);
        },
        success: function(respuesta, status, jqXHR) {
            if(respuesta.indexOf("error") > -1) {
              alert("Ocurrio un error desconocido");
            }
            else {
              alert("Articulo actualizado correctamente");
              location.reload();
            }
        }
    });
}
