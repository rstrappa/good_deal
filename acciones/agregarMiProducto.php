<?php
session_start();

include ("../database.php");
$id = $_REQUEST['id'];
$id_beneficiador = $_REQUEST['id_beneficiador'];
$id_tipo = $_REQUEST['id_tipo'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		echo mysqli_error();
	}
	else
	{

    $sql3 = mysqli_query($con,"INSERT INTO cuenta_bancaria(id_persona,id_beneficiador,id_tipo) VALUES($id,$id_beneficiador,$id_tipo)");


    mysqli_close($con);

    echo '<label style="color:green;">Exito al agregar</label>';

  }

?>
