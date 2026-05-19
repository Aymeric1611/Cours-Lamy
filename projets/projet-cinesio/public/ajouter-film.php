<?php
require_once __DIR__ . "/../src/repository/filmRepository.php";
require_once __DIR__ . "/../src/lib/functions.php";
$genres = findAllGenres();
$Pays = findAllPays();

$titre = "";
$dateSortie = "";
$duree = "";
$synopsis = "";
$affiche = "";
$genre = "";
$pays = "";
$erreurs = [];
$succes = false;
$filmData = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titre = trim(htmlspecialchars($_POST['titre']));
    $dateSortie = $_POST['date_sortie'];
    $duree = $_POST['duree'];
    $synopsis = trim(htmlspecialchars($_POST['synopsis']));
    $affiche = trim(htmlspecialchars($_POST['affiche']));
    $genre = $_POST['genre'];
    $pays = $_POST['pays'];
}

if ($titre === '') {
    $erreurs['titre'] = "Le titre est obligatoire";
} elseif (mb_strlen($titre) < 2) {
    $erreurs['titre'] = "Le titre doit être d'au moins 2 caractères";
}

if ($synopsis === '') {
    $erreurs['synopsis'] = "Le synopsis est obligatoire";
} elseif (mb_strlen($synopsis) < 10) {
    $erreurs['synopsis'] = "Le synopsis doit être d'au moins 10 caractères";
}

if ($duree === '') {
    $erreurs['duree'] = "La durée est obligatoire";
} elseif ($duree <= 0 and $duree !== (int)$duree) {
    $erreurs['duree'] = "La durée doit d'être d'au moins d'une minute et doit être un nombre entier";
}

if ($affiche === '') {
    $erreurs['affiche'] = "L'URL de l'affiche est obligatoire";
} elseif (!filter_var($affiche, FILTER_VALIDATE_URL)) {
    $erreurs['affiche'] = "L'URL de l'image n'est pas bonne";
}

if ($dateSortie === '') {
    $erreurs['date_sortie'] = "La date de sortie est obligatoire";
} elseif (strtotime($dateSortie) === false) {
    $erreurs['date_sortie'] = "La date de sortie n'est pas une date valide";
}

if ($genre === '') {
    $erreurs['genre'] = "Le genre est obligatoire";
}

if ($pays === '') {
    $erreurs['pays'] = "Le pays est obligatoire";
}

if (empty($erreurs)) {
    $succes = true;
    $filmData = [
        'titre' => $titre,
        'date_sortie' => $dateSortie,
        'duree' => $duree,
        'synopsis' => $synopsis,
        'affiche' => $affiche,
        'genre' => $genre,
        'pays' => $pays
    ];
    insertFilm($filmData);
}

include __DIR__ . "/../src/includes/header.php";
?>

<div class="form-section">
    <h2>Ajouter un nouveau film</h2>
    <p>Veuillez renseigner les informations ci-dessous pour rajouter un film au catalogue CineSIO.</p>
    <?php
    if ($succes): ?>
        <div class="message-success">✓ Le film a été ajouté avec succès !</div>
    <?php
        $titre = '';
        $dateSortie = '';
        $duree = '';
        $synopsis = '';
        $affiche = '';
        $genre = '';
        $pays = '';
        $succes = false;
    endif;
    ?>

    <form action="ajouter-film.php" method="post" autocomplete="off" novalidate class="form-container">
        <div class="form-group form-full">
            <label for="titre">Titre du film <span class="required">*</span></label>
            <input type="text" name="titre" placeholder="Ex: Dune: Deuxième Partie" value="<?= $titre ?>" required>
            <div class="message">Le titre doit être d'au moins 2 caractères</div>
            <?php if (isset($erreurs['titre'])) : ?>
                <div class="erreur-message"><?= $erreurs['titre'] ?></div>
            <?php
                $erreurs['titre'] = "";
            endif;
            ?>
        </div>

        <div class="form-row">
            <div class="form-group form-half">
                <label for="date_sortie">Date de sortie <span class="required">*</span></label>
                <input type="date" name="date_sortie" value="<?= $dateSortie ?>" required>
                <?php if (isset($erreurs['date_sortie'])) : ?>
                    <div class="erreur-message"><?= $erreurs['date_sortie'] ?></div>
                <?php
                    $erreurs['date_sortie'] = "";
                endif;
                ?>
            </div>

            <div class="form-group form-half">
                <label for="duree">Durée (en minutes) <span class="required">*</span></label>
                <input type="number" name="duree" placeholder="Ex: 166" value="<?= $duree ?>" required>
                <div class="message">la durée doit être un entier supérieur à 0</div>
                <?php if (isset($erreurs['duree'])) : ?>
                    <div class="erreur-message"><?= $erreurs['duree'] ?></div>
                <?php
                    $erreurs['duree'] = "";
                endif;
                ?>
            </div>
        </div>

        <div class="form-group form-full">
            <label for="synopsis">Synopsis <span class="required">*</span></label>
            <textarea name="synopsis" placeholder="Le héro commence son périple..." required><?= $synopsis ?></textarea>
            <div class="message">Le synopsis doit être d'au moins 10 caractères</div>
            <?php if (isset($erreurs['synopsis'])) : ?>
                <div class="erreur-message"><?= $erreurs['synopsis'] ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group form-full">
            <label for="affiche">Affiche web (URL de l'image) <span class="required">*</span></label>
            <input type="url" name="affiche" placeholder="Ex: https://example.com/image.jpg" value="<?= $affiche ?>" required>
            <div class="message">L'URL de l'affiche doit être valide</div>
            <?php if (isset($erreurs['affiche'])) : ?>
                <div class="erreur-message"><?= $erreurs['affiche'] ?></div>
            <?php
                $erreurs['affiche'] = "";
            endif;
            ?>
        </div>

        <div class="form-row">
            <div class="form-group form-half">
                <label for="genre">Genre <span class="required">*</span></label>
                <select name="genre" id="genre">
                    <option value="">-- Sélectionnez un genre --</option>
                    <?php foreach ($genres as $genre) : ?>
                        <option value="<?= $genre['id'] ?>"><?= $genre['nom'] ?></option>
                        <?php $genre =  $genre['id'] ?>
                    <?php endforeach; ?>
                </select>
                <?php if (isset($erreurs['genre'])) : ?>
                    <div class="erreur-message"><?= $erreurs['genre'] ?></div>
                <?php
                    $erreurs['genre'] = "";
                endif;
                ?>
            </div>

            <div class="form-group form-half">
                <label for="pays">Pays <span class="required">*</span></label>
                <select name="pays" id="pays">
                    <option value="">-- Sélectionnez un pays --</option>
                    <?php foreach ($Pays as $pays) : ?>
                        <option value="<?= $pays['id'] ?>"><?= $pays['nom'] ?></option>
                        <?php $pays =  $pays['id'] ?>
                    <?php endforeach; ?>
                </select>
                <?php if (isset($erreurs['pays'])) : ?>
                    <div class="erreur-message"><?= $erreurs['pays'] ?></div>
                <?php
                    $erreurs['pays'] = "";
                endif;
                ?>
            </div>
        </div>

        <div class="message">Le symbole <span class="required">*</span> indique les champs obligatoires</div>
        <button type="submit" class="btn-submit">
            ⊕ Ajouter ce film au catalogue
        </button>
    </form>
</div>

<?php include __DIR__ . "/../src/includes/footer.php"; ?>