<?php

$tailleGrille = 10;
$mur1X = 2; $mur1Y = 2;
$mur2X = 2; $mur2Y = 3;
$mur3X = 2; $mur3Y = 4;
$mur4X = 6; $mur4Y = 6;
$mur5X = 7; $mur5Y = 6;

$positionValide = false;

while ($positionValide == false){
    $PX = random_int(0,9); 
    $PY = random_int(0,9);
    $positionValide = true;
    if (($PX == $mur1X and $PY == $mur1Y) or ($PX == $mur2X and $PY == $mur2Y) or ($PX == $mur3X and $PY == $mur3Y) or ($PX == $mur4X and $PY == $mur4Y) or ($PX == $mur5X and $PY == $mur5Y)){
        $positionValide = false;
    }
}
$TX = 0;
$TY = 0;
while ($positionValide == false){
    $TX = random_int(0,9); 
    $TY = random_int(0,9);
    $positionValide = true;
    if (($TX == $mur1X and $TY == $mur1Y) or ($TX == $mur2X and $TY == $mur2Y) or ($TX == $mur3X and $TY == $mur3Y) or ($TX == $mur4X and $TY == $mur4Y) or ($TX == $mur5X and $TY == $mur5Y) or ($TX == $PX and $TY == $PY)){
        $positionValide = false;
    }
}

echo "==================================\n
    AFFICHAGE DE LA GRILLE\n
==================================\n";

for ($y = 0; $y <= 9; $y++){
    for ($x = 0 ;$x <= 9; $x++){
        if ($x == $PX and $y == $PY){
            echo "P ";
        } elseif ($x == $TX and $y == $TY){
           echo "T ";
        } elseif (($x == $mur1X and $y == $mur1Y) or ($x == $mur2X and $y == $mur2Y) or ($x == $mur3X and $y == $mur3Y) or ($x == $mur4X and $y == $mur4Y) or ($x == $mur5X and $y == $mur5Y)){
            echo "# ";
        } else {
            echo ". ";
        }
    }
    echo "\n";
}

echo "\nLégende : P = Joueur, T = Trésor, # = Mur, . = Case vide";

?>