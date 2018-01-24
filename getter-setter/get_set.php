<?php

  class Person
  {
    private $name;
    private $DateOfBirth;

    public function setName($name)
    {
      if (!is_string($name)) {
        throw new \Exception("this is not a string");

      }
      $this->name = $name;
    }

    public function setDateOfBirth($DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth;
    }

    public function getName()
    {
      return $this->name;
    }

    public function getDateOfBirth()
    {
      return $this->DateOfBirth;
    }
  }


$aakash = new Person();
// To throw an error
// $aakash->setName(1321111531);

$aakash->setName('Aakash');
$aakash->setDateOfBirth('06-09-1992');

$name = $aakash->getName();
$dateofbirth = $aakash->getDateOfBirth();

echo $dateofbirth;
echo $name;
