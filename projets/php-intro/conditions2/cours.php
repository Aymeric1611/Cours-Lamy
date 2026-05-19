<?php
$note = readline("saisir une note (entre 0 et 20) : ");

if ($note < 10){
    echo "vous n'avez pas la moyenne";
} elseif ($note == 10) {
    echo "vous avez juste la moyenne";
} else {
    echo "vous avez plus de la moyenne";
}
?>