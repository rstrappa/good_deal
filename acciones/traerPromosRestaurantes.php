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
                                    where id_tipo_beneficio = 4 AND
                                    fecha_vencimiento >= now()
                                    order by ranking_beneficiador asc, ranking_comercio asc");
    $sql3 = mysqli_query($con,"SELECT nombre_beneficiador
																		from beneficiador right join beneficio using(id_beneficiador)
																		join comercio using(id_comercio)
																		 where id_tipo_beneficio = 4 AND fecha_vencimiento >= now()
																		 group by nombre_beneficiador
																		 order by min(ranking_beneficiador)");


    mysqli_close($con);
    $promos = array();
    while ($r = mysqli_fetch_array($sql))
    {
      $promos[] = array("id_beneficio"=>$r["id_beneficio"],"comercio"=>$r["nombre_comercio"],"descripcion"=>$r["descripcion_beneficio"],"beneficiador"=>$r["nombre_beneficiador"],"id"=>$r["id_tipo_beneficio"],"oferta"=>$r["oferta"],"url_perfil"=>$r["url_perfil"]);
    }
		if (count($promos) == 0)
		{
			echo '<h1>No hay promociones por hoy dia</h1>';
		}
		$e = 0;
			while ($c = mysqli_fetch_array($sql3))
			{
				$e++;
				echo '<div class="container-fluid text-center text-md-left" style="">
					<div class="row" style="    margin-top: 32px;">



						<p class="col-md-4 col-sm-12" style="
						font-style: normal;
						font-weight: lighter;
						font-size: 23px;
						line-height: 35px;
						font-family: Roboto;
						font-weight: bold;
						letter-spacing: 0.06em;
						width: 1270px;
						border: 4px solid #1E1062;
						background-color: #1e1062;
						color: #ffff;
						box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
						border-radius: 5px;
			">'.$c["nombre_beneficiador"].' <span style="font-family: Roboto;
						font-style: normal;
						font-weight: bold;
						font-family: Roboto;
						font-size: 23px;
						line-height: 35px;
						letter-spacing: 0.01em;
						float:right;

			color: #565656;"></span></p><div class="col-xs-1 " style="background: #09094f;width: 702px;height: 5px;text-align: center;margin-top: 15px;" id="">
					</div>

					</div>
				</div>';
				echo '<div class="col-md-12 col-sm-12"><br>
				<div class="owl-carousel owl-theme"><br>';
				for ($i=0; $i < count($promos); $i++)
				{

					if ($c['nombre_beneficiador'] == $promos[$i]['beneficiador'])
					{
						if ($promos[$i]["url_perfil"] != null)
						{
							echo '
							<div style="background: #FFFFFF;
																border: 1px solid #F3F3F3;
																box-sizing: border-box;
																box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
																width: 245px;
																height: 315px;
																border-radius: 8px;" class="item">

											<div class="text-center"style="border-radius: 0px 8px;
																								background: #FF1822;
																								width: 55px;
																								height: 44px;
																								display: flex;
																								justify-content: center;
																								align-items: center;
																								text-align: center;
																								margin:0px auto;
																								padding:3%
																								font-family: sans-serif;
																								color: white;
																								font-size: 18px;
																								font-weight: bold;
																								float: right;
																								position:relative; z-index:1;">
												<h5>'.$promos[$i]["oferta"].'%</h5>
											</div >
											<div>
											<img style="     margin-left: 18%;
		border-radius: 20px 0px 20px 20px;
		width: 155.34px;
		height: 126px;margin-top: 10px;
"
											src="'.$promos[$i]["url_perfil"].'"></img>
												<h3 style="font-family: Roboto;
																	 font-style: normal;
																		font-weight: 500;
																		font-size: 14px;
																	 line-height: 19px;
																	 text-align: center;
																	 margin-top: 5px;
																	color: #red;
																	justify-content: center;
align-items: center;">'.$promos[$i]["comercio"].'</h3>



												<label style="background: #1E1062;;
border-radius: 10px;    width: 190px;
		height: 27px; color:white;margin-bottom:15px">'.$promos[$i]['beneficiador'].'</label><br>
		<button onclick="mostrarModal('.$promos[$i]["id_beneficio"].')" type="button" data-toggle="modal" data-target="#modal" style="    background: #FF1822;
		border: 4px solid #1E1062;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 10px;
		text-decoration: none;
		height: 31px;
		color: #FFFFFF;
		justify-content: center;
		align-items: center;
		text-align: center;
		height: 34px;">
			Ver mas
		</button>
											</div>
									 </div>';
						}
						else {
							echo '<div style="background: #FFFFFF;
																border: 1px solid #F3F3F3;
																box-sizing: border-box;
																box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
																width: 245px;
																height: 315px;
																border-radius: 8px;" class="item">

											<div class="text-center"style="border-radius: 0px 8px;
																								background: #FF1822;
																								width: 55px;
																								height: 44px;
																								display: flex;
																								justify-content: center;
																								align-items: center;
																								text-align: center;
																								margin:0px auto;
																								padding:3%
																								font-family: sans-serif;
																								color: white;
																								font-size: 18px;
																								font-weight: bold;
																								float: right;
																								position:relative; z-index:1;
																								">
												<h5>'.$promos[$i]["oferta"].'%</h5>
											</div>
											<div>
												<img style="    margin-left: 18%;
		border-radius: 20px 0px 20px 20px;
		width: 155.34px;
		height: 126px;margin-top: 10px;
}" src="assets/Img/logo.svg"></img>
												<h3 style="font-family: Roboto;
																	 font-style: normal;
																		font-weight: 500;
																		font-size: 14px;
																	 line-height: 19px;
																	 text-align: center;
																			 margin-top: 5px;

color: #332F30;">'.$promos[$i]["comercio"].'</h3>


												<label> '.$promos[$i][""].'</label>
												<label style="background: #1E1062;;
border-radius: 10px;    width: 190px;
		height: 27px; color:white; margin-bottom:15px">'.$promos[$i]['beneficiador'].'</label><br>
					<button onclick="mostrarModal('.$promos[$i]["id_beneficio"].')" type="button" data-toggle="modal" data-target="#modal" style="    background: #FF1822;
		border: 4px solid #1E1062;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 10px;
		text-decoration: none;
		height: 31px;
		color: #FFFFFF;
		justify-content: center;
		align-items: center;
		text-align: center;
		height: 34px;">
						Ver mas
					</button>
											</div>
									 </div>';
						}
					}
				}
				echo '</div>
						</div>
						<br>';



		}



  }

?>
