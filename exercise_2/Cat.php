<?php


class Cat extends Animal{

public $feline_breed; 

function __construct($name , $weight , $height , $feline_breed) {
   
    parent::__construct($name , $weight , $height);

    $this->feline_breed = $feline_breed; 

  }

function meow(){

echo 'Miaoooo'; 


}


}
