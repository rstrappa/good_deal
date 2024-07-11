
<?php

$curl = curl_init();
$url = "https://www.scotiabankchile.cl/Personas/beneficios-tarjeta-de-credito";

curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

//https://ww3.bancochile.cl/wps/wcm/connect/34595f004a65b970b525bf420b987233/educa-ene-2020-ID2.jpg?MOD=AJPERES&CACHEID=6e40cc00478a91c398db9dc00f7a6e1b


$result = curl_exec($curl);
preg_match_all("!https://scotiabankfiles.azureedge.net/scotiabank-chile/img/beneficios/nuevas-calugas/[^\s]*?.png!",$result,$matches);
preg_match_all('<p class="canvas-text-paragraph canvas-title-margin">[^(a-z\s)]</p>',$result,$matches2);

$desc = array_values(array_unique($matches2[0]));
$imagenes = array_values(array_unique($matches[0]));

print_r($matches2);
/*for ($i=0; $i <count($imagenes) ; $i++) {
  echo'<div style="float:left; margin-left:10px;">';
  echo '<img src="'.$imagenes[$i].'"></img><br>';
  echo '<p>'.$desc[$i].'</p>';
  echo '</div>';
}*/
curl_close($curl);
?>
