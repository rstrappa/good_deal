<?php
session_start();

include ("../database.php");
$id = $_REQUEST['id'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		echo mysqli_error();
	}
	else
	{

    $sql3 = mysqli_query($con,"SELECT p.nombre nombre_persona, p.rut rut, p.direccion direccion_persona,
                                      c.nombre nombre_comuna, r.nombre nombre_region
                                      FROM persona p
                                      join comunas c on p.id_comuna = c.id
                                      join regiones r on p.id_region = r.id where p.id_persona = $id");


    mysqli_close($con);


    $r = mysqli_fetch_object($sql3);

    echo '
    <div class="col-md-12 col-sm-12">
      <div class="row mt-2">
        <div class="col-md-12 col-sm-12">
          <div class="col-md-6 col-sm-12" style="float:left;">
            <h5>Nombre</h5>
            <label for="">'.$r->nombre_persona.'</label>
          </div>
          <div class="col-md-6 col-sm-12" style="float:left;">
            <h5>Rut</h5>
            <label for="">'.$r->rut.'</label>
          </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-md-12 col-sm-12">
          <div class="col-md-6 col-sm-12" style="float:left;">
            <h5>Direccion</h5>
            <label for="">'.$r->direccion_persona.'</label>
          </div>
          <div class="col-md-6 col-sm-12" style="float:left;">
            <h5>Comuna</h5>
            <label for="">'.$r->nombre_comuna.'</label>
          </div>
        </div>
      </div>
    </div>

    ';

  }

?>
