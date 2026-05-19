<?php
//déclaration d'un tableau de notes
$notes =  [10,12,9,15,-9,61,0.561,8,812];
//echo $notes; //cela affiche seulement Array
echo "\n";
//afficher les valeurs d tableau
for ($i = 0; $i < count($notes) ; $i++){
    echo $notes[$i]." ";
}
echo "\n";
//afficher les valeurs avec une boucle foreach
foreach ($notes as $note) {
    echo $note." ";
}
//variante de la bloucle foreach valeur + indice
foreach ($notes as $i => $note){
    echo "$i : $note \n";
}
echo "\n";
//variante avec la boucle for (indice+ valeur)
for ($i = 0; $i < count($notes); $i++){
    echo "$i : $notes[$i] \n";
}
echo "\n";
//ajout d'une note dans le tab
$notes[] = 1;
array_push($notes,11,56,164611,1,8,11,146,16,18,6,1896,189,1896,4,1,8489);
print_r($notes);
?>