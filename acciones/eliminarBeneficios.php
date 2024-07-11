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

    $sql3 = mysqli_query($con,"TRUNCATE TABLE beneficio");


    mysqli_close($con);
    header('Location: ../registrarBeneficios.php?m=Se eliminaron los beneficios');

  }

?>
