<?php
include __DIR__ . "/../src/includes/header.php";
include __DIR__ . "/../src/repository/utililisateurRepository.php";

$erreur = "";
$utilisateur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $utilisateur = findUtilisateurByEmail($_POST['adresse_email']);
    if ($utilisateur !== false) {
        if (password_verify($_POST['mdp'], $utilisateur['mot_de_passe'])) {
            $_SESSION['utilisateur'] = [
                'id' => $utilisateur['id'],
                'pseudo' => $utilisateur['pseudo']
            ];
            header("Location: index.php");
            exit;
        } else {
            $erreur = "Adresse e-mail ou mot de passe incorrect.";
        }
    } else {
        $erreur = "Adresse e-mail ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <div class="form-section">
        <h1>Connexion</h1>
        <p>Accédez à votre espace membre CinéSIO</p>
        <div class="erreur-message"><?= $erreur ?></div>
        <form action="connexion.php" method="post" class="form-container">
            <div class="form-group form-full">
                <label for="adresse_email">Adresse e-mail</label>
                <input type="email" id="adresse_email" name="adresse_email" placeholder="votre@email.com" value="<?= $_POST['adresse_email'] ?>">
            </div>
            <div class="form-group form-full">
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" required>
            </div>
            <button type="submit" class="btn-submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                </svg>
                Connexion
            </button>
        </form>
    </div>
</body>

</html>

<?php include __DIR__ . "/../src/includes/footer.php"; ?>