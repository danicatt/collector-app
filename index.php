<?php
require('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Cartoon Character Collection </title>
        <link rel="stylesheet" href="stylesheet.css" />
        <link rel="normalize_css" href="normalize_css.css" />
    </head>
    <body>
        <div class="titleBar">
            <h1> Cartoon Character Collection </h1>
        </div>
        <main>
    <?php
        foreach ($cartoonArray as $character){
            echo '<h2>' . $character["name"] . '</h2>';
            echo '<p>' . "From" . ': ' . $character["tvshow"] . '</p>';
            echo '<p>' . "Species" . ': ' . $character["species"] . '</p>';
            echo '<p>' . "Catchphrase" . ': '  . $character["catchphase"] . '</p>';
        }
    ?>
        </main>
    </body>
</html>

