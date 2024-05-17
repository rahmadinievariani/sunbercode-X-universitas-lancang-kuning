<?php

require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');


$sheep = new Animal("shaun");

echo "name : $sheep->name <br>";
echo "legs : $sheep->legs <br>";
echo "cold blooded : $sheep->cold_blooded <br><br>";



$kodok = new Frog("buduk");

echo "name : $kodok->name <br>";
echo "legs : $kodok->legs <br>";
echo "cold blooded : $kodok->cold_blooded <br>";
$kodok->buduk();

$sungokong = new Ape("kerasakti");

echo "<br><br>name : $sungokong->name <br>";
echo "legs : $sungokong->legs <br>";
echo "cold blooded : $sungokong->cold_blooded <br>";
$sungokong->kerasakti();









?>
