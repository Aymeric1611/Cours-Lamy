<?php
// Définir une fonction qui affiche Bonjour
function direBonjour():void{
    echo "Bonjour\n";
}

function direBonjour2():string{
    return "Bonjour\n";
}
// Appeler la fonction
direBonjour();
echo direBonjour2(); // afficher la valeur retourner par la fonction

function direBonjour3(string $prenom):void{
    echo "Bonjour $prenom\n";
}
direBonjour3("Aymeric");



$prenom = "Aymeric";
function direBonjour4(){
    global $prenom;
    return "Bonjour $prenom\n";
}
echo direBonjour4("Aymeric");

function addition(int $a, int $b) : int{
    $result = $a + $b;
    return $result;
}
?>