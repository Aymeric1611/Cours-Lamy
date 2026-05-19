<?php
$note = readline("saisir une note : ");
while ($note > 20 or $note < 0){
    echo "la note saisie doit etre entre 0 et 20 ! \n";
    $note = readline("saisir une note : ");
}
echo "la note est correcte";
?>