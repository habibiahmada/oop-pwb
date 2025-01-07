<?php

require_once "Animal.php";
require_once "Frog.php";
require_once "Ape.php";

function displayAnimalByInheritance($animal, $extraMethod = null) {
    echo "Name : " . $animal->name . "<br>";
    echo "Legs : " . $animal->legs . "<br>";
    echo "Cold Blooded : " . $animal->cold_blooded . "<br>";
    if ($extraMethod) {
        echo ucfirst($extraMethod) . " : " . $animal->$extraMethod() . "<br>";
    }
    echo "<br><br>";
}

// Menginisialisasi semua hewan disini
$sheep = new Animal("shaun");
$kodok = new Frog("buduk");
$sungokong = new Ape("Kera sakti");


// Menampilkan data disini
displayAnimalByInheritance($sheep);
displayAnimalByInheritance($kodok, "jump");
displayAnimalByInheritance($sungokong, "yell");

?>