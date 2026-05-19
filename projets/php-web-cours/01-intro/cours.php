<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Intro</title>
    <style>
        p span{
            color: blue;
            font-weight: bold;
            font-size: 20px;
        }
    </style>

</head>
<body>
    <p>Introduction pour PHP WEB</p>
    <!-- Code PHP -->
    <?php
        // on est dans du php
        echo "<p>Introduction cours php-web</p>";
        echo "<h2>Bts Sio1</h2>"
    ?>
    <?php echo "<p>Introduction cours php-web</p>"; ?>
    <?= "<p>Introduction cours php-web</p>" ?>  <!-- equivalent a la ligne du dessus-->

    <!-- Affficher la date du jour au format d/m/Y dans une balise <p> -->
    <p>Nous somme le <span><?= date("d/m/Y G:i:s"); ?></span></p>
</body>
</html>