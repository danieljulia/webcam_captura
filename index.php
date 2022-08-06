<?php
$url = 'http://meteo.planoles.cat/web/planoles_1.jpg';
$count=1;
while(true){
  $img = "img/planoles_$count.jpg";
  file_put_contents($img, file_get_contents($url));
  echo $img."\r\n";
  sleep(30);
  $count++;
}
