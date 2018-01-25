<?php

 # things to research
 ## polymorphism
 ## stratergy Pattern
 ## Concrete Classes

  /**
   * Think of an interface as an contract inside an interface you are not going to have
   * any real logic. As thats not what it is for, it just lays down the form that any
   * implementation must adhere to.
   */
  interface Animal
  {
    public function Communicate();
  }

  /**
   *
   */
  class Dog implements Animal
  {
    public function Communicate()
    {
      # code...
      return 'Bark';
    }
  }

  /**
   *
   */
  class Cat implements Animal
  {
    public function Communicate()
    {
      # code...
      return 'Meow';
    }
  }
