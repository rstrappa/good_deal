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
		$sql2 = mysqli_query($con,"SET lc_time_names = 'es_ES'");
		$sql = mysqli_query($con, "SELECT * from beneficio
                                    join beneficiador using(id_beneficiador)
                                    join comercio using(id_comercio)
                                    where id_tipo_beneficio = 8 AND
                                    fecha_vencimiento >= now()
                                    order by ranking_beneficiador asc, ranking_comercio asc");
    $sql3 = mysqli_query($con,"SELECT nombre_beneficiador from beneficiador right join beneficio using(id_beneficiador) where id_tipo_beneficio = 8 AND fecha_vencimiento >= now() group by nombre_beneficiador order by min(ranking_beneficiador)");


    mysqli_close($con);
    $promos = array();
    while ($r = mysqli_fetch_array($sql))
    {
      $promos[] = array("comercio"=>$r["nombre_comercio"],"descripcion"=>$r["descripcion_beneficio"],"beneficiador"=>$r["nombre_beneficiador"]);
    }
    $e = 0;
		if (count($promos) == 0)
		{
			echo '<h1>No hay promociones por hoy dia</h1>';
		}
		else
		{
			while ($c = mysqli_fetch_array($sql3))
			{
				$e++;
				echo '<h2>'.$c['nombre_beneficiador'].'</h2><br>';
				echo '<div class="col-md-12 col-sm-12"><br>
				<div class="owl-carousel owl-theme"><br>';
				for ($i=0; $i < count($promos); $i++)
				{

					if ($c['nombre_beneficiador'] == $promos[$i]['beneficiador'])
					{
						echo '<div style="background-color:#a3b2d1;" class="item">
										<h3>Comercio: '.$promos[$i]["comercio"].'</h3>
										<label>Descripcion: '.$promos[$i]["descripcion"].'</label>
										<a href="#">Ver mas</a>
								 </div>';
					}
				}
				echo '</div>
						</div>
						<br>';

			}

		}



  }

?>
