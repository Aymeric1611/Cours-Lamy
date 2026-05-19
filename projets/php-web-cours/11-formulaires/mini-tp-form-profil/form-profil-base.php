<?php
$statutOptions = [
    '' => "-- Sélectionner un statut",
    "etudiant" => "Etudiant",
    "enseigant" => "Enseignant",
    "administratif" => "Administratif"
];

//definir une variable par champs du formaulaire
$pseudo = "";
$email = "";
$statut = "";
$erreurs = []; //tableau associatif
$succes = false;

//detecter la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    //formulaire soumis
    //recuperer chaque champs
    $pseudo = trim($_POST['pseudo'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $statut = trim($_POST['statut'] ?? '');
}

//validation du pseudo
if ($pseudo === ''){
    //le pseudo n'a pas ete saisi
    $erreurs['pseudo'] = "Le pseudo est obligatoire";
} elseif (mb_strlen($pseudo)<3){
    $erreurs['pseudo'] = "Le pseudo doit contenir au minimum 3 caractères";
}

//validation de l'email
if ($email === ''){
    $erreurs['email'] = "L'email est obligatoire";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $erreurs['email'] = "L'email doit contenir un seul @, il doit y avoir des caractères avant le @ et il doit y avoir a la fin";
}
    
//validation du statut
//if ()

//traitement des données saisie
//uniquement dasn le cas ou il y a aucune erreur de validation
if (empty($erreurs)){
    $succes = true;
    //réinitialsier les variable avec ''
    $pseudo = '';
    $email = '';
    $statut = '';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un profil</title>
    <link rel="stylesheet" href="css/style-base.css">
</head>

<body>

    <div class="card">

        <header class="card-header">
            <h1>Créer un profil</h1>
            <hr>
        </header>

        <?php if($succes): ?>
            <div class="succes-message">Le profil a été créé avec succès !</div>
        <?php 
        $succes = false;
        endif; 
        ?>

        <form action="" method="POST" autocomplete="off" novalidate>

            <!-- PSEUDO -->
            <div class="form-group">
                <label for="pseudo">Pseudo <span class="required">*</span> :</label>
                <input type="text"
                    id="pseudo"
                    name="pseudo"
                    placeholder="Ex: FL39"
                    value="<?= $pseudo ?>"
                    required
                    minlength="3">
                <?php if (isset($erreurs['pseudo'])) :?>
                    <div class="erreur-message"><?= $erreurs['pseudo'] ?></div>
                <?php endif; ?>
                <div class="hint">3 caractères minimum</div>
            </div>

            <!-- EMAIL -->
            <div class="form-group">
                <label for="email">Email <span class="required">*</span> :</label>
                <input type="email"
                    id="email"
                    name="email"
                    placeholder="votre@email.fr"
                    value="<?= $email ?>"
                    required>
                <?php if (isset($erreurs['email'])) :?>
                    <div class="erreur-message"><?= $erreurs['email'] ?></div>
                <?php endif; ?>
            </div>

            <!-- STATUT -->
            <div class="form-group">
                <label for="statut">Statut <span class="required">*</span> :</label>
                <select id="statut" name="statut" required>
                    <!-- remplissage dynamique des options -->
                    <?php foreach ($statutOptions as $valeur => $libelle) :?>
                        <option value="<?= $valeur ?>"><?= $libelle ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <p class="legend">Le caractère <span class="required">*</span> indique un champ obligatoire.</p>

            <button type="submit" class="btn-submit">
                Créer profil
            </button>

        </form>

    </div>

</body>

</html>