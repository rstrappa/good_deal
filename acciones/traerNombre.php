<?php
session_start();
include ("../database.php");

   $id_persona = $_REQUEST['id_persona'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		$sql = mysqli_query($con, "SELECT nombre from persona where id_persona = $id_persona");
    $r = mysqli_fetch_object($sql);

        echo '<section class="container">
        <div class="container-fluid text-center text-md-left" style="">
          <div class="row"style="margin-top: 32px;">
            <p class="col-md-12 col-sm-12" style="font-style: normal;
            font-weight: lighter;
            font-size: 23px;
            line-height: 35px;
            font-family: Roboto;
            font-weight: bold;
            letter-spacing: 0.01em;
            width: 1270px;">Especiales para hoy <span style="font-family: Roboto;
                  font-style: normal;
                  font-weight: bold;
                  font-family: Roboto;
                  font-size: 23px;
                  line-height: 35px;
                  letter-spacing: 0.01em;


            color: #565656;">'.$r->nombre.'</span></p>



';


  }

?>
