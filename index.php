<?php

require_once 'animal.php';
require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal("shaun");

echo "Release 0"."<br>"; 

echo $sheep->name; // "shaun"
echo $sheep->legs; // 2
echo $sheep->cold_blooded; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
echo "<br>"."Release 0"."<br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->name;
$sungokong->yell();// "Auooo"

$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"

?>