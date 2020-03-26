<?php 
require('functions.php');

$db = getDatabase();

if (validateInput($_GET)){
    addCharsToDatabase($_GET, $db);
    header ("Location: ../index.php");
}
    else {
        header("Location: ../addCharForm.php");
}
