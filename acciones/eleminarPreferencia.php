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

    $sql3 = mysqli_query($con,"DELETE FROM preferencias_persona where id_preferencia_persona = $id");


    mysqli_close($con);

  }

?>