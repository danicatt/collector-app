<?php

$db = new PDO('mysql:host=DB;dbname=collectorApp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query('SELECT `name`, `species`, `tvshow`, `catchphase`, `image`  FROM `cartoonChars`;');
$cartoonArray = $query->fetchAll();


function loopCartoons($cartoonArray){
    $return = '';
    foreach ($cartoonArray as $character){
        $return .= "<div class='eachCharacter'>";
        $return .= "<h2 class='charName'>" . $character['name'] . "</h2>";
        $return .= "<p class='cardContent'>" . "From". ': '. $character['tvshow']. "</p>";
        $return .= "<p class='cardContent'>" . "Species". ': '. $character['species']. "</p>";
        $return .= "<p class='cardContent'>" . "Catchphrase". ': '. $character['catchphase']. "</p>";
        $return .= "<p class='cardContent'>" . $character['image']. "</p>";
        $return .= "</div>";
    }
        return $return;
}