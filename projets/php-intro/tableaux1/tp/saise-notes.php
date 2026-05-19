<?php
$note = readline("saisir une note ou q(pour arreter) : ");
$notes = [];
while ($note != "q"){
    if ($note > 0 and $note <= 20){
        $notes[] = $note;
        $note = readline("saisir une note ou q(pour arreter) : ");
    } else {
        echo "La note saisie est incorrecte \n";
        $note = readline("saisir une note ou q(pour arreter) : ");
    }
}
echo "Vous avez saisi ".count($notes)." notes.\nLes notes saisies sont : ";
$toto = [];
foreach ($notes as $n){
    echo $n." ";
    if ($n >= 10){
        $toto[] = $n;
    }
}
echo "\n";
if (count($toto) == 0){
    echo "Il n'y a aucune note supérieure ou égale à 10";
} else {
    $somme = 0;
    foreach ($toto as $terme){
        $somme += $terme;
    }
    $somme /= count($toto);
    echo "La moyenne des notes supérieur ou égales à 10 est $somme";
}
?>