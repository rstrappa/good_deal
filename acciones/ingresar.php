<?php
session_start();
include ("../database.php");

   $rut = $_REQUEST['rut'];
   $pass = $_REQUEST['pass'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		$sql = mysqli_query($con, "SELECT * from persona where rut = '$rut' and password = '$pass'");
    $r = mysqli_fetch_object($sql);

       if ($r->rut) 
       {
            $_SESSION['id'] = $r->id_persona;
            header("Location: ../misBeneficios.php");
       }
       else
       {
           echo "No funciono";
       }
    

  }

?>
