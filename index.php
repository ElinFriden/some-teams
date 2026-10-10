<?php

require(__DIR__ . '/data.php');

?>

<?php foreach ($teams as $team => $data):
?>
    <h2>
        <?= $team ?>
    </h2>
    <img src=" <?= $data['logo'] ?>" alt="">
    <li>
        <?= $data['city'] ?>
    </li>
    <li>
        <?= $data['league'] ?>
    </li>
<?php
endforeach;
?>

<!-- the base for the header, needs more work -->

<body>
    <header>
        <div></div>
        <nav></nav>
    </header>

    <!-- card for each team -->
    <main>
        <div>
            <h2></h2>
            <img>
            <ul>
                <li></li>
                <li></li>
            </ul>
        </div>
    </main>
</body>