<?php
require_once __DIR__."/produits.php";

/*
1. Vérifier que le parametre existe
2. Vérifier le parametre en fonction de certaines contrainte
3. Avertir l'utilisateur si le parametre est absent ou invalide
*/

$messageErreur = "";
$produitRecherche = null;

//Vérifier la presence du parametre 
/*
if (isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    $id = "";
}
*/

//solution alternative : opérateur de coalescence
$id = $_GET['id'] ?? '';

//validation du parametre
if ($id === ''){
    $messageErreur = "URL invalide : identifiant de produit manquant.";
} elseif (filter_var($id, FILTER_VALIDATE_INT) === false){
    $messageErreur = "URL invalide : identifiant doit être une valeur numérique.";
} elseif ($id <= 0){
    $messageErreur = "URL invalide : indentifiant doit être strictement positif.";
} else {
    //le parametre est present et valide
    $id = (int)$id; // facultatif
    //rechercher le produit  dans le tableau
    foreach ($produits as $produit){
        if ($produit['id'] === $id){
            $produitRecherche = $produit;
            break;
        }
    }
    // tester si le produit recherché exite
    if ($produitRecherche === null){
        $messageErreur = "Le produit recherché n'exite pas dans le catalogue.";
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails produit</title>
    <style>
        .erreur {
            background: #ffdede;
            color: #a00000;
            padding: 12px;
            border: 1px solid #d88;
            margin-bottom: 20px;
        }

        .fiche-produit {
            background: #eef6ff;
            padding: 15px;
            border: 1px solid #99bce0;
        }
    </style>
</head>

<body>
    <header>
        <a href="liste-produits.php">Retour à la liste des produits</a>
    </header>
    <h1>Détail du produit</h1>
    <?php if ($messageErreur !== ""): ?>
        <div class="erreur">
            <?= $messageErreur ?>
        </div>
    <?php else : ?>
        <div class="fiche-produit">
            <h2><?= $produitRecherche['nom'] ?></h2>
            <p>Prix : <?= $produitRecherche['prix'] ?> €</p>
            <p>Description : <?= $produitRecherche['description'] ?></p>
        </div>
    <?php endif; ?>
</body>

</html>