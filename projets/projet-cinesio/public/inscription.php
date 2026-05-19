<?php
include __DIR__ . "/../src/includes/header.php";
include __DIR__ . "/../src/repository/utililisateurRepository.php";

$adresseEmail = '';
$pseudo = '';
$mdp = '';
$confirmationMdp = '';
$erreurs = [];
$succes = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $adresseEmail = trim($_POST['adresse-email']);
    $pseudo = trim(htmlspecialchars($_POST['pseudo']));
    $mdp = trim(htmlspecialchars($_POST['mdp']));
    $confirmationMdp = trim(htmlspecialchars($_POST['confirmation-mdp']));
}

if ($adresseEmail === '') {
    $erreurs['adresse-email'] = "L'adresse email est obligatoire";
} elseif (!filter_var($adresseEmail, FILTER_VALIDATE_EMAIL)) {
    $erreurs['adresse-email'] = "L'adresse email n'est pas valide";
} else {
    $utilisateurEmail = findUtilisateurByEmail($adresseEmail);
    if ($utilisateurEmail !== false) {
        $erreurs['adresse-email'] = "L'adresse email est déjà utilisée";
    }
}

if ($pseudo === '') {
    $erreurs['pseudo'] = "Le pseudo est obligatoire";
} elseif (mb_strlen($pseudo) < 3) {
    $erreurs['pseudo'] = "Le pseudo doit être d'au moins 3 caractères";
} else {
    $utilisateurPseudo = findUtilisateurByPseudo($pseudo);
    if ($utilisateurPseudo !== false) {
        $erreurs['pseudo'] = "Le pseudo est déjà utilisé";
    }
}

if ($mdp === '') {
    $erreurs['mdp'] = "Le mot de passe est obligatoire";
} elseif (mb_strlen($mdp) < 8) {
    $erreurs['mdp'] = "Le mot de passe doit être d'au moins 8 caractères";
}

if ($confirmationMdp === '') {
    $erreurs['confirmation-mdp'] = "La confirmation du mot de passe est obligatoire";
} elseif ($confirmationMdp !== $mdp) {
    $erreurs['confirmation-mdp'] = "La confirmation du mot de passe ne correspond pas au mot de passe saisi";
}

if (empty($erreurs)) {
    $succes = true;
    $utilisateurData = [
        'pseudo' => $pseudo,
        'email' => $adresseEmail,
        'mot_de_passe' => $mdp
    ];
    createUtilisateur($utilisateurData);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <div class="form-section">
        <h1>Créer un compte</h1>
        <p>Rejoindre la communauté CinéSIO pour accéder à toutes nos fonctionnalités !</p>
        <?php if ($succes) : ?>
            <div class="message-success">✓ Votre compte a été créé avec succès !</div>
        <?php
            $adresseEmail = '';
            $pseudo = '';
            $mdp = '';
            $confirmationMdp = '';
            $succes = false;
        endif;
        ?>

        <form action="inscription.php" method="post" autocomplete="off" novalidate class="form-container">
            <div class="form-group form-full">
                <label for="adresse-email">Adresse email <span class="required">*</span></label>
                <input type="email" name="adresse-email" placeholder="Ex: florent.grandjean@email.com" value="<?= $adresseEmail ?>" required>
                <?php if (isset($erreurs['adresse-email'])) : ?>
                    <div class="erreur-message"><?= $erreurs['adresse-email'] ?></div>
                <?php
                    $erreurs['adresse-email'] = "";
                endif;
                ?>
            </div>

            <div class="form-group form-full">
                <label for="text">Pseudonyme <span class="required">*</span></label>
                <input type="text" name="pseudo" placeholder="Ex: fGjean16" value="<?= $pseudo ?>" required>
                <div class="message">Le pseudo doit être d'au moins 3 caractères</div>
                <?php if (isset($erreurs['pseudo'])) : ?>
                    <div class="erreur-message"><?= $erreurs['pseudo'] ?></div>
                <?php
                    $erreurs['pseudo'] = "";
                endif;
                ?>
            </div>

            <div class="form-row">
                <div class="form-group form-half">
                    <label for="mdp">Mot de passe <span class="required">*</span></label>
                    <input type="password" name="mdp" value="<?= $mdp ?>" required>
                    <div class="message">8 caractères minimum</div>
                    <?php if (isset($erreurs['mdp'])) : ?>
                        <div class="erreur-message"><?= $erreurs['mdp'] ?></div>
                    <?php
                        $erreurs['mdp'] = "";
                    endif;
                    ?>
                </div>

                <div class="form-group form-half">
                    <label for="confirmation-mdp">Confirmation du mot de passe <span class="required">*</span></label>
                    <input type="password" name="confirmation-mdp" value="<?= $confirmationMdp ?>" required>
                    <?php if (isset($erreurs['confirmation-mdp'])) : ?>
                        <div class="erreur-message"><?= $erreurs['confirmation-mdp'] ?></div>
                    <?php
                        $erreurs['confirmation-mdp'] = "";
                    endif;
                    ?>
                </div>
            </div>

            <div class="message">Le symbole <span class="required">*</span> indique les champs obligatoires</div>
            <button type="submit" class="btn-submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                </svg> M'inscrire maintenant
            </button>
            <div class="message">Déjà un compte ? <a href="connexion.php">Connectez-vous</a></div>
        </form>
    </div>
</body>

</html>

<?php include __DIR__ . "/../src/includes/footer.php"; ?>