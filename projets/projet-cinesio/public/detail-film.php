<?php
require_once __DIR__ . "/../src/repository/filmRepository.php";
require_once __DIR__ . "/../src/lib/functions.php";

$films = findAllFilms(); 
$messageErreur = "";
$FilmRecherche = null;

$id = $_GET['id'] ?? '';

if ($id === ''){
    $messageErreur = "URL invalide : identifiant du film manquant.";
} elseif (filter_var($id, FILTER_VALIDATE_INT) === false){
    $messageErreur = "URL invalide : identifiant doit être une valeur numérique.";
} elseif ($id <= 0){
    $messageErreur = "URL invalide : indentifiant doit être strictement positif.";
} else {
    //le parametre est present et valide
    $id = (int)$id; // facultatif
    //rechercher le produit  dans le tableau
    foreach ($films as $film){
        if ($film['id'] === $id){
            $filmRecherche = $film;
            break;
        }
    }
    // tester si le produit recherché exite
    if ($filmRecherche === null){
        $messageErreur = "Le film recherché n'exite pas dans le catalogue.";
    }
}

include __DIR__ . "/../src/includes/header.php";
?>

<a href="index.php" class="back-link"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 10">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg>Retour à l'Accueil</a>

<div class="card-detail">
    <?php if ($messageErreur !== ""): ?>
        <div>
            <h1>Film introuvable</h1>
            <p>Désolé, le film que vous recherchez n'existe pas ou n'est pas disponible dans notre catalogue.</p>
            <a class="btn" href="#">Explorer le catalogue</a>
        </div>
    <?php else : ?>
    <div>
        <img src="<?= $film["image"]?>" alt="<?= $film["titre"]?>">
    </div>
    <div>
        <p><?= $film["initiale"] ?> • <?= $film["genre"]?> • <?= date('Y', strtotime($film["date_sortie"])) ?></p>
        <h2><?= $film["titre"] ?></h2>
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
            </svg><?= transformerEnHeureMin($film["duree"]) ?>
        </p>
        <span class="synopsis-title">Synopsis</span>
        <p><?= $film["synopsis"] ?></p>
        <a class="btn" href="#">On verra plus tard ...</a>
    </div>
    <?php endif; ?>
</div>

<?php include __DIR__ . "/../src/includes/footer.php"; ?>