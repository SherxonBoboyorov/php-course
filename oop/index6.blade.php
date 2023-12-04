<?php 

// Interfaces


interface Animal {
  public function makeSound();
  public function eat();
}

class Dog implements Animal {
    public function makeSound()
    {
      return 'Vov vov';
    }

    public function eat()
    {
      return 'eating meat';
    }
}

class Cat implements Animal {
  public function makeSound()
  {
    return 'Meow meow';
  }

  public function eat()
  {
    return 'eating wis kiss ';
  }
}








?>