<?php
$N = readline("saisir un nombre : ");
echo "Les 20 premiers termes de la suite de Syracuse pour N = $N sont : \n";
for ($nombre = 1; $nombre <= 20; $nombre ++){
    echo $N." ";
    if ($N % 2 == 0){
        $N /= 2;
    } else {
        $N = ($N * 3) + 1;
    }
}

?>