<?php
echo "===== JEU DE DE ===== \nAtteindre 20 points avant l'ordi pour gagner.\n";
$scoreBot = 0;
$scoreJoueur = 0;
$deJoueur = random_int(1,6);
$deBot = random_int(1,6);
$scoreFinale = "score joueur : $scoreJoueur | score ordi : $scoreBot";
echo $scoreFinale,"\n";

while ($scoreBot < 20 or $scoreJoueur < 20){
    readline("appuyer sur Entré pour lancer le dé ...\n");
    echo "vous obtenez : $deJoueur\nL'ordi obtient : $deBot \n";
    $scoreJoueur += $deJoueur;
    $scoreBot += $deBot;
    $scoreFinale = "score joueur : $scoreJoueur | score ordi : $scoreBot";
    echo "Nouveau score :\n$scoreFinale\n";
    $deJoueur = random_int(1,6);
    $deBot = random_int(1,6);
    if ($scoreJoueur >= 20 and $scoreJoueur > $scoreBot){
        echo "======================================\nFIN DE PARTIE\n======================================\nBravo, vous avez gagné !";
        break;
    } elseif ($scoreBot >= 20 and $scoreJoueur >= 20 and $scoreBot == $scoreJoueur){
        echo "======================================\nFIN DE PARTIE\n======================================\nEgalité parfaite ! Bien joué.";
        break;
    } elseif ($scoreBot >= 20 and $scoreJoueur < $scoreBot) {
        echo "======================================\nFIN DE PARTIE\n======================================\nDommage, l'ordi a gagné.";
        break;
    }
}
?>