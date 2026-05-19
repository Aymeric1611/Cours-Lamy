<?php

function lireEntierDansIntervalle(string $message, int $valMin, int $valMax): int{
    $nombre = (int)readline("$message");
    $reponse = false;
    while ($reponse == false){
        if (gettype($nombre) == "string") {
            echo "Erreur : veuillez saisir un nombre entier\n";
            $nombre = readline("$message");
        }elseif ($nombre < $valMin or $nombre > $valMax){
            echo "Erreur : la valeur doit être comprise entre $valMin et $valMax\n";
            $nombre = readline("$message");
        } else {
            $reponse = true;
        }
    }
    return $nombre;
}

$note = lireEntierDansIntervalle("Saisir une note (0 à 20) : ", 0, 20);
echo "Note valide : $note\n";
?>