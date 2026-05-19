<?php
$jour = strtolower(date("l"));
$date = date("d/m/y");
echo "Aujourd'hui nous sommes le $date\n";
if ($jour == "saturday"){
    echo "je vous souhaite un bon weekend";
} elseif ($jour == "sunday") {
    echo "je vous souhaite un bon dimanche";
} else {
    echo "je vous souaite une bonne journée";
}
?>