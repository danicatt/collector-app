<?php 
if(isset($_POST["submit"])) {
    $hostname = 'localhost';
    $username = 'root';
    $password = 'password';

    try {
        $db = new PDO('mysql:host=DB;dbname=collectorApp', $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `cartoonChars` (`name`, `tvshow`, `species`, `catchphase`, `image`) VALUES ('".$_POST["name"]."','".$_POST["tvshow"]."','".$_POST["species"]."','".$_POST["catchphase"]."','".$_POST["image"]."')";
        if($db->query($sql)) {
            echo "New Record Inserted";
        }
        else{
            echo "Data not inserted";
        }

        $db = null;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}
