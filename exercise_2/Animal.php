<?php

class Animal{

public $name; 
public $weight; 
public $height; 

//Cobstructor
function __construct($name , $weight , $height) {
    $this->name = $name;
    $this->weight = $weight;
    $this->height = $height;  
  }

// Methods
function set_name($name) {
    $this->name = $name;
  }

  function set_weight($weight) {
    $this->weight = $weight;
  }


  function set_height($height) {
    $this->height = $height;
  }


  function get_name() {
    return  $this->name ; 
  }

  function get_weight() {
    return $this->weight ;
  }


  function get_height() {
    return $this->height ;
  }

}

?>