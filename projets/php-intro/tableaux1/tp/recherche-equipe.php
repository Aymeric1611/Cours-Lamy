<?php
$equipe = readline("saisir le nom d'une équipe : ");
$equipesPresentes = ['France','Brésil','Argentine','Espane','Sénégal','Australie','Belgique'];

foreach ($equipesPresentes as $pays){
    if ($pays == $equipe){
        echo "$equipe sera à la prochaine coupe du monde";
    }
}
?>