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

<!-- the base for the header, needs more work -->
<header>
    <div></div>
    <nav></nav>
</header>

<!-- card for each team -->

<main>
    <?php foreach ($teams as $team => $data):
    ?>
        <div class="card">
            <div class="imgBackground">
                <img src=" <?= $data['logo'] ?>" alt=" Team logo">
            </div>
            <h2>
                <?= $team ?>
            </h2>
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
</main>
</body>