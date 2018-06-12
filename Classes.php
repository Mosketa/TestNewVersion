<?php

// classe de base, avec des propriétés et des méthodes membres
class Vegetable {

   var $edible;
   var $gree;
   var $color;
   var $blue;

   function __construct($edible, $color="green")
   {
       $this->edible = $edible;
       $this->color = $color;
   }

   function is_edible()
   {
       return $this->edible;
   }

   function what_color()
   {
       return $this->color;
   }
} // fin de la classe Vegetable

// étend la classe de base
class Spinach extends Vegetable {

   var $cooked = false;
   var $test;

   function __construct()
   {
       parent::__construct(true, "green");
   }

   function cook_it()
   {
       $this->cooked = true;
   }

   function is_cooked()
   {
       return $this->cooked;
   }
} // fin de la classe Spinach

?>