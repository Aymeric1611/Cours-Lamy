<?php
$grille = [
    ["X", "O", "."],
    ["X", "X", "O"],
    [".", "O", "."],
];

$nbCaseVide = 0;
foreach ($grille as $ligne){
    foreach ($ligne as $case){
        echo "$case ";
        if ($case == "."){
            $nbCaseVide++;
        }
    }
    echo "\n";
}

//ma version
if ($grille[0][0] == "X" and $grille[0][1] == "X" and $grille[0][2] == "X"){
    echo "le joueur X a gagner à la première ligne";
}

//version  prof
$ligneGagante = true;
foreach ($grille[0] as $case){
    if ($case != "X"){
        $ligneGagante = false;
        break;
    }
}
if ($ligneGagante){
    echo "victoire de X à la premiere ligne";
} else {
    echo "pas de victoire de X à la premiere ligne";
}


echo "nombre de case vide : $nbCaseVide";
?>