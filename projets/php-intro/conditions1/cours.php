<?php
$age = readline("Saisir votre age : ");
if($age >= 18){
    echo "Tu es majeur\n";
} else {
    echo "Tu es mineur\n";
}


$nom = "Dupond";
if(str_starts_with(strtolower($nom),"d")){
    echo "ça commence par un d\n";
} else {
    echo "ça commence pas par un d\n";
}
?>