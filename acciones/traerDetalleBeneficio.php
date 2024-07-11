<?php
session_start();
include ("../database.php");
$id = $_REQUEST['id'];
//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		$sql = mysqli_query($con, "SELECT descripcion_larga, url_perfil, fecha_vencimiento, dia_beneficio, direccion_comercio, contacto
                                from beneficio
                                join comercio using(id_comercio)
                                WHERE id_beneficio =  $id");

		$sql1 = mysqli_query($con, "SELECT DISTINCT comunas.nombre nombre_comuna, regiones.nombre nombre_region
                                from beneficio
                                join comercio using(id_comercio)
                                left join beneficio_locales using(id_beneficio)
                                left join regiones on regiones.id = beneficio_locales.id_region
                                left join comunas on comunas.id = beneficio_locales.id_comuna
                                WHERE id_beneficio = $id");

      $r = mysqli_fetch_object($sql);

$dia = array("Lunes","Martes", "Miercoles","Jueves","Viernes","Sabado","Domingo","Todos los dias");

if ($r->url_perfil != null) {
	echo'
	<div class="row">
	  <div class="col-md-12 col-sm-12" style="float:left;">
	    <div class="col-md-12 col-sm-12">
	      <img style="width:100%;"src="'.$r->url_perfil.'" alt="">
	    </div>
	    <div class="col-md-12 col-sm-12">
	      '.$r->descripcion_larga.'
	    </div>
	  </div>
	</div>
	<div class="">
	  <div class="col-md-12 col-sm-12">
	    Contacto:'.$r->contacto.'<br>
	    Dia:'.$dia[$r->dia_beneficio - 1].'<br>
			Tiendas: ';
			while ($l = mysqli_fetch_object($sql1))
			{
				echo $l->nombre_region. ','.$l->nombre_comuna.'<br>';
			}
	    echo 'Vence: '.$r->fecha_vencimiento.'
	  </div>
	</div>

	';
}else {
	echo'
	<div class="row">
	  <div class="col-md-12 col-sm-12" style="float:left;">
	    <div class="col-md-12 col-sm-12">
	      <img style="width:100%;"src="assets/Img/logo.svg" alt="">
	    </div>
	    <div class="col-md-12 col-sm-12">
	      '.$r->descripcion_larga.'
	    </div>
	  </div>
	</div>
	<div class="">
	  <div class="col-md-12 col-sm-12">
	    Contacto:'.$r->contacto.'<br>
	    Dia:'.$dia[$r->dia_beneficio - 1].'<br>
			Tiendas: ';
 			while ($l = mysqli_fetch_object($sql1))
 			{
 				echo $l->nombre_region. ','.$l->nombre_comuna.'<br>';
 			}
 	    echo 'Vence: '.$r->fecha_vencimiento.'
	  </div>
	</div>

	';
}


  }

?>
