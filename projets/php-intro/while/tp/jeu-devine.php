<?php
$nombre = readline("saisir un nombre entre 0 et 1000 : ");
$nbAleatoire = random_int(0,1000);
$nbCoupMax = readline("saisir le nombre max de coup autorise : ");

while ($nombre > 1000 or $nombre < 0){
    echo "le nombre a devine doit etre entre 0 et 1000 \n";
    $nombre = readline("saisr un nombre entre 0 et 1000 : ");
}
$coup = 0;
while ($nombre != $nbAleatoire){
    $coup ++;
    if ($coup > $nbCoupMax){
        echo "tu n'as pas deviné en moins de $nbCoupMax coups\n";
        break; 
    }
}
echo "le nombre à deviner a ete trouve en $coup coups";
?>