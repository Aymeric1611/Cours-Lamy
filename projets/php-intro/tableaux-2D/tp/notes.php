<?php
$notes = [
    [12,15,9],
    [8,11,14,10],
    [17,13]
];
$somme = 0;
$i = 1;
foreach ($notes as $etudiant) {
    echo  "notes de l'étudiant $i : ";
    foreach ($etudiant as $note) {
        $somme += $note;
        echo "$note ";
    }
    $moyenne = $somme / count($etudiant);
    echo "\nmoyenne de l'étudiant $i : $moyenne\n";
    $i ++;
    $somme = 0;
}
?>