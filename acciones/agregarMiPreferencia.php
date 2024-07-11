<?php
session_start();

include ("../database.php");
$id = $_REQUEST['id'];
$id_preferencia = $_REQUEST['id_preferencia'];
$ranking_preferencia = $_REQUEST['ranking_preferencia'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		echo mysqli_error();
	}
	else
	{

    $sql3 = mysqli_query($con,"INSERT INTO preferencias_persona(id_persona, id_preferencia, ranking_preferencia) VALUES($id,$id_preferencia,$ranking_preferencia)");


    mysqli_close($con);

    echo '<label style="color:green;">Exito al agregar la preferencia</label>';

  }

?>
