<?php
session_start();
$prenom = '';
if (isset($_SESSION['prenom'])){
    $prenom = $_SESSION['prenom'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script 2</title>
</head>

<body>
    <h1>Script 2</h1>
    <?php if($prenom !== '') :?>
        <p>Bonjour <?= $prenom ?></p>
    <?php else : ?>
        <p>Desolé, je ne vous connais pas !</p>
    <?php endif; ?>
</body>
</html>