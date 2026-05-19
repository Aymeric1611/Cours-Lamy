<?php
date_default_timezone_set('Europe/Paris');
$date =  date("d/m/y"); 
$heure = date("H") ;
$minute = date("i");
echo "Aujourd'hui nous sommes le $date \n";
echo "Il est actuellement $heure h $minute \n";
if ($heure >= 13){
    echo "Je vous souhaite une bonne après-midi";
} else {
    echo "Je vous souhaite une bonne matinée";
}
?>