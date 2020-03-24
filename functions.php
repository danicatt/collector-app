<?php

$db = new PDO('mysql:host=DB;dbname=collectorApp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query('SELECT `name`, `species`, `tvshow`, `catchphase` FROM `cartoonChars`;');
$cartoonArray = $query->fetchAll();

?>