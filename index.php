<?php

//php librayr
spl_autoload_register(function ($class) {

    $class = str_replace('PokemonOOPAssignment\\', '', $class);

    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);// for mac and windows

    $filepath = __DIR__ . 'includes/classes/' . $class . '.php';

    require_once $filepath;

//getInfo string from the pokemon.php of pokemon,type and ability
$gengar = new Gengar("Gengar","Ghost/Poison","Levitate");
$dragonite = new Dragonite("Dragonite","Dragon/Flying","Inner Focus");
$snorlax = new Snorlax("Snorlax","Normal","Thick Fat");
$blissey = new Blissey("Blissey","Normal","Natural Cure");

echo $gengar->getInfo() . "<br>";
echo $gengar->attack() . "<br><br>";

echo $dragonite->getInfo() . "<br>";
echo $dragonite->attack() . "<br><br>";

echo $snorlax->getInfo() . "<br>";
echo $snorlax->defend() . "<br><br>";

echo $blissey->getInfo() . "<br>";
echo $blissey->support();

});
