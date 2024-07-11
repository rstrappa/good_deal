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
		$sql = mysqli_query($con, "SELECT * from comunas where idreg = $id");

        echo '
        <select class="form-control" id="id_comuna" name="id_comuna" onchange="{filtrar(); filtrarMisPreferencias();}" required>
        <option value="">Selecione una comuna</option>';

        while ($r = mysqli_fetch_object($sql))
        {
            echo '<option value="'.$r->id.'">'.$r->nombre.'</option>';
        }
        echo '</select>';




  }

?>
