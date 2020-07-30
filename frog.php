<?php

require_once 'animal.php';

class Frog extends Animal{
    public function jump(){
        echo "Hop hop" . "<br>";
        
    }
    //$this->legs=4 . "<br>";
    public $legs=4 ."<br>";
}
?>
