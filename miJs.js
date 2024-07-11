//Traer todas las promos
$.post('acciones/traerPromos.php',function(data){
    $("#divPromos").html(data);
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        nav:false,
        items:4,
        margin:10,
        rewind:true
    });
});

//Traer promos restaurantes
$.post('acciones/traerPromosRestaurantes.php',function(data){
    $("#divPromosRestaurantes").html(data);
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        items:4,
        margin:10,
        rewind:true
    });
});

//Traer promos viajes
$.post('acciones/traerPromosViajes.php',function(data){
    $("#divPromosViajes").html(data);
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        items:4,
        margin:10,
        rewind:true
    });
});

//Traer promos Entretencion
$.post('acciones/traerPromosEntretencion.php',function(data){
    $("#divPromosEntretencion").html(data);

    $('.owl-carousel').owlCarousel({
        autoplay:true,
        items:4,
        margin:10,
        rewind:true
    });
});


//Traer mis promociones
var id_persona = $("#hId").val();
$.post('acciones/traerPreferencias.php',{id_persona:id_persona},function(data){
    $("#divMisPromos").html(data);
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        items:4,
        margin:10,
        rewind:true
    });
});

// Traer Podrias tener
$.post('acciones/traerPreferenciasPodriasTener.php',{id_persona:id_persona},function(data){
    $("#divPromosPodrias").html(data);
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        items:4,
        margin:10,
        rewind:true
    });
});
//Filtrar por dias y localidades
$("#ddlDia").change(function(){
  var dia = $("#ddlDia").val();
  var id_region = $("#id_region").val();
  var id_comuna = $("#id_comuna").val();
  if (dia == 'nada')
  {
    $.post('acciones/traerPromos.php',function(data){
        $("#divPromos").html(data);
        $('.owl-carousel').owlCarousel({
            autoplay:true,
            items:4,
            margin:10,
            rewind:true
        });
    });
    $("#id_region").val('');
    $("#id_comuna").val('');
  }
  else
  {

    $.post('acciones/traerPromosFiltroDia.php',{dia:dia,id_region:id_region,id_comuna:id_comuna},function(data){
      $("#divPromos").html(data);
      $('.owl-carousel').owlCarousel({
          autoplay:true,
          items:4,
          margin:10,
          rewind:true
      });
    })
  }
});
function filtrar()
{

  var dia = $("#ddlDia").val();
  var id_region = $("#id_region").val();
  var id_comuna = $("#id_comuna").val();
  if (dia == 'nada' && id_region == '' && id_comuna == '')
  {
    console.log("No seleccionaste nada");
    $.post('acciones/traerPromos.php',function(data){
        $("#divPromos").html(data);
        $('.owl-carousel').owlCarousel({
            autoplay:true,
            items:4,
            margin:10,
            rewind:true
        });
    });
  }
  else
  {
    console.log("Entro aqui");
    $.post('acciones/traerPromosFiltroDia.php',{dia:dia,id_region:id_region,id_comuna:id_comuna},function(data){
      $("#divPromos").html(data);
      $('.owl-carousel').owlCarousel({
          autoplay:true,
          items:4,
          margin:10,
          rewind:true
      });
    })
  }
}

function filtrarMisPreferencias()
{
  var dia = $("#ddlDia").val();
  var id_region = $("#id_region").val();
  var id_comuna = $("#id_comuna").val();
  if (dia == 'nada' && id_region == '' && id_comuna == '')
  {
    $.post('acciones/traerPreferencias.php',{id_persona:id_persona},function(data){
        $("#divMisPromos").html(data);
        $('.owl-carousel').owlCarousel({
            autoplay:true,
            items:4,
            margin:10,
            rewind:true
        });
    });
  }
  else
  {
    $.post('acciones/traerPromosPreferenciasFiltro.php',{dia:dia,id_region:id_region,id_comuna:id_comuna,id_persona:id_persona},function(data){
      $("#divMisPromos").html(data);
      $('.owl-carousel').owlCarousel({
          autoplay:true,
          items:4,
          margin:10,
          rewind:true
      });
    })
  }
}

//Traer nombre de la persona
$.post('acciones/traerNombre.php',{id_persona:id_persona},function(data){
    $("#divNombre").html(data);
});

//Traer Regiones registro
$.post('acciones/traerRegiones.php',function(data){
    $("#divRegiones").html(data);
});
//Traer comunas registro

function traerComunas()
{
    var id = $("#id_region").val();
    $.post('acciones/traerComunas.php',{id:id},function(data){
        $("#divComunas").html(data);
    });
}

//Traer beneficiadores registro
$.post('acciones/traerDdlBeneficiador.php',function(data){
    $("#ddlBeneficiador").html(data);
});

//Traer tipo registro
$.post('acciones/traerDdlTipo.php',function(data){
    $("#ddlTipo").html(data);
});

//Traer preferencias registro
$.post('acciones/traerPreferenciasRegistro.php',function(data){
    $("#preferencias").html(data);
});

function agregarProducto()
{
    var i = $("#hCont").val();
    $.post('acciones/agregarProducto.php',{i:i},function(data){
        $("#masProductos").append(data);
    });
    var nI = parseInt(i);
    $("#hCont").val(nI+1);

}

function mostrarModal(id)
{
  $.post('acciones/traerDetalleBeneficio.php',{id:id},function(data){
    $("#modalDiv").html(data);
  });
  $('#modal').modal('show');
}

function mostrarModalProductos()
{

  $('#modalProductos').modal('show');
}

function mostrarModalPreferencias()
{

  $('#modalPreferencias').modal('show');
}

//Traer mi Datos

var id = $("#sId").val();
if (id != null)
{
  //Traer datos propios
  $.post('acciones/traerMisDatos.php',{id:id},function(data){
    $("#divMisDatos").html(data);
  });
//traer productos
  $.post('acciones/traerMisProductos.php',{id:id},function(data){
    $("#divMisProductos").html(data);
  });

  //traer mis preferencias
    $.post('acciones/traerMisPreferencias.php',{id:id},function(data){
      $("#divMisPreferencias").html(data);
    });

    $.post('acciones/traerNuevaPreferencia.php',function(data){
      $("#divModalNuevaPreferencia").html(data);
    });
}

function eliminarProducto(id)
{
  $.post('acciones/eliminarProducto.php',{id:id},function(data){
      location.reload();
  });
}

function eliminarPreferencia(id)
{
  $.post('acciones/eleminarPreferencia.php',{id:id},function(data){
      location.reload();
  });
}
function agregarMisProductos()
{
    var id = $("#sId").val();
    var id_beneficiador = $("#id_beneficiador1").val();
    var id_tipo = $("#id_tipo1").val();

    $.post('acciones/agregarMiProducto.php',{id:id,id_beneficiador:id_beneficiador,id_tipo:id_tipo},function(data){
        $("#divMensaje").html(data);
    });
}
function agregarMisPreferencias()
{
    var id = $("#sId").val();
    var id_preferencia = $("#id_preferencia").val();
    var ranking_preferencia = $("#ranking_preferencia").val();
    $.post('acciones/agregarMiPreferencia.php',{id:id,id_preferencia:id_preferencia,ranking_preferencia:ranking_preferencia},function(data){
        $("#divMensajePreferencia").html(data);
    });
}

function cerrarModal()
{
  $("#modalProductos").modal('hide');
  $("#modalCategorias").modal('hide');
  location.reload();
}
//Checkear rut
function checkRut(rut) {
    // Se quitan los puntos y los guiones mediante el metodo replace
    var valor = rut.value.replace('.','');
    valor = valor.replace('-','');

    // Aislar Cuerpo y Dígito Verificador
    var cuerpo = valor.slice(0,-1);
    var dv = valor.slice(-1).toUpperCase();

    // Formatear rut
    rut.value = cuerpo +'-'+ dv;

    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) {
    $("#fg_rut").addClass('has-error');
        rut.setCustomValidity("RUT Incompleto");
    return false;
    }

    // Calcular Dígito Verificador
    var suma = 0;
    var multiplo = 2;

    // Para cada dígito del Cuerpo
    for(var i=1;i<=cuerpo.length;i++) {

        // Obtener su Producto con el Múltiplo Correspondiente
        var index = multiplo * valor.charAt(cuerpo.length - i);

        // Sumar al Contador General
        suma = suma + index;

        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) {
            multiplo = multiplo + 1;
        }else{
            multiplo = 2;
        }
    }

    // se calcula el dv con modulo 11
    var dvEsperado = 11 - (suma % 11);

    // Casos Especiales (0 y K)
    if(dv == 'K'){
        dv = 10;
    }else{
        dv=dv;
    }
    if(dv == 0){
       dv = 11;
    }else{
       dv = dv;
    }

    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv){
        rut.setCustomValidity("RUT Inválido");
    $("#fg_rut").addClass('has-error');
    return false;
    }




    //se resetea el setCustomValidity en caso de haber ocurrido alguna ocurrencia en el if
    rut.setCustomValidity('');
    }
