<?php
//class
class Animal
{
    //property
    public $name;
    public $legs=2 ."<br>";
    public $cold_blooded='false' ."<br>";
    
    //metod
    function __construct($name){
        $this -> name = $name . "<br>";
        
    }
}




?>