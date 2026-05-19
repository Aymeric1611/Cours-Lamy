<?php
$statuts = ["Etudiant","Enseigant","Administratif"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un profil</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="" method="post" class="card">
        <h1>Créer un profil</h1>
        <div class="field-group">
            <label for="pseudo">Pseudo <span class="requis">*</span></label>
            <input type="text" id="pseudo" name="pseudo" minlength="3" placeholder="Ex: FL39">
            <p class="help-muted">3 caractères minimum</p>
        </div>
        <div class="field-group">
            <label for="email">Email <span class="requis">*</span></label>
            <input type="email" id="email" name="email" placeholder="votre@email.fr">
        </div>
        <div class="field-group">
            <label for="status">Statut <span class="requis">*</span></label>
            <select name="status" id="status">
                <option value="">-- Sélectionnez un statut --</option>
                <?php foreach($statuts as $statut): ?>
                    <option value="<?= $statut ?>"><?= $statut ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <p class="help-muted">Le caractère <span class="requis">*</span> indique un champ obligatoire.</p>
        <button type="submit" class="btn-submit">Créer profil</button>
    </form>
</body>
</html>