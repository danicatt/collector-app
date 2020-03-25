<?php
require('functions.php');
$db = getDatabase();
$cartoonArray = getCharacters($db);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cartoon Character Collection</title>
        <link rel="stylesheet" type=text/css href="stylesheet.css" />
        <link rel="normalize_css" href="normalize_css.css" />
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Fredoka+One&display=swap" rel="stylesheet" />
    </head>
    <body>
        <div class="titleBar">
            <h1 class="title">Cartoon Character Collection</h1>
        </div>
        <main>
            <div class="collectionCards">
                <?php
                echo displayCartoons($cartoonArray);
                ?>
            </div>
        </main>
    </body>
</html>
