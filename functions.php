<?php
function getDatabase(): PDO{
    $db = new PDO('mysql:host=DB;dbname=collectorApp', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getCharacters(PDO $db): array{
    $query = $db->query('SELECT `name`, `species`, `tvshow`, `catchphase`, `image`  FROM `cartoonChars`;');
    $cartoonArray = $query->fetchAll();
    return $cartoonArray;
}

function displayCartoons(array $cartoonArray): string{
    $return = '';
    foreach ($cartoonArray as $character){
        if (
            array_key_exists('name', $character) && 
            array_key_exists('tvshow', $character) && 
            array_key_exists('species', $character) && 
            array_key_exists('catchphase', $character) && 
            array_key_exists('image', $character)
        ){
            $return .= "<div class='eachCharacter'>";
            $return .= "<h2 class='charName'>" . $character['name'] . "</h2>";
            $return .= "<p class='cardContent'>" . "From". ': '. $character['tvshow']. "</p>";
            $return .= "<p class='cardContent'>" . "Species". ': '. $character['species']. "</p>";
            $return .= "<p class='cardContent'>" . "Catchphrase". ': '. $character['catchphase']. "</p>";
            $return .= "<img src=" . $character['image'].">";
            $return .= "</div>";
        }
    }
        return $return;
}

function addCharsToDatabase(PDO $db, array $cartoonArray) {
    $queryAdd = $db->prepare("INSERT INTO `cartoonChars` (`name`, `tvshow`, `species`, `catchphase`, `image`) VALUES (?, ?, ?, ?, ?)");
    $result = $queryAdd->execute([$cartoonArray["name"], $cartoonArray["tvshow"], $cartoonArray["species"], $cartoonArray["catchphase"], $cartoonArray["image"]]);
    return $result;
}

function validateInput($userData){
    if(
        !empty($userData['name']) &&
        !empty($userData['tvshow']) &&
        !empty($userData['species'])
    ){
        return true;
    }
    else {
        return false;
    }
}
