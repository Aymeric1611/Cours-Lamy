<?php
require_once 'fonction-tab.php';

$note = [10,5,8,16,3,9,12];
//calculer la moyenne des notes
$moyenne = calculerMoyenne($note);
echo "La moyenne des notes est égal à $moyenne\n";

//recup les notes >= 10
$notesSupMoyenne = getNotesSupMoyenne($note);

foreach ($notesSupMoyenne as $note){
    echo "$note ";
}

?>