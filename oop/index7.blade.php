<?php 

// Traits


trait AnimalTrait {

  public function eat()
  {
    return 'eating wis kiss ';
  }
  
  public function sleep()
  {
     return 'sleeping';
  }
}

trait Walk {
  public function walking()
  {
    return 'walking';
  } 
}


interface Animal {
  public function makeSound();
}

class Dog implements Animal {
  use AnimalTrait;
    public function makeSound()
    {
      return 'Vov vov';
    }
}

class Cat implements Animal {
  use AnimalTrait;
  public function makeSound()
  {
    return 'Meow meow';
  }
}


class Kitten extends Cat {
  use AnimalTrait, Walk;
}








$dog = new Dog;

$cat = new Kitten;

var_dump($cat->walking());








?>