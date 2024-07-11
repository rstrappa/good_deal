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
		
    $sql3 = mysqli_query($con,"SELECT nombre_beneficiador from beneficiador right join beneficio using(id_beneficiador) group by nombre_beneficiador order by min(ranking_beneficiador)");


    mysqli_close($con);
    $beneficiadores = array();

    $e = 0;
      while ($c = mysqli_fetch_array($sql3)) 
      {
        $e++;
        $beneficiadores[] = array($c['nombre_beneficiador']);
       
      }
      $beneficiadores["total"] =$e; 
      $json_string = json_encode($beneficiadores);
      echo $json_string;

  }

?>
