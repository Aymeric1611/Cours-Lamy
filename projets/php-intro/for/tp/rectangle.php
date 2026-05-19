<?php
$largeur = readline("saisir la largeur du rectangle : ");
$longeur = readline("saisr la longueur du rectangle : ");
for ($nombre1 = 1; $nombre1 <= $largeur; $nombre1 ++){
    for ($nombre = 1; $nombre <= $longeur; $nombre ++){
        echo "*" ;
    }
    echo "\n";
}
?>