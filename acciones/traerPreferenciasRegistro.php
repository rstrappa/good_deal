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
            while ($c = mysqli_fetch_object($sql3))
            {
                $i++;
                echo '<div class="col-md-12 col-sm-12">
												<div class="col-md-6 col-sm-12" style="float:left">
													<input type="checkbox" value="'.$c->id_tipo_beneficio.'" name="preferencia'.$i.'" id="preferencia'.$i.'"><label>'.$c->descripcion.'</label>
												</div>
												<div class="col-md-4 col-sm-12 mt-3" style="float:left;">
																<select id="ranking_preferencia'.$i.'" class="form-control" name="ranking_preferencia'.$i.'">
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
													</div>';

            }
            echo '<input type="hidden" name="hCantPreferencias" id="hCantPreferencias" value="'.$i.'"/>';


  }

?>
