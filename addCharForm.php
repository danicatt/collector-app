<html>
<head>
    <title>Add a Cartoon Character</title>
    <link rel="stylesheet" type=text/css href="stylesheet.css" />
    <link href="https://fonts.googleapis.com/css?family=Baloo+Da+2|Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <h1 class="title"> Add a character to your collection </h1>
        <div> 
            <a href="index.php"><button class="goToAddBtn">Back to your collection</button></a>
        </div>
        
</header>
<div id="main">
    <h2 class="subheader">Let's get some details...</h1>
    <form action="" method="post">
        <div class=inputContainer>
            <label class="label">Character's name :</label>
            <input type="text" name="name" id="inputBox" required="required" placeholder="Their name"/><br /><br />
            <label class="label">TV Show :</label>
            <input type="text" name="tvshow" id="inputBox" required="required" placeholder="Which TV show are they from?"/><br/><br />
            <label class="label">What species are they?</label>
            <input type="text" name="species" id="inputBox" required="required" placeholder="Duck, human, monkey....robot?"/><br /><br />
            <label class="label">Do they have a catchphrase?</label>
            <input type="text" name="catchphase" id="inputBox" placeholder="i.e I tawt I taw a puddy tat!"/><br /><br />
            <label class="label">Upload a picture</label>
            <input type="text" name="image" id="inputBox" placeholder="Add the file name of picture here. i.e. bart-simpson.jpg "/><br /><br />
        </div>
        <div class="submitContainer">
        <input type="submit" value=" submit " name="submit"/><br />
        </div>
    </form>
</div>
</body>
</html>

<?php
include('submitToDatabase.php');
?>

