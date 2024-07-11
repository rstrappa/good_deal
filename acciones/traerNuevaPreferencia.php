<?php
session_start();

include ("../database.php");

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		echo mysqli_error();
	}
	else
	{

    $sql3 = mysqli_query($con,"SELECT * from tipo_beneficio");
		$sqlMx = mysqli_query($con,"SELECT max(id_tipo_beneficio) id from tipo_beneficio");


    mysqli_close($con);
		$max = mysqli_fetch_object($sqlMx);
    $i = 0;
              echo '<div class="col-md-6 col-sm-12" style="float:left;">
              <select id="id_preferencia" class="form-control" name="id_preferencia">
              <option value="">Elije una prferencia</option>';
            while ($c = mysqli_fetch_object($sql3))
            {
                $i++;
                echo '<option value="'.$c->id_tipo_beneficio.'">'.$c->descripcion.'</option>';

            }
            echo '</select>
            </div>
            <div class="col-md-6 col-sm-12" style="float:left;">
                    <select id="ranking_preferencia" class="form-control" name="ranking_preferencia">
                      <option value="">Elije el orden</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      </select>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 text-center mt-3">
                     <a style="background: #1E1062;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);color: #ffff;"onclick="agregarMisPreferencias()" class="btn btn-success">Agregar preferencia</a>
                    </div>
                  </div>';


  }

?>
