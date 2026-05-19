<?php
$temperaturesCelcius = [16.5,40,21.3,15.1,-4,-50];
$temperaturesFahrenheit = [];
foreach ($temperaturesCelcius as $t){
    $temperaturesFahrenheit[] = ($t * 9/5) + 32;
}
foreach ($temperaturesFahrenheit as $tf){
    echo $tf." ";
}
?>