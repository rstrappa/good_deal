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
		
    $sql3 = mysqli_query($con,"SELECT * from tipo_cuenta");


    mysqli_close($con);

    echo '<select class="form-control" name="id_tipo1" id="id_tipo1" required>
    <option>Selecciona una opcion</option>';
      while ($c = mysqli_fetch_object($sql3)) 
      {
        echo '<option value="'.$c->id_tipo.'">'.$c->descripcion.'</option>';
       
      }
     echo '</select>';

  }

?>
