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
        //Insertamos a la persona
        $rut = $_REQUEST['rut'];
        $nombre = $_REQUEST['nombre'];
        $fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
        $direccion = $_REQUEST['direccion'];
        $id_region = $_REQUEST['id_region'];
        $id_comuna = $_REQUEST['id_comuna'];
        $password = $_REQUEST['password'];


       $sql = mysqli_query($con, "INSERT INTO persona(rut, nombre,fecha_nacimiento,direccion,id_region,id_comuna,password)values('$rut','$nombre','$fecha_nacimiento','$direccion',$id_region,$id_comuna,'$password')");

        //Insertamos productos
        $sqlID = mysqli_query($con,"select max(id_persona) id from persona");

         $id = mysqli_fetch_object($sqlID);
          $id->id;
        $cont = $_REQUEST['hCont'];

        for ($i=1; $i < $cont; $i++)
        {
            $id_beneficiador = $_REQUEST['id_beneficiador'.$i];
            $id_tipo = $_REQUEST['id_tipo'.$i];

           $sql = mysqli_query($con, "INSERT INTO cuenta_bancaria(id_persona, id_beneficiador,id_tipo) values($id->id, $id_beneficiador, $id_tipo)");

        }

        //Preferencias
        $cantPreferencias = $_REQUEST['hCantPreferencias'];
        for ($i=1; $i <= $cantPreferencias; $i++)
        {
             $preferencia = $_REQUEST['preferencia'.$i];
						 $ranking_preferencia = $_REQUEST['ranking_preferencia'.$i];
            if ($preferencia != null)
            {

                $sql = mysqli_query($con, "INSERT INTO preferencias_persona(id_persona, id_preferencia,ranking_preferencia) values($id->id, $preferencia,$ranking_preferencia)");
            }
        }

        header('Location: https://tecnoactive.cl/good_deal/login.php');



  }

?>
