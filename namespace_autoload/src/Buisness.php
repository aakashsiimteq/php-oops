<?php

namespace Acme;

class Buisness
{
  protected $staff;

  function __construct($staff)
  {
    $this->staff = $staff;
  }

  public function hire(Person $person)
  {
    $this->staff->add($person);
  }

  public function getBuisnessMembers()
  {
    return $this->staff->members();
  }
}
