<?php
//class
class Animal
{
    //property
    public $name;
    public $legs=2 ."<br>";
    public $cold_blooded='false' ."<br>";
    
    //metod
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    function __construct($name){
        $this -> name = $name . "<br>";
        
    }
}




?>