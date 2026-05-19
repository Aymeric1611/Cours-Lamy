<?php
// déclaration d'un tableau associatif
$personnes = [
    "Dupond" => 29,
    "Martin" => 24,
    "Durand" => 42
];

// afficher l'age de martin
echo $personnes["Martin"] . "\n";

// parcourir le tableau pour afficher les ages (les valeurs)
foreach ($personnes as $age){
    echo "$age ";
}
echo "\n";

// parcourir le tableau pour afficher les noms/ages
foreach ($personnes as $nom => $age){
    echo "$nom a $age ans \n";
}

// recuperer la liste des noms
$noms = array_keys($personnes);
//afficher les noms
print_r($noms);

// afficher le nom de la personne la "plus vieille"
//version avec foreach
$lePlusVieux = "";
$agePlusVieux = 0;
foreach ($personnes as $nom => $age){
    if ($age > $agePlusVieux){
        $lePlusVieux = $nom;
        $agePlusVieux = $age;
    }
}
echo "$lePlusVieux est le plus vieux avec $agePlusVieux ans\n";

// version sans foreach
echo array_search(max($personnes),$personnes);
?>
