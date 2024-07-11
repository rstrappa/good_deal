<?php
session_start();

include ("../database.php");
$i = $_REQUEST['i'];
//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		echo mysqli_error();
	}
	else
	{
    $sql = mysqli_query($con,"SELECT id_beneficiador, nombre_beneficiador from beneficiador order by ranking_beneficiador asc");
    $sql2 = mysqli_query($con,"SELECT * from tipo_cuenta");


    mysqli_close($con);

    //Traer Productos
    echo '<div class="row mt-2">
    <h5>Producto '.$i.'</h5>
    <div class="col-md-3 col-sm-4" style="float:left;">
            <select class="form-control" name="id_beneficiador'.$i.'" id="id_beneficiador'.$i.'" required>
                <option>Selecciona una opcion</option>';
                while ($r = mysqli_fetch_object($sql)) 
                {
                    echo '<option value="'.$r->id_beneficiador.'">'.$r->nombre_beneficiador.'</option>';
                
                }
            echo '</select>
            </div>';

    //Traer tipos
    echo '<div class="col-md-3 col-sm-4" style="float:left;">
            <select class="form-control" name="id_tipo'.$i.'" id="id_tipo'.$i.'" required>
                <option>Selecciona una opcion</option>';
                while ($c = mysqli_fetch_object($sql2)) 
                {
                    echo '<option value="'.$c->id_tipo.'">'.$c->descripcion.'</option>';
                
                }
            echo '</select>
            </div>
            </div>';

  }

?>
