<?php
require_once 'fonctions.php';

$nombre = (int) readline("saisir un nombre : ");
if (estPair($nombre)){
    echo "le nombre est pair";
} else {
    echo "le nombre est impair";
}
?>