<?php

$db = new PDO('mysql:host=DB;dbname=collectorApp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query('SELECT `name` FROM `cartoonChars`;');
$data = $query->fetchAll();

var_dump($data);