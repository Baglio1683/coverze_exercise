<?php 

class Dog extends Animal {

    public $dog_breed; 


    function __construct($name , $weight , $height , $dog_breed) {
   
        parent::__construct($name , $weight , $height);
    
        $this->dog_breed = $dog_breed; 
    
      }
    


    function bark(){

        echo 'Bauuuu'; 
               
    }

}
