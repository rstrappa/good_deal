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

    $sql3 = mysqli_query($con,"SELECT t.descripcion descripcion, ranking_preferencia, p.id_preferencia_persona id_preferencia_persona
                                from preferencias_persona p
                                join tipo_beneficio t on p.id_preferencia = t.id_tipo_beneficio
                                where p.id_persona = $id order by ranking_preferencia asc");


    mysqli_close($con);

    echo '  <div class="col-md-12 col-sm-12">';
  while ($r = mysqli_fetch_object($sql3))
  {
    echo '
    <div class="row mt-2">
      <div class="col-md-12 col-sm-12">
        <div class="col-md-5 col-sm-12" style="float:left;">
          <h5>Categoria</h5>
          <label for="">'.$r->descripcion.'</label>
        </div>
        <div class="col-md-5 col-sm-12" style="float:left;">
          <h5>Preferencia</h5>
          <label for="">'.$r->ranking_preferencia.'</label>
        </div>
				<div class="col-md-2 col-sm-12" style="float:left;">
					<a onclick="eliminarPreferencia('.$r->id_preferencia_persona.')" class="btn btn-danger">X</a>
				</div>
      </div>
    </div>
    ';

  }
  echo '
  <div class="col-md-3 col-sm-4" >
      <a style="background: #1E1062;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);color: #ffff;"onclick="mostrarModalPreferencias()" class="btn btn-success">Agregar preferencia</a>
  </div>
  </div>
  ';


  }

?>
