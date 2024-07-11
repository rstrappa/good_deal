<?php
session_start();
include ("../database.php");

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		$sql = mysqli_query($con, "SELECT * from regiones");

        echo '
        <select class="form-control" id="id_region" name="id_region" onchange="{traerComunas(); filtrar();filtrarMisPreferencias();}" required>
        <option value="">Selecione una region</option>';

        while ($r = mysqli_fetch_object($sql))
        {
            echo '<option value="'.$r->id.'">'.$r->nombre.'</option>';
        }
        echo '</select>';




  }

?>
