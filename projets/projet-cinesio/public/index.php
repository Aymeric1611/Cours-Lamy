<?php
include __DIR__ . "/../src/includes/header.php";
require_once __DIR__ . "/../src/repository/filmRepository.php";
require_once __DIR__ . "/../src/lib/functions.php";
$films = findAllFilms();

$estConnecte = false;

if (isset($_SESSION['utilisateur'])) {
    $estConnecte = true;
}
?>

<?php if ($estConnecte === false) : ?>
    <h1>Bienvenue sur CinéSIO.<br>Veuillez vous connecter pour accéder au catalogue.</h1>
<?php else: ?>
    <div class="entete">
        <h2>Catalogue des Films</h2>

        <p>Il y a actuellement <span class="violet"><?= count($films) ?></span> films dans le catalogue.</p>
    </div>

    <div class="flex-conteneur">
        <?php foreach ($films as $film): ?>
            <div class="card">
                <div><img src="<?= $film["image"] ?>" alt="<?= $film["titre"] ?>"></div>
                <div class="badge"><?= $film["initiale"] ?></div>
                <div class="description">
                    <div class="card-info">
                        <h3><?= $film["titre"] ?></h3>
                        <div><?= $film["genre"] ?> • <?= transformerEnHeureMin($film["duree"]) ?></div>
                        <div><?= $film["synopsis"] ?></div>
                    </div>
                    <a href="detail-film.php?id=<?= $film["id"] ?>" class="btn-details">Détails</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php include __DIR__ . "/../src/includes/footer.php"; ?>