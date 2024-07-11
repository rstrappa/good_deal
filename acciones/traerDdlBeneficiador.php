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
		
    $sql3 = mysqli_query($con,"SELECT id_beneficiador, nombre_beneficiador from beneficiador order by ranking_beneficiador asc");


    mysqli_close($con);

    echo '<input type="hidden" id="hCont" name="hCont" value="2"/>
    <select class="form-control" name="id_beneficiador1" id="id_beneficiador1" required>
    <option>Selecciona una opcion</option>';
      while ($c = mysqli_fetch_object($sql3)) 
      {
        echo '<option value="'.$c->id_beneficiador.'">'.$c->nombre_beneficiador.'</option>';
       
      }
     echo '</select>';

  }

?>
