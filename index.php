<?php

require(__DIR__ . '/data.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>

</html>

<?php
require(__DIR__ . '/header.php');
?>


<!-- card for each team -->

<main>
    <div class="title">
        <h1> UEFA women's Europa Cup 2026/27</h1>
        <h2>Round of 16</h2>
    </div>
    <div class="cards">
        <?php foreach ($teams as $team => $data):
            $logo = $data['logo'];

            if ($team === 'Eintracht Frankfurt') {
                $logo = $data['logo_uefa'];
            }
            if ($team === 'Czarni Sosnowiec') {
                $logo = $data['logo_uefa'];
            }

        ?>
            <div class="card">
                <div class="imgBackground">
                    <img src=" <?= $logo ?>"
                        onerror="this.onerror=null;this.src=' <?= $data['logo_uefa'] ?>'"
                        alt=" Team logo">
                </div>
                <h3>
                    <?= $team ?>
                </h3>
                <ul>
                    <li>
                        <?= $data['city'] ?>
                    </li>
                    <li>
                        <?= $data['league'] ?>
                    </li>
                </ul>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</main>
</body>