<?php 

require('functions.php');

$db = getDatabase();


if (validateInput($_POST)){
    addCharsToDatabase($db, $_POST);
    header ("Location: index.php");
}
    else {
        header("Location: addCharForm.php");
}
