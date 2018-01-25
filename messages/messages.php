<?php

  // important things to learn
  ## Type Hinting
  ## Class Dependency
  ## Loosely Coupled
  ## Tightly Coupled

  /**
   * The person Class
   */
  class Person
  {
    protected $name;
    function __construct($name)
    {
      $this->name = $name;
    }
  }

/**
 * The Buisness Class
 * When you declare the class name along with the variable you are
 * type hinting the type of value that will be passed to it
 */
class Buisness
{
  protected $staff;
  function __construct($staff)
  {
    $this->staff = $staff;
  }

  public function hire(Person $person)
  {
    # add person to the staff this is also an example of sending messages
    $this->staff->add($person);
  }

  public function getStaffMembers()
  {
    return $this->staff->members();
  }
}

/**
 * The Staff class
 */
class Staff
{
  protected $members = [];

  function __construct($members = [])
  {
    $this->members = $members;
  }

  public function add(Person $person)
  {
    $this->members[] = $person;
  }

  public function members()
  {
    return $this->members;
  }
}

$aakash = new Person('Aakash');
$staff = new Staff([$aakash]);
$conceptionweb = new Buisness($staff);

$conceptionweb->hire(new Person('Paulami Dey'));

var_dump($conceptionweb->getStaffMembers());
