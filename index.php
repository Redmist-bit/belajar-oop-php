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
echo "<br>"."Release 1"."<br>";

$sungokong = new Ape("kera sakti");
//hapus coment jika ingin menjalankan
/*echo $sungokong->name; // kera sakti
echo $sungokong->legs; // 2 mengikuti parent class*/
$sungokong->yell();// "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
//hapus coment jika ingin menjalankan
/*echo $kodok->name; // buduk
echo $kodok->legs;// 4, karna telah diset ulang pada child class/ class frog*/
$kodok->jump(); // "hop hop"

?>