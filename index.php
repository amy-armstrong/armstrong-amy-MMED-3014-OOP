<?php

//php librayr
spl_autoload_register(function ($class) {

    $class = str_replace('armstrong-amy-MMED-3014-OOP\\', '', $class);

    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);// for mac and windows

    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';

    require_once $filepath;

});

//getInfo string from the pokemon.php of pokemon,type and ability
// the objects!!!
$gengar = new Gengar("Gengar","Ghost/Poison","Levitate");
$dragonite = new Dragonite("Dragonite","Dragon/Flying","Inner Focus");
$snorlax = new Snorlax("Snorlax","Normal","Thick Fat");
$blissey = new Blissey("Blissey","Normal","Natural Cure");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMED-3014 OOP</title>
</head>
<body>
    
    <h1>Most OP Pokemon Team</h1>

    <?php
    echo $gengar->getInfo() . "<br>";
    echo $gengar->attack() . "<br><br>";

    echo $dragonite->getInfo() . "<br>";
    echo $dragonite->attack() . "<br><br>";

    echo $snorlax->getInfo() . "<br>";
    echo $snorlax->defend() . "<br><br>";

    echo $blissey->getInfo() . "<br>";
    echo $blissey->support();

    ?>
</body>
</html>



