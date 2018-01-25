<?php

  /**
   *   when you think static you should think it of as shared value
   *   static values are always shared they are not bound to any specific
   *   object. So from this point of view they sort of vreak encapsulation.
   *
   */
  class Math
  {
    public static function add(...$nums)
    {
      return array_sum($nums);
    }
  }

//echo Math::add(1,2,3,89,1000);

  /**
   *
   */
  class Person
  {
    public static $age = 1;

    public function haveBirthday()
    {
      static::$age++;
    }
  }

$person = new Person;
$person->haveBirthday();

// in order to fail it
$jane = new Person;
$jane->haveBirthday();

echo Person::$age;
