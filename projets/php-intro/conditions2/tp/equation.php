<?php
$a = readline("entrer le coefficient a (different de 0) : ");
$b = readline("entrer le coefficient b : ");
$c = readline("entrer le coefficient c : ");
echo "Résolution de l'équation $a x² + $b x + $c = 0\n";
$delta = ($b**2) - (4 * $a * $c);
if ($delta > 0){
    $x1 = (- $b + sqrt($delta))/(2*$a);
    $x2 = (- $b - sqrt($delta))/(2*$a);
    echo "Il y a 2 solutions distinctes :\n x1 = $x1\n x2 = $x2";
} elseif ($delta == 0) {
    $x = -$b/(2*$a);
    echo "IL y a 1 solution unique :\n x = $x" ;
} else {
    echo "il y aucune solution";
}
?>